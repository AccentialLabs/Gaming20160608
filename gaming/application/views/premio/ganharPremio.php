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
        <link href="../../assets/css/Premios.css" rel="stylesheet"/>

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
         <script src="../../assets/js/views/ajax/premiosAjax.js"></script>
        <!-- TERMINA AQUI  A TABELA NO HEAD-->

    </head>
    <body>

        <!--antepenultimo passo para mostrar na tela se funciona-->
        <form  method="post" action="http://localhost:9090/gaming/index.php/premio/createGanharpremio" >      
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
                            <a class= "navbar-brand" href ="#"><strong>Prêmios</strong></a>
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
                    <li role="presentation" class="active"><a href="#">-Prêmios</a></li>
                    <li class="divider-style"></li>
                    <li role="presentation"><a href="#">Configurações</a></li>
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



                    <div class="col-md-12" >

                        <div class="col-md-5">
                        </div>

                        <div class = "checbox col-md-3 ">
                            <label><input type="checkbox" id="catalogopremio" name="catalogopremio" VALUE="1" >Somente do catalogo de premios</label>                               
                        </div>
                        <div class="col-md-4 ">
                            <select class="col-md-9" id="tipofiltra" name="tipofiltra">
                                <option value="1">Selecione o tipo para filtrar</option>
                                <option value="2">Viagem</option>
                                <option value="3">Eletrodomésticos</option>
                                <option value="4">Comida</option>
                            </select>
                        </div>
                    </div>

                    <div id="Layer1" class="col-md-11">
                        <div class="table-responsive">
                            <table class="tablesorter">
                                <thead>
                                    <tr>
                                        <!-- datatableCount -->
                                        <th style="border-width: thin; border-style: solid; border-color: black;">Prêmios</th> 
                                        <th style="border-width: thin; border-style: solid; border-color: black;"><center>Tipo </center></th>
                                <th style="border-width: thin; border-style: solid; border-color: black;">Qtd.inicial</th> 
                                <th style="border-width: thin; border-style: solid; border-color: black;">Qtd.Atual</th> 
                                <th style="border-width: thin; border-style: solid; border-color: black;">Ativo</th> 
                                <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/></center></th>

                                </tr>
                                </thead>
                                <tbody ng-repeat="membro in membroSede">
                                    <!-- Data Show Row-->

                                    <?php
                                    foreach ($premio as $premio) {
                                        if ($premio['status'] != 2) {
                                            ?> 
                                            <tr class="listas">
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $premio['nome']; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $premio['tipopremio_id']; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $premio['quantidadepremios']; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $premio['quantidadeatualpremios']; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox"  name="opcoes" id="<?php echo $premio['id']; ?>" value="<?php echo $premio['status']; ?>" <?php
                                                                                                                                         if ($premio['status'] == 1) {
                                                                                                                                             echo "checked";
                                                                                                                                         }
                                                                                                                                         ?>   class="statusCheckbox" /> </center></td>
                                        <td style="border-width: thin; border-style: solid; border-color: black;"><center><span  class = "glyphicon glyphicon-ban-circle excluirPremios" id="<?php echo $premio['id']; ?>"></span></center> </td>
                                        </tr>
    <?php }
} ?>

                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- rodape -->
                    <div>
                        <!-- Trigger the modal with a button -->
                        <button type="submit" class="btn btn-info pull-right">Adicionar Prêmios</button>      
                    </div> 

                </div>
            </div>
        </form>
    </body>
</html>

<!--FIM container-->