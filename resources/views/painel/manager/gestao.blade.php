@include('painel.layout.header')
<div class="container py-5">
    <div class="mb-5 text-center">
        <h2 class="fw-bold">Gestão de Incidentes</h2>
    </div>

    <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-4 col-lg-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <a href="05-product.html">
                            <img src="{{ url('assets/img/carro-de-policia.png') }}" alt="logo" class="img-fluid" style="width: 80px;">
                        </a>
                    </div>
                    <h5 class="card-title">Label Policia</h5>
                    <a href="{{ route('principal') }}" class="btn btn-dark w-100 mt-3">Botão de alguma</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 col-lg-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <a href="05-product.html">
                            <img src="{{ url('assets/img/sirene.png') }}" alt="logo" class="img-fluid" style="width: 80px;">
                        </a>
                    </div>
                    <h5 class="card-title">Label Policia</h5>
                    <a href="{{ route('emergencia') }}" class="btn btn-dark w-100 mt-3">Botão de alguma</a>
                </div>
            </div>
        </div>

        
        <!-- Card 2 -->
        <div class="col-md-4 col-lg-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <a href="05-product.html">
                            <img src="{{ url('assets/img/emergencia.png') }}" alt="logo" class="img-fluid" style="width: 80px;">
                        </a>
                    </div>
                    <h5 class="card-title">Label Policia</h5>
                    <a href="{{ route('emergencia') }}" class="btn btn-dark w-100 mt-3">Botão de alguma</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 col-lg-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <a href="05-product.html">
                            <img src="{{ url('assets/img/lei.png') }}" alt="logo" class="img-fluid" style="width: 80px;">
                        </a>
                    </div>
                    <h5 class="card-title">Label Policia</h5>
                    <button class="btn btn-dark w-100 mt-3">Botão de alguma</button>
                </div>
            </div>
        </div>

                <!-- Card 3 -->
                <div class="col-md-4 col-lg-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <a href="05-product.html">
                                    <img src="{{ url('assets/img/mapa.png') }}" alt="logo" class="img-fluid" style="width: 80px;">
                                </a>
                            </div>
                            <h5 class="card-title">Label Policia</h5>
                            <button class="btn btn-dark w-100 mt-3">Botão de alguma</button>
                        </div>
                    </div>
                </div>
        

        <!-- Card 4 -->
        <div class="col-md-4 col-lg-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <a href="05-product.html">
                            <img src="{{ url('assets/img/algemas.png') }}" alt="logo" class="img-fluid" style="width: 80px;">
                        </a>
                    </div>
                    <h5 class="card-title">Label Policia</h5>
                    <button class="btn btn-dark w-100 mt-3">Botão de alguma</button>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-4 col-lg-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <a href="05-product.html">
                            <img src="{{ url('assets/img/justica.png') }}" alt="logo" class="img-fluid" style="width: 80px;">
                        </a>
                    </div>
                    <h5 class="card-title">Label Policia</h5>
                    <button class="btn btn-dark w-100 mt-3">Botão de alguma</button>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-4 col-lg-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <a href="05-product.html">
                            <img src="{{ url('assets/img/prender-prisao.png') }}" alt="logo" class="img-fluid" style="width: 80px;">
                        </a>
                    </div>
                    <h5 class="card-title">Label Policia</h5>
                    <button class="btn btn-dark w-100 mt-3">Botão de alguma</button>
                </div>
            </div>
        </div>
    </div>
</div>

@include('painel.layout.footer')
