@include('painel.layout.header')
<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="g-5 gx-xxl-8">

            <div class="card mb-5 mb-xl-8">

                <div class="card-header border-0 pt-5">
                    <span class="card-label fw-bolder fs-3 mb-1">Criar Novo Título</span>
                    <div class="p-3">
                        <td class="text-end">
                            <a href="#"  class="btn btn-sm btn-primary">
                                Voltar
                            </a>
                        </td>
                    </div>
                </div>

                <div class="card-body py-3">
                    <form action="#" method="post">
                        @csrf
                        <div class="form-row p-3">
                            <div class="row pb-3">
                                <div class="col-sm">
                                    <span class="text-dark fs-4">Id Externo do Título</span>
                                    <input class="form-control form-control-solid" type="text" name="idExterno" >
                                </div>
                                <div class="col-sm">
                                    <span class="text-dark fs-4">Nome</span>
                                    <input class="form-control form-control-solid" type="text" name="nome" >
                                </div>
                                <div class="col-sm">
                                    <span class="text-dark fs-4">Sigla</span>
                                    <input class="form-control form-control-solid" type="text" name="sigla" >
                                </div>
                                
                                
                            </div>
                            <div class="row pt-3 pb-3">
                                <div class="col-sm">
                                    <span class="text-dark fs-4">Data de Vencimento</span>
                                    <input class="form-control form-control-solid" type="date" name="dataVencimento">
                                </div>
                                <div class="col-sm">
                                    <span class="text-dark fs-4">Rentabilidade Anual</span>
                                    <input class="form-control form-control-solid" type="text" name="rentabilidadeAnual">
                                </div>
                                <div class="col-sm">
                                    <span class="text-dark fs-4">Valor Nominal</span>
                                    <input class="form-control form-control-solid" type="text" name="valorNominal">
                                </div>
                                
                            </div>
                            <div class="row pt-3">
                                <div class="col-sm">
                                    <span class="text-dark fs-4">Alíquota IR</span>
                                    <input class="form-control form-control-solid" type="text" name="aliquotaIR">
                                </div>
                                <div class="col-sm">
                                    <span class="text-dark fs-4">Taxa B3</span>
                                    <input class="form-control form-control-solid" type="text" name="taxa_b3">
                                </div>
                                <div class="col-sm">
                                    <span class="text-dark fs-4">Isenção IOF</span>
                                    <input class="form-control form-control-solid" type="text" name="isencaoIof">
                                </div>
                            </div>

                        </div>
                        <div>
                            <div class="d-flex justify-content-end p-2">
                                <button type="submit" class="btn btn-light-primary ">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>


            </div>
    </div>
</div>

@include('painel.layout.footer')
