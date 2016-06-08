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
        <link href="../../assets/css/missoes.css" rel="stylesheet"/>

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
           <script src="../../assets/js/views/ajax/missoesAjax.js"></script>
        <!-- TERMINA AQUI  A TABELA NO HEAD-->

    </head>
    <body>

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
                        <a class= "navbar-brand" href ="#"><strong>Missões</strong></a>
                    </div>
                </div>
            </nav>
        </div>
        <!--Fim cabeçãlho-->

        <!--Menu-->
        <div class="col-md-2 pull-left div-vermelha menu-style ">

            <ul class="nav nav-pills nav-stacked">
                <li role="presentation"><a href="#">Inicial</a></li>
                <li role="presentation"><a href="#">Objetos</a></li>
                <li role="presentation"><a href="#">Ações</a></li>
                <li role="presentation"><a href="#">Reconhecimento</a></li>
                <li role="presentation" class="active"><a href="#">Missões</a></li>
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
                <li role="presentation"><a href="#">Configurações</a></li>
                <li role="presentation"><a href="#">Sair</a></li>
            </ul>

        </div>
        <!--FIM menu-->   

        <!--container-->
        <div class="col-md-10  container-style">
            <div id="page-content" class="margembranca"> 

                <ol class="breadcrumb">
                    <li><a href="#">Home</a> </li>
                    <li><a href="#">Products </a> </li>
                    <li><a href="#">Xyz </a> </li>
                    <li class="active">Features</li>
                </ol>



                <div id="Layer1" class="col-md-11">
                    <div class="col-sm-6 col-lg-9" >
                        <div class="table-responsive">
                            <table class="tablesorter col-md-12" id="Layer1">
                                <thead>
                                    <tr>
                                        <!-- datatableCount -->
                                        <th style="border-width: thin; border-style: solid; border-color: black;">Missões</th> 
                                        <th style="border-width: thin; border-style: solid; border-color: black;"><center>Ativo</center></th> 
                                <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/></center></th>

                                </tr>
                                </thead>
                                <tbody ng-repeat="membro in membroSede"> 
                                    <!-- Data Show Row-->

                                    <?php
                                    foreach ($missoes as $missao) {
                                        if ($missao['status'] != 2) {
                                            ?> <!--penultimo passo, para exexutar tudo com o Foreach--> 

                                            <tr class="listas">
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $missao['missao']; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" class="statusCheckbox" id="<?php echo  $missao['id']?>" value="<?php echo $missao['status']; ?>" <?php if($missao['status'] == 1){echo "checked"; }?>/> </center></td>
                                        <td style="border-width: thin; border-style: solid; border-color: black;"><center><span  class = "glyphicon glyphicon-ban-circle excluirMissao" id="<?php echo  $missao['id']?>"></span></center> </td>
                                        </tr>
                                    <?php }
                                }
                                ?> <!penultimo passo>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- rodape -->
                <div>
                    <button type="button" class="btn btn-primary pull-right">Adicionar Missão</button>
                    <button class="btn btn-deafult pull-right btnazul">Clonar Missão</button>
                </div> 

            </div>
        </div>

    </body>
</html>

<!--FIM container-->