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
