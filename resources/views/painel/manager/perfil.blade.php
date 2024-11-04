@extends('painel.layout.site')

@section('content')
<div class="main-content-area">
    <div class="page-title">
        <h2>
            Informações do Perfil
        </h2>
    </div>
    <div class="user-db-content-area">
        <form class="cryptoki-form" id="personal-info-form">
            <div class="user-db-title">Informações Pessoais</div>
            <div class="form-group">
                <div class="form-field">
                    <label for="name">Nome Completo</label>
                    <input type="text" id="name" value="Dexter Stark">
                </div>
                <div class="form-field">
                    <label for="email">Endereço de Email</label>
                    <input type="email" id="email" value="dexstark@fakemail.com">
                </div>
            </div>
            <div class="form-group">
                <div class="form-field">
                    <label for="username">Nome de Usuário</label>
                    <input type="text" id="username" value="dexterstark">
                </div>
                <div class="form-field">
                    <label for="phone">Contato Telefônico</label>
                    <input type="number" id="phone" value="">
                </div>
            </div>
            <div class="form-group">
                <div class="form-field">
                    <label for="password-1">Alterar Senha</label>
                    <input type="password" name="password" id="password-1">
                </div>
                <div class="form-field">
                    <label for="password-2">Repetir Senha</label>
                    <input type="password" name="password" id="password-2">
                </div>
            </div>
        </form>
    </div>

    <button class="btn btn-wide btn-dark">Salvar Alterações</button>
</div>

@endsection
