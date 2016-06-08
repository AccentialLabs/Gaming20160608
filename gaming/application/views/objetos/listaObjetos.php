<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!--Nessa tela  incluimos o codigo da tabela (cadastrar objetos)-->

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet"/>
        <!--<link href="css/configuracoes4.css" rel="stylesheet" />   retirei por confiurar a nav-brand---> 
        <link href="../../assets/css/objetos.css" rel="stylesheet"/>


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
         <script src="../../assets/js/views/ajax/objetosAjax.js"></script>
        <!-- TERMINA AQUI  A TABELA NO HEAD-->
    </head>
    <body>

        <form  method="post" action="http://localhost:9090/gaming/index.php/objetos/createObjetos">
     
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
                        <a class= "navbar-brand" href ="#"><strong>Objetos</strong></a>
                    </div>
                </div>
            </nav>
        </div>
        <!--Fim cabeçãlho-->

        <!--Menu-->
        <div class="col-md-2 pull-left div-vermelha menu-style ">

            <ul class="nav nav-pills nav-stacked">
                <li role="presentation"><a href="#">Inicial</a></li>
                <li role="presentation" class="active"><a href="#">Objetos</a></li>
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

                    <div class="col-md-8 ">
                    </div>
                    
                    <div class="col-md-3 ">  <!--nesse codigo aqui colocamos ata tabela cadsatrar objetos,-->
                        <select id="categoria" name="categoria" >
                            <option value="1">Selecione a categoria para filtrar</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div id="Layer1" class="col-md-11">
                    <div class="table-responsive">
                        <table class="tablesorter">
                            <thead>
                                <tr>
                                    <!-- datatableCount -->
                                    <th style="border-width: thin; border-style: solid; border-color: black;">Perguntas</th> 
                                    <th style="border-width: thin; border-style: solid; border-color: black;">Categoria</th>
                                    <th style="border-width: thin; border-style: solid; border-color: black;"><center>Ativo</center></th> 
                                    <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/></center></th>
                                </tr>
                            </thead>
                            
                            <tbody ng-repeat="membro in membroSede">
                                <!-- Data Show Row-->
                            
                        <?php foreach ($objetos as $objetos) { 
                          ?>
                                
                         <tr class="listas">
                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $objetos['objeto'];?></td>
                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $objetos['categoria'];?></td>
                            <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" class="statusCheckbox" id="<?php echo $objetos['id']; ?>" value="<?php echo $objetos['status']; ?>" <?php
                                                                                                                                     if ($objetos['status'] == 1) {
                                                                                                                                         echo "checked";
                                                                                                                                     }
                                                                                                                                     ?>/> </center></td>
                            <td style="border-width: thin; border-style: solid; border-color: black;"><center><span  class = "glyphicon glyphicon-ban-circle excluirObjeto" id="<?php echo $objetos['id']; ?>"></span></center> </td>
                         </tr>

                          <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="container">
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">     <!--.fade = desvanecer o modal de dentro pra fora-->
                        <div class="modal-dialog modal-sm"><!--diálogo-.modal=define a largura adequada e margem do modal"tamanho".modal-lg-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><center>ATENÇÃO!</center></h4>
                                </div>
                                <div class="modal-body">
                                    <p>Este Objeto está sendo usado em</br>Ações e Programas!</br>
                                        Confirme se deseja mesmo excluí-lo.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Sim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- rodape -->
                
                <!-- Trigger the modal with a button -->
                <div>
                    <button type="button" class="btn btn-primary pull-right btnazul" data-toggle="modal" data-target="#myModal">Adicionar Objeto</button>
                    <button type="submit" class="btn btn-deafult pull-right">Importar Planilha de Objetos</button> 
                </div> 

            </div>
        </div>
        </form>
    </body>
</html>

<!--FIM container-->