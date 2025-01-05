<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response; 
use Illuminate\Support\Facades\Auth;
use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Models\{
    User
};

class ApiLoginController extends Controller
{

    public function login(Request $request)
    {

        try {

            $input = $request->only('usuario', 'senha');

            if(!isset($input['usuario']))
            {
                return $this->usuarioOUsenhaNEnviado('usuario');
            }

            $usuario    = $input['usuario'];

            if(!isset($input['senha']))
            {
                return $this->usuarioOUsenhaNEnviado('senha');
            }
            
            $senha = $input['senha'];

            if($usuario == "")
            {
                return $this->usuarioInvalido();
            }

            if($senha == "")
            {
                return $this->senhaInvalida();
            }

            $usuario    = $input['usuario'];
            $senha      = $input['senha'];

            return $this->efetuarLogin($usuario, $senha);

        } catch (Exception $e) {

            return $this->loginNaoAutorizado();

        }

    }
    
    public function efetuarLogin($usuario, $senha)
    {

        $credentials = [
            'email' => $usuario,
            'password' => $senha
        ];

        if(Auth::attempt($credentials))
        {
            $user = Auth::user();
            $usuario_logado = [
                'id'            => $user->id,
                'nome'          => $user->nome,
                'email'         => $user->email,
                'tipo_id'       => $user->tipo_id, 
            ];

            $key = "maisseguromastertoken357*";

            $payload = array(
                "iss" => "MAISSEGURO",
                "sub" => "APP MAISSEGURO",
                "aud" => "app_maisseguro",
                "exp" => time() + 1 * 3600
            );

            //Gerando o Token
            $token = JWT::encode($payload, $key, 'HS256');
        
            return response()->json([
                'token' => $token,
                'usuario' => $usuario_logado,
                'message' => 'Login efetuado com sucesso.',
                'bloqueio' => false,
                'success' => true
            ], Response::HTTP_OK);
        
        }else{

            return $this->loginNaoAutorizado();

        }


    }

    public function loginNaoAutorizado()
    {
        
        return response()->json([
                'message' => 'Usuário ou senha incorretos.',
                'bloqueio' => false,
                'success' => false
                ], Response::HTTP_UNAUTHORIZED);

    }

    public function usuarioBloqueado()
    {
        
        return response()->json([
                'message' => 'O seu usuário está bloqueado. Entre em contato com a Floratrix.',
                'bloqueio' => true,
                'success' => false
                ], Response::HTTP_UNAUTHORIZED);

    }

    public function usuarioOUsenhaNEnviado($string)
    {
        
        return response()->json([
                'message' => 'Parâmetro '.$string. ' não enviado.',
                'bloqueio' => false,
                'success' => false
                ], Response::HTTP_BAD_REQUEST);

    }

    public function usuarioInvalido()
    {
        
        return response()->json([
                'message' => 'Favor informar um usuário.',
                'bloqueio' => false,
                'success' => false
                ], Response::HTTP_BAD_REQUEST);

    }

    public function senhaInvalida()
    {
        
        return response()->json([
                'message' => 'Favor Informar uma senha.',
                'bloqueio' => false,
                'success' => false
                ], Response::HTTP_BAD_REQUEST);

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