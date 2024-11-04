@extends('painel.layout.site')

@section('content')
<div class="page-title">
    <h2>Alertas de Crimes</h2>
</div>
<div class="notifications-list">
    <div class="command-line">
        <button class="command select-all">Selecionar Todos</button>
        <button class="command">Marcar como Lido</button>
        <button class="command delete">Excluir</button>
    </div>
    <div class="notifications-list-wrapper">
        <!-- Notificação 1 -->
        <div class="notification">
            <div class="notification-body">
                <div class="thumb-box">
                    <a href="detalhes-crime.html">
                        <img    src="{{ url('assets/img/assalto.png') }}"alt="Imagem do crime">
                    </a>
                    <span class="crime-type">
                        <svg class="crumina-icon">
                            <use xlink:href="#annotation-icon"></use>
                        </svg>
                    </span>
                </div>
                <div class="notification-info">
                    <div class="message">
                        <a href="perfil-usuario.html" class="bold">@CarlosS</a> comentou sobre 
                        <a href="detalhes-crime.html" class="bold">Roubo a mão armada no centro</a>
                    </div>
                    <div class="publish-date">2 minutos atrás</div>
                </div>
            </div>
            <div class="action-buttons">
                <button class="close">
                    <svg class="crumina-icon">
                        <use xlink:href="#close-circle-icon"></use>
                    </svg>
                </button>
                <form class="cryptoki-form checkbox">
                    <input type="checkbox" name="notif-select" id="1" class="cryptoki-checkbox">
                    <label for="1"></label>
                </form>
            </div>
        </div>

        <!-- Notificação 2 -->
        <div class="notification">
            <div class="notification-body">
                <div class="thumb-box">
                    <a href="detalhes-crime.html">
                        <img src="{{ url('assets/img/vandalismo.png') }}"  alt="Imagem do crime">
                    </a>
                    <span class="purchase-type">
                        <svg class="crumina-icon">
                            <use xlink:href="#wallet-icon"></use>
                        </svg>
                    </span>
                </div>
                <div class="notification-info">
                    <div class="message">
                        <a href="perfil-usuario.html" class="bold">@MarianaP</a> registrou um 
                        <a href="detalhes-crime.html" class="bold">caso de vandalismo em propriedade pública</a>
                    </div>
                    <div class="publish-date">10 minutos atrás</div>
                </div>
            </div>
            <div class="action-buttons">
                <button class="close">
                    <svg class="crumina-icon">
                        <use xlink:href="#close-circle-icon"></use>
                    </svg>
                </button>
                <form class="cryptoki-form checkbox">
                    <input type="checkbox" name="notif-select" id="2" class="cryptoki-checkbox">
                    <label for="2"></label>
                </form>
            </div>
        </div>

        <!-- Notificação 3 -->
        <div class="notification">
            <div class="notification-body">
                <div class="thumb-box">
                    <a href="detalhes-crime.html">
                        <img src="{{ url('assets/img/droga.png') }}" alt="Imagem do crime">
                    </a>
                    <span class="like-type">
                        <svg class="crumina-icon">
                            <use xlink:href="#heart-icon"></use>
                        </svg>
                    </span>
                </div>
                <div class="notification-info">
                    <div class="message">
                        <a href="perfil-usuario.html" class="bold">@NoirC</a> relatou um 
                        <a href="detalhes-crime.html" class="bold">caso de tráfico de drogas na região portuária</a>
                    </div>
                    <div class="publish-date">37 minutos atrás</div>
                </div>
            </div>
            <div class="action-buttons">
                <button class="close">
                    <svg class="crumina-icon">
                        <use xlink:href="#close-circle-icon"></use>
                    </svg>
                </button>
                <form class="cryptoki-form checkbox">
                    <input type="checkbox" name="notif-select" id="3" class="cryptoki-checkbox">
                    <label for="3"></label>
                </form>
            </div>
        </div>

        <!-- Notificação 4 -->
        <div class="notification">
            <div class="notification-body">
                <div class="thumb-box">
                    <a href="detalhes-crime.html">
                        <img src="{{ url('assets/img/capturar.png') }}"  alt="Imagem do crime">
                    </a>
                    <span class="review-type">
                        <svg class="crumina-icon">
                            <use xlink:href="#star-icon"></use>
                        </svg>
                    </span>
                </div>
                <div class="notification-info">
                    <div class="message">
                        <a href="perfil-usuario.html" class="bold">@PauloG</a> avaliou um 
                        <a href="detalhes-crime.html" class="bold">caso de invasão de propriedade</a>
                    </div>
                    <div class="publish-date">49 minutos atrás</div>
                </div>
            </div>
            <div class="action-buttons">
                <button class="close">
                    <svg class="crumina-icon">
                        <use xlink:href="#close-circle-icon"></use>
                    </svg>
                </button>
                <form class="cryptoki-form checkbox">
                    <input type="checkbox" name="notif-select" id="4" class="cryptoki-checkbox">
                    <label for="4"></label>
                </form>
            </div>
        </div>

        <!-- Notificação 5 -->
        <div class="notification">
            <div class="notification-body">
                <div class="thumb-box">
                    <a href="detalhes-crime.html">
                        <img src="{{ url('assets/img/furto.png') }}" alt="Imagem do crime">
                    </a>
                    <span class="comment-type">
                        <svg class="crumina-icon">
                            <use xlink:href="#annotation-dots-icon"></use>
                        </svg>
                    </span>
                </div>
                <div class="notification-info">
                    <div class="message">
                        <a href="perfil-usuario.html" class="bold">@LuizaA</a> comentou sobre um 
                        <a href="detalhes-crime.html" class="bold">furto de veículo no bairro central</a>
                    </div>
                    <div class="publish-date">51 minutos atrás</div>
                </div>
            </div>
            <div class="action-buttons">
                <button class="close">
                    <svg class="crumina-icon">
                        <use xlink:href="#close-circle-icon"></use>
                    </svg>
                </button>
                <form class="cryptoki-form checkbox">
                    <input type="checkbox" name="notif-select" id="5" class="cryptoki-checkbox">
                    <label for="5"></label>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- <div class="load-more_bars">
    <div class="load-more_bar"></div>
    <div class="load-more_bar"></div>
    <div class="load-more_bar"></div>
    <div class="load-more_bar"></div>
    <div class="load-more_bar"></div>
    <div class="load-more_bar"></div>
    <div class="load-more_bar"></div>
    <div class="load-more_bar"></div>
</div> --}}
@endsection
