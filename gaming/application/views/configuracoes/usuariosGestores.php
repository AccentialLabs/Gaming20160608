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

        <title> TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet"/>
        <!--<link href="css/configuracoes4.css" rel="stylesheet" />   retirei por confiurar a nav-brand---> 
        <link href="http://localhost:9090/game/css/configuracoes3.css" rel="stylesheet"/>

        
        <script src="../../assets/js/jquery.min.js"></script> 
        <script src="../../assets/js/bootstrap.min.js"></script> 


        <!-- COMEÇA AQUI  A TABELA NO HEAD-->
        <meta charset="UTF-8">
        <title>Tablesorter - Tutsup</title>

        <!-- Estilos necessários para o tema do tablesorter -->
        <link rel="stylesheet" href="../../assets/css/blue/style.css">

        <!-- jQuery e Tablesorter -->
        <script src="../../assets/js/jquery-latest.js"></script>
        <script src="../../assets/js/jquery.tablesorter.min.js"></script>

        <!-- Meu script -->
        <script src="../../assets/js/scripts.js"></script>
        <script src="../../assets/js/views/ajax/usuariosGestores.js"></script>
        <!-- TERMINA AQUI  A TABELA NO HEAD-->

    </head>
    <body>
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
                                <li><a href="#tab3" data-toggle="tab">Jogo</a></li>
                                <li class="active"><a href="#tab4" data-toggle="tab">Usuário Gestores</a></li>
                                <li><a href="#tab5" data-toggle="tab">Conteúdo</a></li>
                                <li><a href="#tab6" data-toggle="tab">Categorias de Objetos</a></li>
                                <li><a href="#tab7" data-toggle="tab">Tipo de Reconhecimento</a></li>
                                <li><a href="#tab8" data-toggle="tab">Tipo de Prêmios</a></li>
                                <li><a href="#tab9" data-toggle="tab">Usuário Facilitadores</a></li>
                            </ul>    														 <!--Aqui Termina o cabeçalho da tab-->
                        </div>
                        <div class="tab-content">

                            <div class="tab-pane active" id="tab4">

                                <!maregem a esquerda>
                                <div class="col-md-9  container-style">
                                    <div id="page-content" class="margembranca"> 

                                        <div id="elemento3" class="col-md-12">
                                            <div class="col-md-12">
                                                <div class ="col-md-11">
                                                    <p><b>Gestores do Jogo</b></br>Os gestores do Jogo são colaboradores que podem disparar intervenções
                                                        ou criar ações para os demais Jogadores participarem ou interagirem.</br>
                                                        Use esta tela para selecionar quem serão os colaboradores com este perfil.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-11 ">
                                            <div class="table-responsive">
                                                <table class="tablesorter">
                                                    <thead>
                                                        <tr>
                                                            <th style="border-width: thin; border-style: solid; border-color: black;">Nome</th>
                                                            <th style="border-width: thin; border-style: solid; border-color: black;">Cargo</th>
                                                            <th style="border-width: thin; border-style: solid; border-color: black;">Departamento</th>
                                                            <th style="border-width: thin; border-style: solid; border-color: black;">Unidade</th>
                                                            <th style="border-width: thin; border-style: solid; border-color: black;">Cidade</th>
                                                            <th style="border-width: thin; border-style: solid; border-color: black;">Estado</th>
                                                            <th style="border-width: thin; border-style: solid; border-color: black;">Pais</th>
                                                            <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                           
                                            <?php foreach ($usuarios as $usuario) {     
                                               ?> 
                                                <tr>
                                                    <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuario['nome']; ?></td>
                                                    <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuario['cargo']; ?></td>
                                                    <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuario['departamento']; ?></td>
                                                    <td style="border-width: thin; border-style: solid; border-color: black;"><center> <?php echo $usuario['unidade']; ?></center></td>
                                                    <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuario['cidade']; ?></td>
                                                    <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuario['estado']; ?></td>
                                                    <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuario['pais']; ?></td>
                                                    <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="<?php echo $usuario['id'];?>" class="usuario_gestor_active"/> </center></td>
                                                </tr>
                                                    
                                            <?php }?>
                                           
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!--colocando os botóes do final da página dentro da ta´-pane-->
                                <div>
                                    <button type="button" class="btn btn-primary pull-right btnazul">Salvar</button>
                                    <button class="btn btn-deafult pull-right">Cancelar</button> 
                                </div> 
                                 <!--Tremina aqui os botóes do final da página dentro da ta´-pane-->

                            </div> <!-- aqui fecha a tab-pane -->

                            <div class="tab-pane" id="tab2">	 <!--Teste 1 para ver se funciona a caixa de lado-->
                                <p>Hey, estou na seção 2</p>
                            </div>

                            <div class="tab-pane" id="tab5">
                                <p>Estou na seção 5</p>
                            </div>							<!--Termina aqui o teste 1 para ver se funciona a caixa de lado-->

                        </div>							
                    </div>	 
                </div>	       

                <!-- rodape -->

            </div>
        </div>

    </body>
</html>

<!--FIM container-->