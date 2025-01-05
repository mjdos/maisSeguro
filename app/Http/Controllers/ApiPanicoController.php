<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response; 
use Illuminate\Support\Facades\Auth;
use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Models\{
    Panico
};

class ApiPanicoController extends Controller
{

    public function store(Request $request)
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
                'user_id' => 'required|integer',
                'gps' => 'required|string|max:255',
                'status' => 'required|integer',
            ]);

            $pattern = '/lat:\s*(-?\d+(\.\d+)?),\s*lng:\s*(-?\d+(\.\d+)?)/';

            if (preg_match($pattern, $validated['gps'], $matches)) {
                $latitude = $matches[1];
                $longitude = $matches[3];
            }else{
                $latitude = '';
                $longitude = '';
            }

            $dados = [
                'user_id' => $validated['user_id'],
                'latitude' => $latitude,
                'longitude' => $longitude,
                'status' => $validated['user_id'],
            ];

            Panico::create($dados);

            return response()->json([
                'enviado_em' => date('d/m/Y H:i:s'),
                'latitude' => $latitude,
                'longitude' => $longitude,
                'message' => 'Alerta de pânico enviado com sucesso!',
                'success' => true,
            ], 200);

        } catch (Exception $e) {
            return response()->json([
                'message' => 'Erro ao tentar enviar alerta de pânico!',
                'error' => $e->getMessage()
            ], 400);
        }

    }
    
    public function validarToken($token)
    {
        $key = 'maisseguromastertoken357*';

        try{
            
            $decoded = JWT::decode($token, new Key($key, 'HS256'));

            
        } catch (\Exception $e) { 
            return false;
        }

        return true;

    }
    
}