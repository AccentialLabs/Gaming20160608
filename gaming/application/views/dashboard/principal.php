<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <!-- Ativo para o botão+ add as tabelas-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="craftpip-jquery-confirm-524c959/dist/jquery-confirm.min.js"></script>
        <!-- Ativo para o botão+ add as tabelas-->

        <!-- link da rede social-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- FIM link da rede social-->

        <title> TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="http://localhost:9090/game/css/bootstrap.min.css" rel="stylesheet"/>
        <!--<link href="css/configuracoes4.css" rel="stylesheet" />   retirei por confiurar a nav-brand---> 
        <link href="http://localhost:9090/game/css/tela1.css" rel="stylesheet"/> 
        <script src="http://localhost:9090/game/js/tela1.js"></script> 

        <script src="http://localhost:9090/game/js/jquery.min.js"></script> 
        <script src="http://localhost:9090/game/js/bootstrap.min.js"></script> 


        <!-- COMEÇA AQUI  A TABELA NO HEAD-->
        <meta charset="UTF-8">
        <title>Tablesorter - Tutsup</title>

        <!-- Estilos necessários para o tema do tablesorter -->
        <link rel="stylesheet" href="http://localhost:9090/game/css/blue/style.css">

        <!-- jQuery e Tablesorter -->
        <script src="http://localhost:9090/game/js/jquery-latest.js"></script>
        <script src="http://localhost:9090/game/js/jquery.tablesorter.min.js"></script>

        <!-- Meu script -->
        <script src="http://localhost:9090/game/js/scripts.js"></script>
        <!-- TERMINA AQUI  A TABELA NO HEAD-->

    </head>
    <body>
        
          <!--antepenultimo passo-->
        <?php 
        print_r($jogador);
        ?>
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

                </div>
            </nav>
        </div>
        <!--Fim cabeçãlho-->
        
<!--container-->

        <!--Menu-->
        <div class="col-md-2 pull-left div-vermelha menu-style ">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" class="active"><a href="#">Inicial</a></li>
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

                <div  class="col-md-12" >															
                    <div class="tabbable"> 
                        <div class="col-md-12">      									<!--Aqui começa a tab do lado esquerdo com tabela-->
                            <ul class ="nav nav-tabs">	

                                <li class="active"><a href="#tab1" data-toggle="tab">Individual</a></li>
                                <li><a href="#tab2" data-toggle="tab">Cargo</a></li>
                                <li><a href="#tab3" data-toggle="tab">Departamento</a></li>
                                <li><a href="#tab4" data-toggle="tab">Unidade</a></li>
                                <li><a href="#tab5" data-toggle="tab">Cidade</a></li>
                                <li><a href="#tab6" data-toggle="tab">Estado</a></li>
                                <li><a href="#tab7" data-toggle="tab">País</a></li>
                            </ul>    														 <!--Aqui Termina o cabeçalho da tab-->
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">

                                <!maregem a esquerda>
                                <div class="col-md-12  container-style">
                                    <div id="page-content" class="margembranca"> 

                                        <!--Aqui estou chamando o script da btn/tabela que add linha-->
                                        <div class="AddTableRow"></div>
                                        <!--fim da chamada do script da tabela que add linha-->
                                        <div class="col-md-4">
                                            <div id="Layer1" class="col-md-11 pull-left altura">
                                                <div class="table-responsive"> <!--A classe responsive faz que tenhamos altura na tabela junto comm o height-->
                                                    <table class="tablesorter">
                                                        <thead>
                                                            <tr style="border-width: thin; border-style: solid; border-color: black;">
                                                                <!-- datatableCount -->
                                                                <th style="border-width: thin; border-style: solid; border-color: black;">Posição</th> 
                                                                <th style="border-width: thin; border-style: solid; border-color: black;">Jogador</th> 

                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody ng-repeat="membro in membroSede">
                                                              <?php foreach ($jogador as $equipe) {  
                                                                 ?>  
                                                            <!--penultimo passo, para exexutar tudo com o Foreach-->
                                                            <!-- Data Show Row-->
                                                            <tr class="listas" style="border-width: thin; border-style: solid;">

                                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $jogador['descricao'];?></td>
                                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $jogador['descricao'];?></td>
                                                            </tr> 
                                                            <?php }?> <!--penultimo passo-->
                                                        </tbody>
                                                        
                                                    </table>
                                                </div>
                                            </div> <!-- Fim da tabelaaaaaaaaaa -->
                                        </div>


                                        <div class = "col-md-3" >
                                            <fieldset class="scheduler-border">
                                                <legend class="scheduler-border">Missões</legend>
                                                <form class="form-horizontal"> 
                                                    <!--escrever o texto aqui-->
                                                </form>
                                            </fieldset>

                                            <fieldset class="scheduler-border">
                                                <legend class="scheduler-border">Realizações</legend>

                                                <fieldset class="rating">
                                                    <input type="radio" id="star1" name="rating" /><label for="star1" title="Sucks big time"> </label>
                                                    <input type="radio" id="star3" name="rating" /><label for="star3" title="Meh"></label>
                                                    <input type="radio" id="star2" name="rating" /><label for="star2" title="Kinda bad"> </label>   
                                                </fieldset>
                                            </fieldset> 

                                            <div class="col-md-8 nivelps">
                                                <div class="col-md-4 ">
                                                    <p>Nível I</p>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <p>Nível II</p>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <p>Nível III</p>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <fieldset class="scheduler-border">
                                                    <legend class="scheduler-border">Programas</legend>
                                                    <form class="form-horizontal"> 
                                                        <!--escrever o texto aqui-->
                                                    </form>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="col-md-2 pull-left">
                                            <div class="canvas-container">
                                                <canvas id="idgrafico" >
                                                    <script>
                                                        var data = [
                                                            {
                                                                value: 40,
                                                                color: "#666666"
                                                            },
                                                            {
                                                                value: 30,
                                                                color: "#FFFF99"
                                                            },
                                                        ];
                                                        var canvas = document.getElementById("idgrafico");
                                                        var ctx = canvas.getContext("2d");
                                                        new Chart(ctx).Pie(data);
                                                    </script>
                                                </canvas>
                                                 <label class="col-ms-12 pull-right">Realizações</label>
                                            </div>
                                        </div>

                                        <div class="col-md-2 pull-left">
                                            <div class="canvas-container1">
                                                <canvas id="idgrafico1" >
                                                    <script>
                                                        var data = [
                                                            {
                                                                value: 40,
                                                                color: "#666666"
                                                            },
                                                            {
                                                                value: 30,
                                                                color: "#FFFF99"
                                                            },
                                                        ];
                                                        var canvas = document.getElementById("idgrafico1");
                                                        var ctx = canvas.getContext("2d");
                                                        new Chart(ctx).Pie(data);
                                                    </script>
                                                </canvas>
                                                <label class="col-ms-12 pull-right">Realizações</label>
                                            </div>  
                                        </div>


                                        <div class="col-md-2 pull-left">
                                            <canvas id="idgrafico2" >
                                                <script>
                                                    var data = [
                                                        {
                                                            value: 40,
                                                            color: "#666666"
                                                        },
                                                        {
                                                            value: 30,
                                                            color: "#FFFF99"
                                                        },
                                                    ];
                                                    var canvas = document.getElementById("idgrafico2");
                                                    var ctx = canvas.getContext("2d");
                                                    new Chart(ctx).Pie(data);
                                                </script>
                                            </canvas>
                                            <label class="col-ms-12 pull-right">Missões</label>
                                        </div>

                                       <div class="col-md-2 pull-left">
                                        <div class="canvas-container4 col-md-6 pull-left"  >
                                            <canvas id="idgrafico4" >
                                                <script>
                                                    var data = [
                                                        {
                                                            value: 40,
                                                            color: "#666666"
                                                        },
                                                        {
                                                            value: 30,
                                                            color: "#FFFF99"
                                                        },
                                                    ];
                                                    var canvas = document.getElementById("idgrafico4");
                                                    var ctx = canvas.getContext("2d");
                                                    new Chart(ctx).Pie(data);
                                                </script>
                                            </canvas>
                                            <label class="col-lg-1 pull-right canvasps" style="border: 1px solid red">Programas</label>
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
                            </div>

                            <div class="tab-pane" id="tab4">
                                <p>Estou na seção 4</p>
                            </div>

                            <div class="tab-pane" id="tab5">
                                <p>Estou na seção 5</p>
                            </div>

                            <div class="tab-pane" id="tab6">
                                <p>Estou na seção 6</p>
                            </div>

                            <div class="tab-pane" id="tab7">
                                <p>Estou na seção 7</p>
                            </div>
                            <!--Termina aqui o teste 1 para ver se funciona a caixa de lado-->
                        </div>							
                    </div>	 
                </div>	 

                <!-- rodape -->

            </div>
        </div>

    </body>
</html>

<!--FIM container-->