<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <!-- link da rede social-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- FIM link da rede social-->

        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet"/>
        <!--<link href="css/configuracoes4.css" rel="stylesheet" />   retirei por confiurar a nav-brand---> 
        <link href="../../assets/css/Configurações2.css" rel="stylesheet"/>

        <script src="../../assets/js/jquery.min.js"></script> 
        <script src="../../assets/js/bootstrap.min.js"></script> 
        <script src="../../assets/js/views/cadastrarJogo.js"></script> 
    </head>
    
    <body>
      <form  method="post" action="http://localhost:9090/gaming/index.php/configuracoes/createJogo" > 
        
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

                                <li><a href="#tab1" data-toggle="tab">Dados da Empresa</a></li>
                                <li><a href="#tab2" data-toggle="tab">Redes Socias</a></li>
                                <li class="active"><a href="#tab3" data-toggle="tab">Jogo</a></li>
                                <li><a href="#tab4" data-toggle="tab">Usuário Gestores</a></li>
                                <li><a href="#tab5" data-toggle="tab">Conteúdo</a></li>
                                <li><a href="#tab6" data-toggle="tab">Categorias de Objetos</a></li>
                                <li><a href="#tab7" data-toggle="tab">Tipo de Reconhecimento</a></li>
                                <li><a href="#tab8" data-toggle="tab">Tipo de Prêmios</a></li>
                                <li><a href="#tab9" data-toggle="tab">Usuário Facilitadores</a></li>
                            </ul>    														 <!--Aqui Termina o cabeçalho da tab-->
                        </div>
                        <div class="tab-content">

                            <div class="tab-pane active" id="tab3">

                                <div class="col-md-9">
                                   
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-lg-3 control-label">Status do Jogo</label>

                                            <!--ativo celular-->                  
                                            <div class=" col-md-3 ">
                                                <!--somente a parte do código do onffswitch com o CSS-->
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                    <label class="onoffswitch-label" for="myonoffswitch">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>        <!--Fim da parte do código do onffswitch com o CSS-->
                                                
                                             <div class="col-md-3 ligado">
                                                <label>ligado</label>
                                             </div>
                                            </div>
                                           
                                            <!--FIM ativo celular-->

                                            <!--ativo celular-->                  
                                            <div class=" col-md-5">
                                                <div class="onoffswitch2">
                                                    <input type="checkbox" name="onoffswitch2" class="onoffswitch2-checkbox" id="myonoffswitch2" checked>
                                                    <label class="onoffswitch2-label" for="myonoffswitch2">
                                                        <span class="onoffswitch2-inner"></span>
                                                        <span class="onoffswitch2-switch"></span>
                                                    </label>
                                                </div>
                                            <div class="col-md-12 ligado">
                                                <label>Modo simulação/teste</label>
                                            </div>  <br/>
                                            </div> 
                                            <!--FIM ativo celular-->

                                  
                                    </div>
                                </div> 

                                <div class="col-md-7" >
                                    
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-2 control-label">Exportar</label>
                                            <div class="col-md-8 pull-right" ><!--tamanho da caixa de texto-->
                                                <button type= "button" class= "btn btn-large"> Clique aqui para exportar todos os dados (xls)</button>
                                            </div>
                                            <br/>
                                        </div>
                                        <br/>
                               
                                </div>

                                <div class="col-md-7" >
                                  
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-2 control-label">Pontos/Scores</label>
                                            <div class="col-md-8 pull-right" ><!--tamanho da caixa de texto-->
                                                <button type= "button" class= "btn btn-large"> Clique aqui para ZERAR todos os Pontos/Scores)</button>
                                                <br/>
                                            </div>
                                        </div>
                                 
                                </div>

                                <div id ="elemento2" class="col-md-9" > 
                                   
                                        <!--margem branca para a parte escrrita-->
                                        <div class="col-md-3 text-center">
                                            
                                        </div>
                                        <!--fiM da margem branca para a parte escrrita-->
                                        
                                        <div class ="col-md-9">
                            <p> <b>ATENÇÃO!</b> Esta ação afetará <u>todos</u> os usuários/jogadores do jogo.</br>
                                   Antes de o sistema proceder, o Responsável será contatado para confirmar a ação.</p>
                                        </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="form-group col-md-3">
                                            <label for="text" control-label>Pontos expiram após</label>
                                            <br/>
                                        </div>
                                        <div class="col-md-8 text-center">
                                            <input name="pontosexpiram" id="pontosexpiram" type="date"  value="" class="textbox70"/> Deixe em branco para não perderem a validade
                                        </div>
                                        <br/>
                                   
                                </div>

                              <div class="col-md-7" >
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-3 control-label">Orientação para<br/>os Jogadores</label>
                                            <div class="col-md-8 pull-right" ><!--tamanho da caixa de texto-->
                                                <textarea class="form-control" type="text" id="orientacao" name="orientacao" >
                                                </textarea> <br/>
                                            </div>
                                        </div>
                                </div>
                                
                                
                                <div class="col-md-7" >
                                        <div class="form-group">
                                            <label for="text" class="col-md-3 control-label">Regras do Jogo</label>
                                            <div class="col-md-8 pull-right" ><!--tamanho da caixa de texto-->
                                                <textarea class="form-control" type="text" id="regras" name="regras" >
                                                </textarea>
                                            </div>
                                            <br/>
                                        </div>
                                        <br/>
                                </div>

                            </div> <!-- aqui fecha a tab-pane -->

                            <!--Teste 1-2 para ver se funciona a caixa de lado-->
                            <div class="tab-pane" id="tab2">	
                                <p>Hey, estou na seção 2</p>
                            </div>

                            <div class="tab-pane" id="tab4">
                                <p>Estou na seção 4</p>
                            </div>
                            <!--Termina aqui o teste 1-2 para ver se funciona a caixa de lado-->

                        </div>							
                    </div>	 
                </div>	       

        <!--codigo faz parte da chamada para o código (cadastrarprograma.js)-->
             <input type="hidden" name="status" id="status"/>
             
             <input type="hidden" name="status2" id="status2"/>
        <!--fim do codigo da chamada de java script-->
                
                <!-- rodape -->
                <div>
                    <button type="submit" class="btn btn-primary pull-right btnazul">Salvar</button>
                    <button class="btn btn-deafult pull-right">Cancelar</button> 
                </div> 

            </div>
        </div>
      </form>
    </body>
</html>

<!--FIM container-->