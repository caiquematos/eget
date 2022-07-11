<!DOCTYPE html>
<html lang="en">

<!-- funcoes -->
@include('admin.build.funcoes')
<!-- /funcoes -->

<!-- head -->
@include('admin.build.head', ['title' => 'CDI - Cartão de Vantagens'])
<!-- /head -->

<!-- style -->
<style>
</style>
<!-- /style -->

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <!-- side menu -->
            @include('admin.build.side-menu')
            <!-- /side menu -->

            <!-- top navigation -->
            @include('admin.build.top-navigation', [])
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3></h3>
                        </div>

                        <div class="title_right">
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><a
                                            href="{{ route('admin.cartao.index', $cartao->usuario_id ?? $cartao->dependente->id_usuario) }}">Cartões</a>
                                    </h2>
                                    <h2><i class="fa fa-chevron-right mx-2"></i></h2>
                                    <h2>Atualizar Cartão</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form id="form_atualizar_cartao"
                                        action="{{ route('admin.cartao.update', $cartao->id) }}" method="post"
                                        novalidate>
                                        @csrf
                                        @method('PUT')
                                        <span class="section">Cartão N°{{ $cartao->id }}</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Status<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12  ">
                                                <select name="status" class="select2_single form-control"
                                                    tabindex="-1" required='required'>
                                                    @foreach (CARTAO_STATUS as $key => $status)
                                                        <option value={{ $key }}>{!! $status !!}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div id="input-code" class="field item form-group" style="display:none">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Código<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12  ">
                                                <input name="codigo" class="select2_single form-control" disabled
                                                    placeholder="Ex.: 1919" maxlength="4" size="4" tabindex="-1"
                                                    required='required'>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 offset-md-3">
                                                <button type='submit' class="btn btn-success">Atualizar</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    <a href="https://re9agencia.com.br/">Re9 Agência</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>


    <!-- scripts -->
    @include('admin.build.scripts', [])
    <!-- /scripts -->
    <script src="{{ url('admin/assets/js/chance.min.js') }}"></script>
    <script src="{{ url('admin/vendors/validator/multifield.js') }}"></script>
    <script src="{{ url('admin/vendors/validator/validator.js') }}"></script>
    {{-- <!-- Verifica se cliente foi atualizado -->
    @if (isset($dependente->atualizado))
        <script>
            console.log("has success");
            new PNotify({
                title: 'Sucesso',
                text: "Dependente atualizado com sucesso.",
                type: 'success',
                styling: 'bootstrap3'
            });
        </script>
    @endif --}}

    <!-- Javascript functions	-->
    <script>
        var cartao = @json($cartao);
    </script>

    <script>
        $(function() {
            $("select[name=status]").val(cartao.status).change();
            $("select[name=status]").change(handle_status_change);
        });

        function handle_status_change() {
            let trigger = "{{ config('constants.STATUS_CARTAO.ENTREGUE') }}";
            if ($(this).val() == parseInt(trigger)) {
                $("#input-code input").prop("disabled", false);
                $("#input-code").show();
            } else {
                $("#input-code input").prop("disabled", true);
                $("#input-code").hide();
            }
        }

        function date_pt_en(date) {
            var date_array = date.trim().split("/");
            return "".concat(date_array[2], "-").concat(date_array[1], "-").concat(date_array[0]);
        }
    </script>

</body>

</html>
