<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet"/>
        <!--<link href="css/configuracoes4.css" rel="stylesheet" />   retirei por confiurar a nav-brand---> 
        <link href="../../assets/css/Configurações.css" rel="stylesheet"/>

        <script src="../../assets/js/jquery.min.js"></script> 
        <script src="../../assets/js/bootstrap.min.js"></script> 
          <script src="../../assets/js/views/cadastrarEmpresa.js"></script> 

    </head>
    <body>
        <form  method="post" action="http://localhost:9090/gaming/index.php/configuracoes/createEmpresa" >       

            <!--cabeçãlho-->
            <div class="col-md-12 header-style">
                <nav class="navbar navbar-default nab-branco">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class=" col-md4 pull-left">
                            <a class="navbar-brand" href="#"><strong>Game APP |</strong>Company Console</a>
                        </div>

                        <div class= 'col-md-2 pull-right'>
                            <a class= "navbar-brand" href ="#"><small><small>Nome da Empresa</small></small><br/><small><small>Nome do Administrador</small></small></a>
                        </div>

                        <div class= 'col-md-5 pull-right'>
                            <a class= "navbar-brand" href ="#"><strong>Configurações</strong></a>
                        </div>
                    </div>
                </nav>
            </div>
            <!--Fim cabeçãlho-->

            <!--Menu-->
            <div class="col-md-2 pull-left div-vermelha menu-style ">

                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation"><a href="#">Inicial</a></li>
                    <li role="presentation" ><a href="#">Objetos</a></li>
                    <li role="presentation"><a href="#">Ações</a></li>
                    <li role="presentation"><a href="#">Reconhecimento</a></li>
                    <li role="presentation"><a href="#">Missões</a></li>
                    <li role="presentation"><a href="#">Programas</a></li>
                    <li role="presentation"><a href="#">Desafios</a></li>
                    <li class="divider-style"></li>
                    <li role="presentation"><a href="#">MOD/Packs</a></li>
                    <li class="divider-style"></li>
                    <li role="presentation"><a href="#">Cadastro</a></li>
                    <li role="presentation"><a href="#">Joagadores</a></li>
                    <li role="presentation"><a href="#">-Equipes</a></li>
                    <li role="presentation"><a href="#">-Prêmios</a></li>
                    <li class="divider-style"></li>
                    <li role="presentation" class="active"><a href="#">Configurações</a></li>
                    <li role="presentation"><a href="#">Sair</a></li>
                </ul>

            </div>
            <!--FIM menu-->   

            <!--container-->
            <div class="col-md-10  container-style">
                <div id="page-content" class="margembranca"> 

                    <div id="elemento1" class="col-md-12 pull-left">
                        <div class="col-md-12">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a> </li>
                                <li><a href="#">Products </a> </li>
                                <li><a href="#">Xyz </a> </li>
                                <li class="active">Features</li>
                            </ol>
                        </div>
                    </div>

                    <div  class="col-md-12">															
                        <div class="tabbable tabs-left"> 
                            <div class="col-md-3">      									<!--Aqui começa a tab do lado esquerdo com tabela-->
                                <ul class ="nav nav-tabs nav-stacked">	

                                    <li class="active"><a href="#tab1" data-toggle="tab">Dados da Empresa</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Redes Socias</a></li>
                                    <li><a href="#tab3" data-toggle="tab">Jogo</a></li>
                                    <li><a href="#tab4" data-toggle="tab">Usuário Gestores</a></li>
                                    <li><a href="#tab5" data-toggle="tab">Conteúdo</a></li>
                                    <li><a href="#tab6" data-toggle="tab">Categorias de Objetos</a></li>
                                    <li><a href="#tab7" data-toggle="tab">Tipo de Reconhecimento</a></li>
                                    <li><a href="#tab8" data-toggle="tab">Tipo de Prêmios</a></li>
                                    <li><a href="#tab9" data-toggle="tab">Usuário Facilitadores</a></li>
                                </ul>    														 <!--Aqui Termina o cabeçalho da tab-->
                            </div>
                            <div class="tab-content">

                                <div class="tab-pane active" id="tab1">

                                    <div class="col-md-5" >
                                        <div class="col-sm-6 col-lg-11">
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-md-2 control-label">Nome</label>
                                                <div class="col-md-8 pull-right" ><!--tamanho da caixa de texto-->
                                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="">
                                                    <br/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--ativo celular-->                  
                                    <div class="celular col-md-3 ">
                                        <div class="onoffswitch">
                                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked> 
                                            <label class="onoffswitch-label" for="myonoffswitch">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <!--FIM ativo celular-->

                                    <div class="col-md-5" >
                                        <div class="col-sm-6 col-lg-11">
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-md-2 control-label">CNPJ</label>
                                                <div class="col-md-8 pull-right" ><!--tamanho da caixa de texto-->
                                                    <input type="number"  id="cnpj" name="cnpj" class="form-control" placeholder="">
                                                    <br/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5" >
                                        <div class="col-sm-6 col-lg-11">
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-md-2 control-label">CEP</label>
                                                <div class="col-md-8 pull-right" ><!--tamanho da caixa de texto-->
                                                    <input type="number" id="cep" name="cep" class="form-control" placeholder="">
                                                    <br/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5" >
                                        <div class="col-sm-6 col-lg-11">
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-md-2 control-label">Endereço</label>
                                                <div class="col-md-8 pull-right" ><!--tamanho da caixa de texto-->
                                                    <input type="text" id="enderecol" name="endereco" class="form-control" placeholder="">
                                                    <br/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="col-sm-6 col-lg-12">
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-md-2 control-label">Nº</label>
                                                <div class="col-md-8"><!--tamanho da caixa de texto-->
                                                    <input type="number"  id="numero" name="endereconumero" class="form-control" placeholder="">
                                                    <br/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-5" >
                                        <div class="col-sm-6 col-lg-11">
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-md-2 control-label">Complemento</label>
                                                <div class="col-md-8 pull-right" ><!--tamanho da caixa de texto-->
                                                    <input type="text" class="form-control" id="enderecocomplemento" name="enderecocomplemento" placeholder="">
                                                    <br/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="col-sm-6 col-lg-12">
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-md-2 control-label">Bairro</label>
                                                <div class="col-md-5"><!--tamanho da caixa de texto-->
                                                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="">
                                                    <br/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5" >
                                        <div class="col-sm-6 col-lg-11">
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-md-2 control-label">Cidade</label>
                                                <div class="col-md-8 pull-right" ><!--tamanho da caixa de texto-->
                                                    <input type="text" class="form-control" id="cidade_id" name="cidade_id" placeholder="">
                                                    <br/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2" >
                                        <div class="col-sm-6 col-lg-8">
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-md-2 control-label">Estado</label>
                                                <div class="col-md-3 pull-right"><!--tamanho da caixa de texto-->
                                                    <select class="span1" id="estado_id" name="estado_id">
                                                        <option value="1">AC</option>
                                                        <option value="2">SP</option>
                                                        <option value="3">BR</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-1">
                                        <div class="col-sm-6 col-lg-12">
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-md-2 control-label">País</label>
                                                <div class="col-md-3 pull-right"><!--tamanho da caixa de texto-->
                                                    <select class="span1" id="pais_id" name="pais_id">
                                                        <option value="1">BR</option>
                                                        <option value="2">SP</option>
                                                        <option value="3">AC</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-5" >
                                        <div class="col-sm-6 col-lg-11">
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-md-2 control-label">Telefone</label>
                                                <div class="col-md-4 pull-right" ><!--tamanho da caixa de texto-->
                                                    <input type="tel" class="form-control" id="telefone1" name="telefone1" placeholder="">
                                                </div>

                                                <div class="col-md-4 pull-right" ><!--tamanho da caixa de texto-->
                                                    <input type="tel" class="form-control" id="telefone2" name="telefone2" placeholder="">
                                                    <br/>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-5" >
                                        <div class="col-sm-6 col-lg-11">
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-md-2 control-label">E-mail</label>
                                                <div class="col-md-8 pull-right" ><!--tamanho da caixa de texto-->
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                                                    <br/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-10  container-style pull-right direita">
                                        <div id="page-content" class="margembranca"> 

                                            <div class="col-md-12" >
                                                <div class="col-sm-6 col-lg-12">
                                                    <div class="form-group">
                                                        <label for="inputEmail" class="col-md-2 control-label">Site</label>
                                                        <div class="col-md-4 " ><!--tamanho da caixa de texto-->
                                                            <input type="text" class="form-control" id="site" name="site" placeholder="">
                                                            <br/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12" >
                                                <div class="col-sm-6 col-lg-12">
                                                    <div class="form-group">
                                                        <label for="inputEmail" class="col-md-2 control-label">Logotipo</label>
                                                        <div class="col-md-10 " ><!--tamanho da caixa de texto-->
                                                            <a href="#" class="ico-search">Clique aqui para selecionar a imagem</a> 
                                                        </div><br/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-5" >
                                                <div class="col-sm-6 col-lg-11">
                                                    <div class="form-group">
                                                        <label for="inputEmail" class="col-md-2 control-label">Telefone</label>
                                                        <div class="col-md-7 pull-right" ><!--tamanho da caixa de texto-->
                                                            <input type="tel" class="form-control" id="responsaveltelefone" name="responsaveltelefone" placeholder="">
                                                            <br/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-3" >
                                                <div class="col-sm-6 col-lg-11">
                                                    <div class="form-group">
                                                        <label for="inputEmail" class="col-md-2 control-label">Ramal</label>
                                                        <div class="col-md-7 pull-right" ><!--tamanho da caixa de texto-->
                                                            <input type="tel" class="form-control" id="responsavelramal" name="responsavelramal" placeholder="">
                                                            <br/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3" >
                                                <div class="col-sm-6 col-lg-11">
                                                    <div class="form-group">
                                                        <label for="inputEmail" class="col-md-2 control-label">Celular</label>
                                                        <div class="col-md-7 pull-right" ><!--tamanho da caixa de texto-->
                                                            <input type="tel" class="form-control" id="responsavelcelular" name="responsavelcelular" placeholder="">
                                                            <br/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12" >
                                                <div class="col-sm-6 col-lg-12">
                                                    <div class="form-group">
                                                        <label for="inputEmail" class="col-md-2 control-label">E-mail</label>
                                                        <div class="col-md-4 " ><!--tamanho da caixa de texto-->
                                                            <input type="email" class="form-control" id="responsavelemail"name="responsavelemail" placeholder="">
                                                            <br/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div> <!-- aqui fecha a tab-pane -->


                                <div class="tab-pane" id="tab2">	 <!--Teste 1 para ver se funciona a caixa de lado-->
                                    <p>Hey, estou na seção 2</p>
                                </div>

                                <div class="tab-pane" id="tab3">
                                    <p>Estou na seção 3</p>
                                </div>							<!--Termina aqui o teste 1 para ver se funciona a caixa de lado-->

                            </div>							
                        </div>	 
                    </div>	       
 </div>
                    <!--esse input serve para a declaração do onoffswitch do status-->
                    <input type="hidden" id="status" name="status" />
                     <!--Fim da declaração do input para a declaração do onoffswitch do status-->
                    
                    <!-- rodape -->
                    <div>
                        <button type="submit" class="btn btn-primary pull-right btnazul">Salvar</button>
                        <button class="btn btn-deafult pull-right">Cancelar</button>
                    </div> 
                    
            </div>
        </form>
    </body>
</html>

<!--FIM container-->