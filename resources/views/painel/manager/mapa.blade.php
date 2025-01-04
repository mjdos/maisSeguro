@include('painel.layout.header')

<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Alertas</h1>
            </div>
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
                                <th class="min-w-200px">Alerta</th>
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
                                            <span class="fw-bold text-dark" data-kt-ecommerce-product-filter="product_name">Alerta de Pânico</span>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <!--end::Category=-->
                                <!--begin::SKU=-->
                                <td class="text-center">
                                    <span class="fw-bold text-dark">01/04/2025</span>
                                </td>
                                <!--end::SKU=-->
                                <!--begin::Qty=-->
                                <td class="text-center" data-order="48">
                                    <span class="fw-bold text-dark">Quadra 99 Conjunto Z Local inventado</span>
                                </td>
                                <!--end::Qty=-->

                                <!--begin::Action=-->
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-light" data-kt-menu-placement="bottom-end">Visualizar</a>
                                </td>
                                <!--end::Action=-->
                            </tr>

                            <tr>
                                <!--begin::Category=-->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <span class="fw-bold text-dark" data-kt-ecommerce-product-filter="product_name">Alerta de Pânico</span>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <!--end::Category=-->
                                <!--begin::SKU=-->
                                <td class="text-center">
                                    <span class="fw-bold text-dark">10/01/2025</span>
                                </td>
                                <!--end::SKU=-->
                                <!--begin::Qty=-->
                                <td class="text-center" data-order="48">
                                    <span class="fw-bold text-dark">Situação de emergência.</span>
                                </td>
                                <!--end::Qty=-->

                                <!--begin::Action=-->
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-light" data-kt-menu-placement="bottom-end">Visualizar</a>
                                </td>
                                <!--end::Action=-->
                            </tr>

                            <tr>
                                <!--begin::Category=-->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <span class="fw-bold text-dark" data-kt-ecommerce-product-filter="product_name">Alerta de Pânico</span>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <!--end::Category=-->
                                <!--begin::SKU=-->
                                <td class="text-center">
                                    <span class="fw-bold text-dark">12/12/2024</span>
                                </td>
                                <!--end::SKU=-->
                                <!--begin::Qty=-->
                                <td class="text-center" data-order="48">
                                    <span class="fw-bold text-dark">Quadra 99 Conjunto Z Local inventado</span>
                                </td>
                                <!--end::Qty=-->

                                <!--begin::Action=-->
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-light" data-kt-menu-placement="bottom-end">Visualizar</a>
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
