@extends('painel.layout.site')

@section('content')
<div class="container section-padding">
    <div class="section-title-wrapper">
        <div class="section-title"> Gestão registros</div>
    </div>
    <div class="dashboard-wrapper">
        <!--   user stats -->
        <div class="user-stats-section">
            <div class="stat-item blue-gradient-diagonal">
                <div class="stat-icon"><svg class="crumina-icon">
                        <use xlink:href="#face-id-icon"></use>
                    </svg></div>
                <div class="stat-info">
                    <div class="stat-number">436</div>
                    <div class="stat-description">Incidentes</div>
                </div>
            </div>
            <div class="stat-item fuchsia-gradient-diagonal">
                <div class="stat-icon"><svg class="crumina-icon">
                        <use xlink:href="#heart-icon"></use>
                    </svg></div>
                <div class="stat-info">
                    <div class="stat-number">107</div>
                    <div class="stat-description">Atendimentos</div>
                </div>
            </div>
            <div class="stat-item yellow-gradient-diagonal">
                <div class="stat-icon"><svg class="crumina-icon">
                        <use xlink:href="#dollar-icon"></use>
                    </svg></div>
                <div class="stat-info">
                    <div class="stat-number">0.94</div>
                    <div class="stat-description">Tempo de Resposta</div>
                </div>
            </div>
        </div>
    <div class="user-db-content-area">

        <table class="content-table">
            <thead>
                <tr>
                    <th scope="col" class="heading-label">Incidente Detalhe</th>
                    <th scope="col" class="heading-label">Data/Hora</th>
                    <th scope="col" class="heading-label">Localização</th>
                    <th scope="col" class="heading-label">Usuário</th>
                    <th scope="col" class="heading-label">Prioridade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Incidente Detalhe">
                        <div class="incident-info">
                            <div class="incident-number">01</div>
                            <div class="incident-details">
                                <div class="incident-name">Roubo a mão armada</div>
                                <div class="incident-category">Assalto</div>
                            </div>
                        </div>
                    </td>
                    <td data-label="Data/Hora" class="stats-item">2023-11-01 22:30</td>
                    <td data-label="Localização" class="stats-item">Avenida Paulista, São Paulo</td>
                    <td data-label="Usuário" class="stats-item">Carlos Silva</td>
                    <td data-label="Prioridade" class="stats-item">Alta</td>
                </tr>
                <tr>
                    <td data-label="Incidente Detalhe">
                        <div class="incident-info">
                            <div class="incident-number">02</div>
                            <div class="incident-details">
                                <div class="incident-name">Vandalismo em Propriedade</div>
                                <div class="incident-category">Vandalismo</div>
                            </div>
                        </div>
                    </td>
                    <td data-label="Data/Hora" class="stats-item">2023-10-25 01:15</td>
                    <td data-label="Localização" class="stats-item">Praça da Sé, São Paulo</td>
                    <td data-label="Usuário" class="stats-item">Mariana Lopes</td>
                    <td data-label="Prioridade" class="stats-item">Média</td>
                </tr>
                <tr>
                    <td data-label="Incidente Detalhe">
                        <div class="incident-info">
                            <div class="incident-number">03</div>
                            <div class="incident-details">
                                <div class="incident-name">Tráfico de Drogas</div>
                                <div class="incident-category">Crime Organizado</div>
                            </div>
                        </div>
                    </td>
                    <td data-label="Data/Hora" class="stats-item">2023-10-30 20:00</td>
                    <td data-label="Localização" class="stats-item">Rua dos Trilhos, Santos</td>
                    <td data-label="Usuário" class="stats-item">Pedro Oliveira</td>
                    <td data-label="Prioridade" class="stats-item">Crítica</td>
                </tr>
                <tr>
                    <td data-label="Incidente Detalhe">
                        <div class="incident-info">
                            <div class="incident-number">04</div>
                            <div class="incident-details">
                                <div class="incident-name">Invasão de Propriedade</div>
                                <div class="incident-category">Invasão</div>
                            </div>
                        </div>
                    </td>
                    <td data-label="Data/Hora" class="stats-item">2023-10-29 18:45</td>
                    <td data-label="Localização" class="stats-item">Centro, Rio de Janeiro</td>
                    <td data-label="Usuário" class="stats-item">Ana Martins</td>
                    <td data-label="Prioridade" class="stats-item">Baixa</td>
                </tr>
                <tr>
                    <td data-label="Incidente Detalhe">
                        <div class="incident-info">
                            <div class="incident-number">05</div>
                            <div class="incident-details">
                                <div class="incident-name">Furto de Veículo</div>
                                <div class="incident-category">Furto</div>
                            </div>
                        </div>
                    </td>
                    <td data-label="Data/Hora" class="stats-item">2023-11-02 07:30</td>
                    <td data-label="Localização" class="stats-item">Av. Brasil, Belo Horizonte</td>
                    <td data-label="Usuário" class="stats-item">João Almeida</td>
                    <td data-label="Prioridade" class="stats-item">Alta</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
