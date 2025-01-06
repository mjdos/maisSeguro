@include('painel.layout.header')

<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Alertas da Polícia</h1>
            </div>
            <a href="#" class="btn btn-sm btn-dark" data-kt-menu-placement="bottom-end">+ Novo Alerta</a>
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Products-->
            <div class="card card-flush">
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-200px">Alertas da Polícia</th>
                                <th class="text-center min-w-100px">Data</th>
                                <th class="text-center min-w-100px">Descrição</th>
                                <th class="text-center min-w-70px">Ações</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-semibold text-gray-600">
         
                            <tr>
                                <!--begin::Category=-->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <span class="fw-bold text-dark" data-kt-ecommerce-product-filter="product_name">ALERTA DE FURTOS EM ÁREAS COMERCIAIS</span>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <!--end::Category=-->
                                <!--begin::SKU=-->
                                <td class="text-center">
                                    <span class="fw-bold text-dark">03/01/2025</span>
                                </td>
                                <!--end::SKU=-->
                                <!--begin::Qty=-->
                                <td class="text-center" data-order="48">
                                    <span class="fw-bold text-dark">A polícia alerta sobre aumento de furtos em áreas comerciais movimentadas. Evite exibir objetos de valor, fique atento aos seus pertences e denuncie comportamentos suspeitos pelo 190.</span>
                                </td>
                                <!--end::Qty=-->

                                <!--begin::Action=-->
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-primary" data-kt-menu-placement="bottom-end">Editar</a>
                                </td>
                                <!--end::Action=-->
                            </tr>

                            <tr>
                                <!--begin::Category=-->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <span class="fw-bold text-dark" data-kt-ecommerce-product-filter="product_name">ALERTA DE GOLPES VIRTUAIS</span>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <!--end::Category=-->
                                <!--begin::SKU=-->
                                <td class="text-center">
                                    <span class="fw-bold text-dark">02/01/2025</span>
                                </td>
                                <!--end::SKU=-->
                                <!--begin::Qty=-->
                                <td class="text-center" data-order="48">
                                    <span class="fw-bold text-dark">Atenção: criminosos estão aplicando golpes via mensagens falsas de bancos. Não clique em links desconhecidos, não compartilhe dados pessoais e confirme informações com sua instituição financeira.</span>
                                </td>
                                <!--end::Qty=-->

                                <!--begin::Action=-->
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-primary" data-kt-menu-placement="bottom-end">Editar</a>
                                </td>
                                <!--end::Action=-->
                            </tr>

                            <tr>
                                <!--begin::Category=-->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <span class="fw-bold text-dark" data-kt-ecommerce-product-filter="product_name">ALERTA DE SEGURANÇA NO TRÂNSITO</span>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <!--end::Category=-->
                                <!--begin::SKU=-->
                                <td class="text-center">
                                    <span class="fw-bold text-dark">02/01/2025</span>
                                </td>
                                <!--end::SKU=-->
                                <!--begin::Qty=-->
                                <td class="text-center" data-order="48">
                                    <span class="fw-bold text-dark">Respeite os limites de velocidade e evite o uso de celular enquanto dirige. Operações de fiscalização estarão reforçadas para reduzir acidentes e salvar vidas. Dirija com responsabilidade.</span>
                                </td>
                                <!--end::Qty=-->

                                <!--begin::Action=-->
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-primary" data-kt-menu-placement="bottom-end">Editar</a>
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Category=-->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <span class="fw-bold text-dark" data-kt-ecommerce-product-filter="product_name">ALERTA DE FRAUDE EM PIX</span>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <!--end::Category=-->
                                <!--begin::SKU=-->
                                <td class="text-center">
                                    <span class="fw-bold text-dark">02/01/2025</span>
                                </td>
                                <!--end::SKU=-->
                                <!--begin::Qty=-->
                                <td class="text-center" data-order="48">
                                    <span class="fw-bold text-dark">Fique atento a pedidos urgentes de transferências via Pix, mesmo de conhecidos. Confirme a identidade do solicitante por outra via. Proteja seus dados e evite cair em golpes.</span>
                                </td>
                                <!--end::Qty=-->

                                <!--begin::Action=-->
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-primary" data-kt-menu-placement="bottom-end">Editar</a>
                                </td>
                                <!--end::Action=-->
                            </tr>

                            <!--begin::Table row-->
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Products-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->

@include('painel.layout.footer')
