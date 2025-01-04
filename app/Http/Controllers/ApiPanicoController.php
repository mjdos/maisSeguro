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
                'latitude' => 'required|string|max:255',
                'longitude' => 'required|string|max:255',
                'status' => 'required|integer',
            ]);

            $item = Panico::create($validated);

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
        $key = 'maisseguromastertoken357*';

        try{
            
            $decoded = JWT::decode($token, new Key($key, 'HS256'));

            
        } catch (\Exception $e) { 
            return false;
        }

        return true;

    }
    
}