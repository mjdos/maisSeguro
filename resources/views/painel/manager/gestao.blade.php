@include('painel.layout.header')
<div class="container py-5">
    <div class="mb-5 text-center">
    <img src="{{ url('assets/img/logo.png') }}" height="100"><br>
        <h1 class="fw-bold">Mais Seguro</h1><br><h2 class="fw-bold">Plataforma de colaboração entre cidadãos e Polícia</h2>
    </div>

    <div class="row g-4  mt-10">
        <!-- Card 1 -->
        <div class="col-md-4 col-lg-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <a href="#">
                            <img src="{{ url('assets/img/carro-de-policia.png') }}" alt="logo" class="img-fluid" style="width: 80px;">
                        </a>
                    </div>
                    <h5 class="card-title">Informações</h5>
                    <a href="{{ route('principal') }}" class="btn btn-dark w-100 mt-3">Acessar</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 col-lg-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <a href="#">
                            <img src="{{ url('assets/img/mapa.png') }}" alt="logo" class="img-fluid" style="width: 80px;">
                        </a>
                    </div>
                    <h5 class="card-title">Mapa</h5>
                    <a href="{{ route('mapa') }}" class="btn btn-dark w-100 mt-3">Acessar</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 col-lg-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <a href="#">
                            <img src="{{ url('assets/img/sirene.png') }}" alt="logo" class="img-fluid" style="width: 80px;">
                        </a>
                    </div>
                    <h5 class="card-title">Pânico</h5>
                    <a href="{{ route('emergencia') }}" class="btn btn-dark w-100 mt-3">Acessar</a>
                </div>
            </div>
        </div>

        

        
        <!-- Card 2 -->
        <div class="col-md-4 col-lg-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <a href="#">
                            <img src="{{ url('assets/img/emergencia.png') }}" alt="logo" class="img-fluid" style="width: 80px;">
                        </a>
                    </div>
                    <h5 class="card-title">Alertas da Polícia</h5>
                    <a href="{{ route('alerta') }}" class="btn btn-dark w-100 mt-3">Acessar</a>
                </div>
            </div>
        </div>

         <!-- Card 2 -->
        <div class="col-md-4 col-lg-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <a href="#">
                            <img src="{{ url('assets/img/location.png') }}" alt="logo" class="img-fluid" style="width: 80px;">
                        </a>
                    </div>
                    <h5 class="card-title">Localizações Compartilhadas</h5>
                    <a href="{{ route('localizacao') }}" class="btn btn-dark w-100 mt-3">Acessar</a>
                </div>
            </div>
        </div>


    </div>
</div>