<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Mais Seguro')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">


    <meta name="theme-color" content="#fafafa">
       <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            max-height: 100%;
        }
        .container {
            max-width: 900px;
            max-height: 100%;
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

<div align="center">
    <br>
    <img src="{{ url('assets/img/logo.png') }}" height="180">
    <h1>Mais Seguro</h1>
    <font size="3"><a href="{{ route('login') }}">Login</a></font>
</div>
<br>

<div class="container">

    <div class="features">
        <div class="feature" style="width:900px">
            <img src="{{ url('assets/img/home.png') }}"><br>
        </div>
    </div>

</div>