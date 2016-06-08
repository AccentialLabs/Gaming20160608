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
        <link href="../../assets/css/Configurações1.css" rel="stylesheet"/>
        


        <script src="../../assets/js/jquery.min.js"></script> 
        <script src="../../assets/js/bootstrap.min.js"></script> 
        <script src="../../assets/js/views/cadastrarFacebook.js"></script> <!--status onoffswitch -->

    </head>
    <body>
        
     <form  method="post" action="http://localhost:9090/gaming/index.php/configuracoes/createFacebook">   <!--link da tela sucess-->
 <!--Continuidade do Código da tela "rede social"  segue o "Twitter" e o "Instagran"  (tentativa de aparecer na tela) -->
 <!--    <form  method="post" action="http://localhost:9090/gaming/index.php/configuracoes/createTwitter">   -->
 <!--    <form  method="post" action="http://localhost:9090/gaming/index.php/configuracoes/createInstagran">   -->
 
         <!--antepenultimo passo-->
    
         <!--antepenultimo passo para mostrar na tela se funciona-->
         
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
                                <li class="active"><a href="#tab2" data-toggle="tab">Redes Socias</a></li>
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

                            <div class="tab-pane active" id="tab2">

                                <div class="col-md-5" >
                                    <div class="col-sm-6 col-lg-11">
                                        <div class="form-group navbar-text">
                                            <a href="#"><i class="fa fa-facebook-square fa-4x"></i></a>
                                            <div class="col-md-8 pull-right" ><!--tamanho da caixa de texto-->
                                                 <input type="text" id="descricao" name="descricao" class="form-control" placeholder="">
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
                                        <div class="form-group navbar-text">
                                            <a href="#"><i class="fa fa-twitter-square fa-4x"></i></a>
                                            <div class="col-md-8 pull-right" ><!--tamanho da caixa de texto-->
                                                <input type="text" id="descricao" name="descricao" class="form-control" placeholder="">
                                               
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                

                                  <!--ativo celular-->                  
                                <div class="celular col-md-2 ">
                                    
                                    <div class="onoffswitch2">
                                        <input type="checkbox" name="onoffswitch2" class="onoffswitch2-checkbox" id="myonoffswitch2" checked>
                                        <label class="onoffswitch2-label" for="myonoffswitch2">
                                            <span class="onoffswitch2-inner"></span>
                                            <span class="onoffswitch2-switch"></span>
                                        </label>
                                    </div>
                                    
                                    
                                </div>
                                <!--FIM ativo celular-->
                                

                                <div class="col-md-5" >
                                    <div class="col-sm-6 col-lg-11">
                                        <div class="form-group navbar-text">
                                            <a href="#"> <i class="fa fa-instagram fa-4x"></i></a>
                                            <div class="col-md-8 pull-right" ><!--tamanho da caixa de texto-->
                                                <input type="text" id="descricao" name="descricao" class="form-control" placeholder="">
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--ativo celular-->                  
                                <div class="celular col-md-3 ">
                                    <div class="onoffswitch3">
                                        <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
                                        <label class="onoffswitch3-label" for="myonoffswitch3">
                                            <span class="onoffswitch3-inner"></span>
                                            <span class="onoffswitch3-switch"></span>
                                        </label>
                                    </div>
                                </div>
                                <!--FIM ativo celular-->

                                <!--goooooogle!-->

                                <div class="col-md-5"  >
                                    <div class="col-sm-6 col-lg-7">
                                        <div class="form-group navbar-text">
                                            <a href="#"><i class = "fa fa-google-plus-square fa-4x"></i></a>
                                        </div>
                                        <div class="col-md-7 pull-right btnaltura" ><!--tamanho da caixa de texto-->
                                            <button type="button" class="btn btn-block btn-large">Conectar</button>
                                            <br/>
                                        </div>
                                    </div>                                 
                                </div>

                                <!--ativo celular-->                  
                                <div class="celular col-md-3 ">
                                    <div class="onoffswitch4">
                                        <input type="checkbox" name="onoffswitch4" class="onoffswitch4-checkbox" id="myonoffswitch4" checked>
                                        <label class="onoffswitch4-label" for="myonoffswitch4">
                                            <span class="onoffswitch4-inner"></span>
                                            <span class="onoffswitch4-switch"></span>
                                        </label>
                                    </div>
                                </div>
                                <!--FIM ativo celular-->

                                <!--linkediiiin!-->
                                 <div class="col-md-5" >
                                    <div class="col-sm-6 col-lg-7" >
                                        <div class="form-group navbar-text">
                                          <a href="#"> <i class="fa fa-linkedin-square fa-4x"></i></a>
                                        </div>
                                        <div class="col-md-7 pull-right btnaltura" ><!--tamanho da caixa de texto-->
                                            <button type="button" class="btn btn-block btn-large">Conectar</button>
                                            <br/>
                                        </div>
                                    </div>                                 
                                </div>
                                <br/>
                                
                              <div class="col-md-12">
                                <!--margem baranca antes do youtube-->
                                <div class="col-md-3 altura">
                                </div>
                                 <!--margem baranca antes do youtube-->
                                 
                                <!--youtubeeeeeeeeee!-->
                                <div class="col-md-5" >
                                    <div class="col-sm-6 col-lg-7" >
                                        <div class="form-group navbar-text">
                                          <a href="#"><i class="fa fa-youtube-square fa-4x"></i></a>
                                        </div>
                                        <div class="col-md-7 pull-right btnaltura" ><!--tamanho da caixa de texto-->
                                            <button type="button" class="btn btn-block btn-large">Conectar</button>
                                            <br/>
                                        </div>
                                    </div>                                 
                                </div>
                             </div>


                            </div> <!-- aqui fecha a tab-pane -->


                            <div class="tab-pane" id="tab1">	 <!--Teste 1 para ver se funciona a caixa de lado-->
                                <p>Hey, estou na seção 1</p>
                            </div>

                            <div class="tab-pane" id="tab3">
                                <p>Estou na seção 3</p>
                            </div>							<!--Termina aqui o teste 1 para ver se funciona a caixa de lado-->

                        </div>							
                    </div>	 
                </div>	       

            <!--codigo faz parte da chamada para o código (cadastrarprograma.js)-->
                <input type="hidden" name="status" id="status"/>
            <!--fim do codigo da chamada de java script-->
                
                <!-- rodape -->
                
                <div>
                    <button type="submit" class="btn btn-primary pull-right btnazul">Salvar</button>
                    <button class="btn btn-deafult pull-right">Cancelar</button> 
                </div> 
 
            </div>
        </div>
        
      </form>
     </form>
    </form>
        
    </body>
</html>

<!--FIM container-->