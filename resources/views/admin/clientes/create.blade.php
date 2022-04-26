<!DOCTYPE html>
<html lang="en">


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
                                    <h2>Adicionar Cliente</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form id="form_add_cliente" action="{{url('admin/cliente')}}" method="post" novalidate>
                                        @csrf
                                        <span class="section">Informações Pessoais</span>
                                        {{-- <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Em qual região você está?<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12 ">
												<select name="regiao" class="select2_single form-control" tabindex="-1" required='required'>
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
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Tipo de Assinatura<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12  ">
												<select name="assinatura" class="select2_single form-control" tabindex="-1" required='required'>
													<option></option>
													<option value=0>Cartão CDI</option>
													<option value=1>CDI+</option>
												</select>
											</div>
                                        </div> --}}
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">CPF<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="13" value="{{ old('cpf') }}" data-mask="000.000.000-00" name="cpf" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nome completo<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" value="{{ old('nome') }}" data-validate-words="2" name="nome" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Data de nascimento<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='date' type="date" name="nascimento"  value="{{ old('nascimento') }}" required='required'></div>
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
                                                <input class="form-control" name="email"  value="{{ old('email') }}" class='email' required="required" type="email" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Celular<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="text" class='tel' name="celular" value="{{ old('celular') }}" data-mask="(00) 0 0000-0000" required='required'/></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Telefone<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="text" class='tel' name="telefone" value="{{ old('telefone') }}" data-mask="(00) 0000-0000" required='required' /></div>
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
                                                <input class="form-control" type="text"  name="profissao" value="{{ old('profissao') }}" required='required' data-validate-length-range="2,22" /></div>
                                        </div>
                                        {{-- <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Possui animal de estimação?<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12  "> 
												<select name="animal" class="select2_single form-control" tabindex="-1" required='required'>
													<option></option>
                                                    <option value=0>Não</option>
													<option value=1>Cachorro</option>
													<option value=2>Gato</option>
													<option value=3>Ave</option>
													<option value=4>Outro</option>
												</select>
											</div>
                                        </div> --}}
                                        <div class="field item form-group">
											<label class="col-form-label col-md-3 col-sm-3  label-align">Senha<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6">
												<input class="form-control" autocomplete="new-password" type="password" data-validate-length-range="6,8"  id="senha" name="senha" title="Mínimo de 6 caracteres" required />
												
												<span style="position: absolute;right:15px;top:7px;" onclick="hideshow()" >
													<i id="slash" class="fa fa-eye-slash"></i>
													<i id="eye" class="fa fa-eye"></i>
												</span>
											</div>
										</div>
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Confirmar senha<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" autocomplete="new-password" data-validate-length-range="6,8" type="password" name="senha_confirmation" data-validate-linked='senha' required='required' /></div>
                                        </div>
                                        <span class="section">Endereço</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">CEP<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="9" data-tipo="cep" data-mask="00000-000" name="cep" value="{{ old('cep') }}" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Logradouro<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-tipo="endereco" data-validate-length-range="3,50"  name="endereco" value="{{ old('endereco') }}" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Número<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="numero" value="{{ old('numero') }}" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Complemento<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="0,50" name="complemento" value="{{ old('complemento') }}"  required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Bairro<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-tipo="bairro" name="bairro" value="{{ old('bairro') }}" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Estado<span class="required">*</span></label>
                                            <div class="col-md-3 col-sm-12 ">
                                                <input name="estado" data-tipo="estado" data-validate-length-range="0,2" value="{{ old('estado') }}" placeholder="Ex.: BA, PE..." class="select2_single form-control" tabindex="-1" />
											</div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Cidade<span class="required">*</span></label>
                                            <div class="col-md-3 col-sm-12 ">
                                                <input name="cidade" data-tipo="cidade" value="{{ old('cidade') }}" class="select2_single form-control" tabindex="-1"/>
											</div>
                                        </div>
                                        <span class="section">Dependentes</span>
                                        <div id="dependentes">
                                            <div class="dependente mb-4">
                                                <div class="field item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Dependente 1<span class="required"></span></label>
                                                    <div class="col-md-6 col-sm-6 d-flex align-items-center">
                                                        <span class="btn-dependente glyphicon glyphicon-plus mr-2" onclick="addDependente(this)" aria-hidden="true"></span>
                                                        <span class="btn-dependente btn-dependente-minus glyphicon glyphicon-minus" onclick="remDependente(this)" aria-hidden="true"></span>
                                                    </div>
                                                </div>
                                                <div class="field item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3  label-align">CPF<span class="required">*</span></label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input class="form-control" data-validate-length-range="13" data-mask="000.000.000-00"  name="dependentes[cpf][]" required="required" />
                                                    </div>
                                                </div>
                                                <div class="field item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nome<span class="required">*</span></label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input class="form-control" data-validate-length-range="2,100"  name="dependentes[nome][]" required="required" />
                                                    </div>
                                                </div>
                                                <div class="field item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Sexo<span class="required">*</span></label>
                                                    <div class="col-md-6 col-sm-12 ">
                                                        <select name="dependentes[sexo][]" class="select2_single form-control" tabindex="-1" required='required'>
                                                            <option></option>
                                                            <option value=0>Feminino</option>
                                                            <option value=1>Masculino</option>
                                                            <option value=2>Outro</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="field item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Parentesco<span class="required">*</span></label>
                                                    <div class="col-md-6 col-sm-12 ">
                                                        <select name="dependentes[parentesco][]" class="select2_single form-control" tabindex="-1" required='required'>
                                                            <option></option>
                                                            <option value=0>Conjuge</option>
                                                            <option value=1>Filhos abaixo de 21 anos</option>
                                                            <option value=2>Pais acima de 60 anos</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="field item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Data de nascimento<span class="required">*</span></label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input class="form-control" class='date' type="date" name="dependentes[nascimento][]" required='required'></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 offset-md-3">
                                                <button type='submit' class="btn btn-primary">Cadastrar</button>
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
    @include("admin.build.scripts", [])
    <!-- /scripts -->
    <script src="{{url('admin/assets/js/chance.min.js')}}"></script>
    <script src="{{url('admin/vendors/validator/multifield.js')}}"></script>
    <script src="{{url('admin/vendors/validator/validator.js')}}"></script>

    <!-- Session functions --> 
    
    <!-- Verifica se há erros na sessão -->
    @if ($errors->any())
        @php
            $sessao_erros = "";
            foreach ($errors->all() as $error):
                $sessao_erros.= $error . "<br>";
            endforeach;
        @endphp
        <script>
            new PNotify({
                title: 'Opa!',
                text: "{{$sessao_erros}}",
                type: 'error',
                styling: 'bootstrap3'
            });
        </script>
    @endif

    <!-- Verifica se há mensagem de sucesso na sessão -->
    @if (session('success'))
        <script>
            new PNotify({
                title: 'Sucesso',
                text: 'Cliente adicionado com sucesso.',
                type: 'success',
                styling: 'bootstrap3'
            });
        </script>
    @endif
    
    <!-- Javascript functions	-->
    <script>
        var dependente_counter = 2;
        function addDependente() {
            $("#dependentes").append(
                `
                <div class="dependente mb-4">
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Dependente ${dependente_counter}<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 d-flex align-items-center">
                            <span class="btn-dependente glyphicon glyphicon-plus mr-2" onclick="addDependente(this)" aria-hidden="true"></span>
                            <span class="btn-dependente btn-dependente-minus glyphicon glyphicon-minus" onclick="remDependente(this)" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">CPF<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" data-validate-length-range="13"  data-mask="000.000.000-00"  name="dependentes[cpf][]" required="required" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nome<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" data-validate-length-range="6"  name="dependentes[nome][]" required="required" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Sexo<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-12 ">
                            <select name="dependentes[sexo][]" class="select2_single form-control" tabindex="-1" required='required'>
                                <option></option>
                                <option value=0>Feminino</option>
                                <option value=1>Masculino</option>
                                <option value=2>Outro</option>
                            </select>
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Parentesco<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-12 ">
                            <select name="dependentes[parentesco][]" class="select2_single form-control" tabindex="-1" required='required'>
                                <option></option>
                                <option value="AK">Conjuge</option>
                                <option value="HI">Filhos abaixo de 21 anos</option>
                                <option value="CA">Pais acima de 60 anos</option>
                            </select>
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Data de nascimento<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='date' type="date" name="dependentes[nascimento][]" required='required'></div>
                    </div>
                </div>
                `
            );
            $(`input[name="dependentes[cpf][]"]`).mask("000.000.000-00");
            dependente_counter++;
        }
        function remDependente(e) {
            let dependente_item = $(e).closest('.dependente');
            dependente_item.fadeOut().next().delay(500).remove();
        }
    </script>

    <script>
        $(function() {
            // $('#form_add_cliente').bind('ajax:complete', function(resposta) {
            //     console.log("resposta", resposta);
            // });

            document.forms['form_add_cliente'].addEventListener('submit', (event) => {
                event.preventDefault();
                console.log("entrou em form");
                // TODO do something here to show user that form is being submitted
                fetch(event.target.action, {
                    method: 'POST',
                    body: new URLSearchParams(new FormData(event.target)) // event.target is the form
                }).then((resp) => {
                    console.log("resposta form_add_cliente", resp.json())
                    //return resp.json(); // or resp.text() or whatever the server sends
                }).then((body) => {
                    // TODO handle body
                    console.log("body", body);
                }).catch((error) => {
                    // TODO handle error
                    console.log("error", error);
                });
            });
        });
    </script>

	<script>
		function hideshow(){
			var password = document.getElementById("password1");
			var slash = document.getElementById("slash");
			var eye = document.getElementById("eye");
			
			if(password.type === 'password'){
				password.type = "text";
				slash.style.display = "block";
				eye.style.display = "none";
			}
			else{
				password.type = "password";
				slash.style.display = "none";
				eye.style.display = "block";
			}

		}
	</script>

    <script>
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

    </script>


</body>

</html>