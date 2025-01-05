<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', '+Seguro')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">


    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

    
    <link rel="stylesheet" href="{{ url('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/fonts.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/nice-select2.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/login-register.css')}}">

    <meta name="theme-color" content="#fafafa">
       <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
        }
        .features {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 30px;
            justify-content: center;
        }
        .feature {
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            border-radius: 8px;
            text-align: left;
            width: 280px;
            transition: transform 0.3s;
        }
        .feature:hover {
            transform: translateY(-5px);
        }
        .feature-icon {
            font-size: 2.5em;
            color: #007bff;
            margin-bottom: 15px;
        }
        .feature-title {
            font-size: 1.2em;
            margin-bottom: 10px;
            color: #333;
        }
    </style>
</head>

@include('painel.layout.header')
<div align="center">
    <br>
<img src="{{ url('assets/img/MJSP.png') }}" height="190">
</div>
<br>

<div class="container">
    <!-- Hero Section -->
    <div class="features">
        <div class="feature">
            <div class="feature-icon"><i class="fas fa-user-shield"></i></div>
            <div class="feature-title">Proteção de Identidade</div>
            <p>Mantenha sua identidade segura ao enviar informações confidenciais para a polícia.</p>
        </div>
        <div class="feature">
            <div class="feature-icon"><i class="fas fa-camera"></i></div>
            <div class="feature-title">Envio de Mídias</div>
            <p>Envie fotos e vídeos diretamente para ajudar nas investigações, sem complicações.</p>
        </div>
        <div class="feature">
            <div class="feature-icon"><i class="fas fa-sync"></i></div>
            <div class="feature-title">Atualizações em Tempo Real</div>
            <p>Receba feedback sobre o status da investigação e atualizações em tempo real.</p>
        </div>
        <div class="feature">
            <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
            <div class="feature-title">Segurança e Confiabilidade</div>
            <p>Plataforma confiável com criptografia de ponta-a-ponta para proteger seus dados.</p>
        </div>
    </div>

  
  
</div>
<br>
<div align="center">
<img src="{{ url('assets/img/org_realizacao.png') }}">
</div>


<!-- main content area -->
@include('painel.layout.footer')
