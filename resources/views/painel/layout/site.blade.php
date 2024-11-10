<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>+Seguro</title>
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
</head>

<body class="loading">
    <div class="main digital-store">
      
        <!-- header navigation -->
        <nav class="border-bottom nav-ds smart-sticky">
            <div class="navigation-wrapper container flex-space-between align-items-center">
                <div class="nav-left-hand-part">
                    <img src="{{ url('assets/img/MJSP.png') }}" alt="logo" height="81" style="margin-right: 60px;">

                    <!--  navigation menu -->
                    <ul class="navigation-menu">
                        <li class="menu-item"><a class="menu-link" href="{{route('home')}}">Home</a></li>
                        <li class="menu-item"><a class="menu-link" href="{{route('ranking')}}">Label</a></li>
                        <li class="menu-item"><a class="menu-link" href="{{route('ntf.index')}}">Label</a></li>
                        <li class="menu-item"><a class="menu-link" href="{{route('home_site.index')}}">Label</a></li>
                    </ul>
                    <!--  navigation menu -->
                </div>
                <div class="nav-right-hand-part">
                    <!-- user activity buttons -->
                 
                    <!-- user activity buttons -->
                    <!-- header user profile -->
                    <div class="header-user-profile cryptoki-notif-bttn" data-target="profile-dropdown">
                        <div class="user-meta">
                            <div class="user_name">Admin</div>
                            <div class="user_score"></div>
                        </div>
                        <div class="avatar box-42">
                            @if (Session::get('usuario'))
                                <img src="{{ url('assets/img/avatar.png')}}" alt="avatar">
                            @else
                                <img src="{{ url('assets/img/avatar2.png')}}" alt="avatar">
                                
                            @endif
                            
                            <span class="verified">
                                <svg class="crumina-icon">
                                    <use xlink:href="#check-icon"></use>
                                </svg>
                            </span>
                        </div>
                        <div class="closing-icon">
                            <svg class="crumina-icon close-icon">
                                <use xlink:href="#cross-icon"></use>
                            </svg>
                        </div>
                        <div id="profile-dropdown" class="cryptoki-notif-target">
                            <div class="profile-dropdown-header profile-cover-image"></div>
                            <div class="profile-dropdown-body">
                                <div class="profile-heading">
                                    <div class="profile-avatar avatar box-26">
                                    @if (Session::get('usuario'))
                                        <img src="{{ url('assets/img/avatar.png')}}" alt="avatar">
                                    @else
                                        <img src="{{ url('assets/img/avatar2.png')}}" alt="avatar">
                                        
                                    @endif
                                        <span class="verified">
                                            <svg class="crumina-icon">
                                                <use xlink:href="#check-icon"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="profile-link">
                                        <a class="btn  btn-small gradient-background" href="06-profile-page.html">Meu Perfil</a>
                                    </div>
                                </div>
                                <ul class="profile-menu">
                                    <li>
                                        <a href="!#"><svg class="crumina-icon">
                                            <use xlink:href="#settings-icon"></use>
                                            </svg>Configuração de Conta
                                        </a>
                                    </li>
                                    <li>
                                        <a href="14-profile-payment-history.html"><svg class="crumina-icon">
                                            <use xlink:href="#dollar-icon"></use>
                                            </svg>Pagamentos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="15-profile-purchases.html"><svg class="crumina-icon">
                                            <use xlink:href="#wallet-icon"></use>
                                            </svg>Carteira
                                        </a>
                                    </li>

                                    <li class="logout">
                                        <a href="{{ route('logout_site')}}">
                                            <svg class="crumina-icon">
                                            <use xlink:href="#logout-icon"></use>
                                            </svg>Sair
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- header user profile -->
                </div>
            </div>
        </nav>

        <!-- main content area -->
        <div class="primary-content-area container content-padding grid-small-sidebar-left">
            <aside>
                <!-- Menu de Navegação do Dashboard -->
                <div class="user-db-menu-ds">
                    <ul class="profile-menu-ds">
                        <li><a href="{{route('perfil')}}">
                            <svg class="crumina-icon">
                                <use xlink:href="#user-icon"></use>
                            </svg>Informações do Perfil
                        </a></li>
                        
                        
                        <li><a href="{{ route('emergencia') }}">
                            <svg class="crumina-icon">
                                <use xlink:href="#slide-filter-icon"></use>
                            </svg>Notificações
                        </a></li>
                        
                        <li><a href="{{ route('principal') }}">
                            <svg class="crumina-icon">
                                <use xlink:href="#dashboard-icon"></use>
                            </svg>Resumo do Painel
                        </a></li>
                        
                        <li><a href="11-profile-sales-statement.html">
                            <svg class="crumina-icon">
                                <use xlink:href="#file-text-icon"></use>
                            </svg>Relatório de Incidentes
                        </a></li>
                        
                        <li><a href="12-profile-upload-item.html">
                            <svg class="crumina-icon">
                                <use xlink:href="#picture-icon"></use>
                            </svg>Carregar Arquivo
                        </a></li>
                        
                        <li><a href="13-profile-manage-items.html">
                            <svg class="crumina-icon">
                                <use xlink:href="#picture-icon"></use>
                            </svg>Gerenciar Arquivos
                        </a></li>
                        
                        <li><a href="14-profile-payment-history.html">
                            <svg class="crumina-icon">
                                <use xlink:href="#dollar-icon"></use>
                            </svg>Histórico de Pagamentos
                        </a></li>
                        
                        <li><a href="15-profile-purchases.html">
                            <svg class="crumina-icon">
                                <use xlink:href="#wallet-icon"></use>
                            </svg>Minhas Aquisições
                        </a></li>
                        
                        <li><a href="!#">
                            <svg class="crumina-icon">
                                <use xlink:href="#circle-checked-icon"></use>
                            </svg>Verificação de Perfil
                        </a></li>
                        
                        <li class="logout">
                            <a href="!#">
                                <svg class="crumina-icon">
                                    <use xlink:href="#logout-icon"></use>
                                </svg>Sair
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            
            <main class="content">
                @yield('content')
            </main>
        </div>
        
        <!--Footer area-->
        @php
        $usuario = Session::get('usuario');
        @endphp
        <style>
            .logo {
                display: flex;
                align-items: center;
            }

            .logo-link {
                display: flex;
                align-items: center;
                text-decoration: none;
            }

            .logo-text {
                font-size: 31px;
                font-weight: bold;
                color: #333;
            }

        </style>
        <footer class="footer footer-margin">
            <div class="footer-wrapper container">

                <div class="footer-content">
                    <div class="footer-row flex-space-between align-items-center">
                        <div class="logo">
                            <a class="logo-link" href="01-home-ds.html" style="display: flex; align-items: center; text-decoration: none;">
                                <img src="{{ url('assets/img/seguro-logo.png') }}" alt="logo" style="width: 80px; margin-right: 10px;">
                                <div class="logo-text" style="font-size: 24px; font-weight: bold; color: #333;">+Seguro</div>
                            </a>
                        </div>


                    </div>
                    <br>
                    <div class="widget-content flex-space-between">
                        <div class="is-two-col-element">
                            <ul class="footer-menu">
                                <li class="menu-item"><a class="menu-link" href="{{--route('site.index')--}}">Inicial</a>
                                </li>
                            </ul>
                            <ul class="footer-menu">
                                <li class="menu-item"><a class="menu-link" href="{{--route('quemsomos')--}}">Quem Somos</a></li>
                            </ul>

                            <ul class="footer-menu">
                                <li class="menu-item"><a class="menu-link" href="{{--route('projeto.explorar')--}}">Projetos</a></li>
                            </ul>

                            <ul class="footer-menu">
                                @if(isset($usuario))
                                <li class="menu-item"><a class="menu-link" href="{{--route('projeto.criar')--}}">Criar Projeto</a></li>
                                @else
                                <li class="menu-item"><a class="menu-link" href="{{--route('site.login')--}}">Criar Projeto</a></li>
                                @endif
                            </ul>

                            <ul class="footer-menu">
                                <li class="menu-item"><a class="menu-link" href="{{--route('contato')--}}">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <div class="widget-content flex-space-between">
                        <ul class="social-icons-list">
                            <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                        <use xlink:href="#facebook-icon"></use>
                                    </svg></a></li>
                            <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                        <use xlink:href="#twitter-icon"></use>
                                    </svg></a></li>
                            <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                        <use xlink:href="#instagram-icon"></use>
                                    </svg></a></li>
                            <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                        <use xlink:href="#twitch-icon"></use>
                                    </svg></a></li>
                            <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                        <use xlink:href="#discord-icon"></use>
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>
                <!--  footer content -->
                <!--  copyright section -->
                <div class="footer-copyright flex-space-between">
                    <span class="copyright-text">
                        +Seguro 2024 - Todos Direitos Reservados
                    </span>
                </div>
                <!--  copyright section -->
            </div>
        </footer>
        <!--Footer area-->
        </div>



        <!-- Add your site or application content here -->
        <script defer src="js/swiper-bundle.min.js"></script>
        <script defer src="js/main.js"></script>
        <script defer src="js/countdown.js"></script>
        <script defer src="js/waves.min.js"></script>
        <script async src="js/svg-loader.js"></script>
        <script defer src="js/nice-select2.js"></script>

        </body>

        </html>