<!DOCTYPE html>
<html lang="en">

<!-- funcoes -->
@include("admin.build.funcoes")
<!-- /funcoes -->

<!-- head -->
@include("admin.build.head", ['title'=>"CDI - Cartão de Vantagens"])
<!-- /head -->

<!-- style -->
<style>
    .btn-dependente {
        cursor: pointer;
        transition-duration: .2s;
    }

    .btn-dependente:hover {
        transform: scale(1.2);
        color:green;
    }

    .btn-dependente-minus:hover {
        color:red !important;
    }
</style>
<!-- /style -->

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            
            <!-- side menu -->
            @include("admin.build.side-menu")
            <!-- /side menu -->

            <!-- top navigation -->
            @include("admin.build.top-navigation", [])
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            {{-- <h3>Adicionar Cliente</h3> --}}
                        </div>

                        <div class="title_right">
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><a href="{{route('admin.cliente.index')}}">Clientes</a></h2><h2><i class="fa fa-chevron-right mx-2"></i></h2><h2>Atualizar Cliente</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form id="form_atualizar_cliente" action="{{route('admin.cliente.update', $cliente->id)}}" method="post" novalidate>
                                        @csrf
                                        @method('PUT')
                                        <span class="section">Informações Pessoais</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">CPF<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="13" value="{{ $cliente->cpf }}" data-mask="000.000.000-00" name="cpf" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nome completo<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" value="{{ $cliente->nome }}" data-validate-words="2" name="nome" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Data de nascimento<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='date' type="date" name="nascimento"  value="{{ date("Y-m-d", strtotime($cliente->nascimento)) }}" required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Sexo<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12  ">
												<select name="sexo" class="select2_single form-control" tabindex="-1" required='required'>
													<option></option>
													<option value=0>Feminino</option>
													<option value=1>Masculino</option>
													<option value=2>Outro</option>
												</select>
											</div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Estado civil<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12  ">
												<select name="estado_civil" class="select2_single form-control" tabindex="-1" required='required'>
													<option></option>
                                                    <option value=0>Casado</option>
													<option value=1>Solteiro</option>
													<option value=2>Divorciado</option>
													<option value=3>Viuvo</option>
													<option value=4>Outro</option>
												</select>
											</div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">E-mail<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="email"  value="{{ $cliente->email }}" class='email' required="required" type="email" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Celular<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="text" class='tel' name="celular" value="{{ $cliente->celular }}" data-mask="(00) 0 0000-0000" required='required'/></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Telefone<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="text" class='tel' name="telefone" value="{{ $cliente->telefone }}" data-mask="(00) 0000-0000" required='required' /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Local de retirada das carteirinhas<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12  ">
												<select name="local_retirada" class="select2_single form-control" tabindex="-1" required='required'>
													<option></option>
													<option value="AK">Alaska</option>
													<option value="HI">Hawaii</option>
													<option value="CA">California</option>
													<option value="NV">Nevada</option>
													<option value="OR">Oregon</option>
													<option value="WA">Washington</option>
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
												</select>
											</div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Como conheceu?<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12  ">
												<select name="como_conheceu" class="select2_single form-control" tabindex="-1" required='required'>
													<option></option>
                                                    <option value="Campanha de indicação">Campanha de indicação</option>
													<option value="Facebook">Facebook</option>
													<option value="Google">Google</option>
													<option value="Instagram">Instagram</option>
													<option value="Outdoor">Outdoor</option>
													<option value="Panfletagem">Panfletagem</option>
													<option value="Rádios">Rádios</option>
													<option value="Clínicas">Clínicas</option>
													<option value="Indicação">Indicação</option>
													<option value="Outros">Outros</option>
												</select>
											</div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Qual sua renda familiar?<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12  ">
												<select name="renda" class="select2_single form-control" tabindex="-1" required='required'>
													<option></option>
                                                    <option value=0>Até 01 (um) salário</option>
													<option value=1>Até 01 (um) salário</option>
													<option value=2>Até 02 (dois) salários</option>
													<option value=3>Até 03 (três) salários</option>
													<option value=4>Até 04 (quatro) salários</option>
													<option value=5>Até 05 (cinco) salários</option>
												</select>
											</div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Qual Sua Profissão?<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="text"  name="profissao" value="{{  $cliente->profissao }}" required='required' data-validate-length-range="8,22" /></div>
                                        </div>
                                        <span class="section">Endereço</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">CEP<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-tipo="cep" data-validate-length-range="9" data-mask="00000-000" name="cep" value="{{ $cliente->cep }}" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Logradouro<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-tipo="endereco" data-validate-length-range="3,50"  name="endereco" value="{{ $cliente->endereco }}" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Número<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="numero" value="{{ $cliente->numero }}" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Complemento<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="0,50"  name="complemento" value="{{ $cliente->complemento }}"  required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Bairro<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-tipo="bairro" name="bairro" value="{{ $cliente->bairro }}" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Estado<span class="required">*</span></label>
                                            <div class="col-md-3 col-sm-12 ">
                                                <input name="estado" data-tipo="estado" value="{{ $cliente->estado }}" placeholder="Ex.: BA, PE..." data-validate-length-range="0,2" class="select2_single form-control" tabindex="-1" />
											</div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Cidade<span class="required">*</span></label>
                                            <div class="col-md-3 col-sm-12 ">
                                                <input name="cidade" data-tipo="cidade" value="{{ $cliente->cidade }}" class="select2_single form-control" tabindex="-1"/>
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
                            <!-- Dependentes -->
                            <div class="page-title">
                            <div class="title_left">
                                <h3></h3>
                            </div>
                
                            <div class="title_right">
                                <a class="btn btn-primary pull-right text-white" href="{{route('admin.dependente.adicionar', $cliente->id)}}">Adicionar dependente</a>
                            </div>
                            </div>
                
                            <div class="clearfix"></div>
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Dependentes</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th data-priority="1">Nome</th>
                                                    <th data-priority="2">CPF</th>
                                                    <th>Data de Nascimento</th>
                                                    <th>Sexo</th>
                                                    <th>Parentesco</th>
                                                    <th data-priority="6">Ativo</th>
                                                    <th data-priority="5">Ações</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($cliente->dependentes as $dependente)
                                                        <tr>
                                                            <td>{{$dependente->nome}}</td>
                                                            <td>{!!"<span data-tipo='cpf'>$dependente->cpf</span>"!!}</td>
                                                            <td>{{$dependente->nascimento}}</td>
                                                            <td>{{GERAL_SEXO[$dependente->sexo]}}</td>
                                                            <td>{{DEPENDENTE_PARENTESCO[$dependente->parentesco] ?? "-"}}</td>
                                                            <td>
                                                                <input type="checkbox" data-dependente-id={{$dependente->id}} onchange="toggleAtivacao(this)" class="js-switch" {{$dependente->ativo ? "checked" : ""}} />
                                                            </td>
                                                            <td>
                                                                <a href="{{route('admin.dependente.show', [$dependente->id])}}"><i class="fa fa-eye mx-1"></i></a>
                                                                <a href="{{route('admin.dependente.deletar', [$dependente->id])}}"><i class="fa fa-trash mx-1"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
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
    @include("admin.build.scripts", [])
    @include("admin.build.datatables")
    <!-- /scripts -->
    <script src="{{url('admin/assets/js/chance.min.js')}}"></script>
    <script src="{{url('admin/vendors/validator/multifield.js')}}"></script>
    <script src="{{url('admin/vendors/validator/validator.js')}}"></script>

    <!-- Verifica se cliente foi atualizado -->
    @if (isset($cliente->atualizado))
        <script>
            console.log("has success");
            new PNotify({
                title: 'Sucesso',
                text: "Cliente atualizado com sucesso.",
                type: 'success',
                styling: 'bootstrap3'
            });
        </script>
    @endif
    
    <!-- Javascript functions	-->
    <script>
        var cliente = @json($cliente,JSON_PRETTY_PRINT);
        console.log("cliente", cliente);
    </script>

    <script>
        $(function() {
            $("input[name=nascimento]").val(date_pt_en(cliente.nascimento)).change();
            $("select[name=sexo]").val(cliente.sexo).change();
            $("select[name=estado_civil]").val(cliente.estado_civil).change();
            $("select[name=local_retirada]").val(cliente.local_retirada).change();
            $("select[name=como_conheceu]").val(cliente.como_conheceu).change();
            $("select[name=renda]").val(cliente.renda).change();
            $("select[name=estado]").val(cliente.estado).change();
            $("select[name=cidade]").val(cliente.cidade).change();
        });

        function toggleAtivacao(e) {
            var dependente_id = $(e).data("dependente-id");
            var status = $(e).is(":checked");
            var url = `{{route('admin.dependente.ativar')}}`;
            $.ajax({
                url: url,
                type: "POST",
                data: {'status':status, "_token": "{{ csrf_token() }}","dependente_id":dependente_id},
                dataType: "json",
                success: function (data) {
                    if (data.dependente) {
                        if(data.dependente.ativo) {
                            mensagem = "Dependente ativado com sucesso."
                        }
                        else {
                            mensagem = "Dependente desativado com sucesso."
                        }

                        new PNotify({
                            title: 'Sucesso',
                            text: mensagem,
                            type: 'success',
                            styling: 'bootstrap3'
                        });
                    }
                },
                error: function (xhr, status) {
                    new PNotify({
                        title: 'Opa!',
                        text: "Não foi possível atualizar o status do dependente.",
                        type: 'error',
                        styling: 'bootstrap3'
                    });
                    console.log("ativação falhou.");
                }
            });
        }
    </script>

    {{-- <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change'],
        }, document.forms[0]);

        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log("validatorResult", validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);

    </script> --}}


</body>

</html>
