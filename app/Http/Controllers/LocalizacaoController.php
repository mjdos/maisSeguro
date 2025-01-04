<?php

namespace App\Http\Controllers;

use App\Models\BotaoPanicoModel;
use App\Models\CompartilharLocalizacaoModel;
use DateTime;
use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LocalizacaoController extends Controller
{
    public function compartilharLocalizacao(Request $request)
    {
        try {
            $token = $request->bearerToken();

            if (!$token) {

                return response()->json([
                    'message' => 'Token não enviado.',
                    'success' => false
                ], Response::HTTP_UNAUTHORIZED);
            }

            $validarToken = $this->validarToken($token);

            if (!$validarToken) {
                return response()->json([
                    'message' => 'Token inválido.',
                    'success' => false
                ], Response::HTTP_UNAUTHORIZED);
            }

            $validated = $request->validate([
                'latitude' => 'required|string|max:255',
                'longitude' => 'required|string|max:255',
                'user_id' => 'required|integer',
                'comando' => 'required|boolean',
            ]);

            $item = CompartilharLocalizacaoModel::create($validated);

            return response()->json([
                'message' => 'Localização Compartilhada com sucesso.',
                'success' => true,
            ], 200);

        } catch (Exception $e) {
            return response()->json([
                'message' => 'Erro ao tentar enviar a localização',
                'error' => $e->getMessage()
            ], 400);
        }
    }

    public function botaoPanico(Request $request)
    {

        try {
            $token = $request->bearerToken();

            if (!$token) {

                return response()->json([
                    'message' => 'Token não enviado.',
                    'success' => false
                ], Response::HTTP_UNAUTHORIZED);
            }

            $validarToken = $this->validarToken($token);

            if (!$validarToken) {
                return response()->json([
                    'message' => 'Token inválido.',
                    'success' => false
                ], Response::HTTP_UNAUTHORIZED);
            }

            $validated = $request->validate([
                'latitude' => 'required|string|max:255',
                'longitude' => 'required|string|max:255',
                'user_id' => 'required|integer',
            ]);

            $item = BotaoPanicoModel::create($validated);

            return response()->json([
                'message' => 'Localização enviada com sucesso.',
                'success' => true,
            ], 200);

        } catch (Exception $e) {
            return response()->json([
                'message' => 'Erro ao tentar enviar a localização',
                'error' => $e->getMessage()
            ], 400);
        }

    }

    public function validarToken($token)
    {
        $key = "maisseguromastertoken357*";

        try {
            $decoded = JWT::decode($token, new Key($key, 'HS256'));
        } catch (Exception $e) {
            return false;
        }

        return true;
    }

    public function gerarToken(Request $request)
    {

        try {

            $data = new DateTime($request->data);
            $expiracao = $data->getTimestamp();

            $key = "maisseguromastertoken357*";

            $payload = array(
                "iss" => "MAISSEGURO",
                "sub" => $request->titulo,
                "aud" => $request->identificador,
                "exp" => $expiracao,
            );

            //Gerando o Token
            $token = JWT::encode($payload, $key, 'HS256');

            return response()->json([
                'token' => $token,
            ], 200);

        } catch (Exception $e) {

            return response()->json([
                'message' => 'Erro ao tentar gerar o token',
                'error' => $e->getMessage()
            ], 400);
        }

    }

}
