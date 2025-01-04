<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class SiteController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function entregas_user()
    {
        return view('entregas');
    }
    public function login()
    {
        return view('login');
    }

    public function store(Request $request)
    {

        // Session::flush();

        // $credentials = [
        //     'email' => $request->usuario,
        //     'password' => $request->senha
        // ];

        // if(Auth::attempt($credentials))
        // {

        //     $user = Auth::user();

        //     $usuario_logado = [
        //         'id'            => $user->id,
        //         'nome'          => $user->name,
        //         'email'         => $user->email,
        //     ];

        //     Session::put(['usuario' => $usuario_logado]);

        //     return redirect()->route('home.index');
        $credentials = [
            'usuario' => $request->usuario,
            'senha' => $request->senha
        ];

        // Faz a requisição POST para a API de login
        $response = Http::post(route('api.login'), $credentials);

        // Verifica se a resposta é bem-sucedida
        if ($response->successful()) {
            $data = $response->json();

            // Armazena o usuário na sessão ou realiza outras operações conforme necessário
            Session::put(['usuario' => $data['data']]);

            return redirect()->route('home.index')->with('success', $data['message']);
        }

        // Retorna para a página anterior com erro se a autenticação falhar
        return redirect()->back()->withInput()->withErrors([
            'error' => $response->json()['message']
        ]);
        // }

        // return redirect()->back()->withInput()->withErrors(["Usuário ou Senha Incorretos."]);

    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function home()
    {
        return view('painel.manager.gestao');
    }
    public function ranking()
    {

        return view('ranking');
    }
    public function categorizar()
    {

        return view('categorizar');
    }
    public function principal()
    {

        return view('painel.manager.principal');
    }

    public function emergencia()
    {

        return view('painel.manager.emergencia');
    }
    public function perfil()
    {

        return view('painel.manager.perfil');
    }
}
