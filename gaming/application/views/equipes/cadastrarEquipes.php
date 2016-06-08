<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>

        <!--configurações do Gantt-->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="tablesorter/css/blue/style.css">
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/css/jogadores-usuarios.css" rel="stylesheet">
        <link href="../../assets/css/cadastrar-equipes.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="../../assets/js/cadastrar-equipes.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
        <script src="../../assets/js/jquery.fn.gantt.js"></script>

        <!--fim das configurações do Gantt-->

        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet"/>
        <!--<link href="css/configuracoes4.css" rel="stylesheet" />   retirei por confiurar a nav-brand---> 
        <link href="http://localhost:9090/game/css/cadastrar-equipes.css" rel="stylesheet"/>
        <script src="../../assets/js/cadastrar-equipes2.js"></script> 

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
        <!-- TERMINA AQUI  A TABELA NO HEAD-->

    </head>
    <body>
        
         <?php 
        print_r($equipes);
        ?>
        
        <!--cabeçãlho-->

        <div class="col-md-12 header-style">
            <nav class="navbar navbar-default nab-branco">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"><strong>Game APP |</strong>Company Console</a>
                    </div>

                    <div class= 'col-md-2 pull-right'>
                        <a class= "navbar-brand" href ="#"><small><small>Nome da Empresa</small></small><br/><small><small>Nome do Administrador</small></small></a>
                    </div>

                    <div class= 'col-md-5 pull-right'>
                        <a class= "navbar-brand" href ="#"><strong>Cadastrar Equipes</strong></a>
                    </div>
                </div>
            </nav>
        </div>

        <!-- FIM cabeçãlho-->

        <!--Menu-->
        <div class="col-md-2 pull-left div-vermelha menu-style ">

            <ul class="nav nav-pills nav-stacked">
                <button type= "button" class= "btn btn-default btn-lg btn-block" > Voltar </button>
            </ul>

        </div>
        <!--FIM menu-->

        <!--container-->
        <div class="col-md-10  container-style">
            <div id="page-content" class="margembranca"> 

                <div class="col-md-12" >

                    <div  class="col-md-12">

                        <div class = "checbox checboxcontainer">
                            <label><input type="checkbox"  VALUE="" checked> Campo do Cadastro </label>
                        </div> 

                        <div class="col-md-2 checboxx " >

                            <div class = "checbox checboxcontainer">
                                <label><input type="checkbox"  VALUE="" checked> Cargo </label>
                            </div> 

                            <div class = "checbox checboxcontainer">
                                <label><input type="checkbox"  VALUE="" checked> Departamento</label>
                            </div> 
                            <div class = "checbox disabled checboxcontainer">
                                <label><input type="checkbox"  VALUE="" checked> Unidade</label>
                            </div> 

                        </div>


                        <div  class="col-md-3 " >

                            <div class = "checbox checboxcontainer">
                                <label><input type="checkbox"  VALUE="" checked> Cidade </label>
                            </div>  
                            <div class = "checbox checboxcontainer">
                                <label><input type="checkbox"  VALUE="" checked> Estado</label>
                            </div> 
                            <div class = "checbox disabled checboxcontainer">
                                <label><input type="checkbox"  VALUE="" checked > País</label>
                            </div> 
                        </div>

                    </div>

                    <!--primeiro radiobox-->
                    <div class="col-sm-6 col-lg-7" >
                        <div class="col-md-5 ">
                            <label>
                                <input type="radio" name="todos" value="equipes"> 
                                Aleatório
                            </label>
                        </div>
                    </div>
                    <!--Fim doorimeiro radiobox-->

                    <div class="col-md-12" >
                        <div class="col-sm-1 col-lg-5"  >
                            <div class="col-md-7">
                                <form action="demo_form.asp">  Qtd.Equipes   
                                    <input class="input-mini" type="text">
                                </form>                          
                            </div>
                        </div>

                        <div class="col-sm-1 col-lg-7" >
                            <div class="col-md-7 " >
                                <form action="demo_form.asp"> Nome das Equipes (prefixo)
                                    <input class="input-mini pull-right" type="text"style="border: 1px solid blue;">  
                                </form> 
                            </div>

                            <div class="col-sm-5 col-lg-5 pull-right" >
                                <div class="col-md-1 " >
                                    <form action="demo_form.asp"> +Sequencial
                                    </form> 
                                    <br/>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--segundo radiobox-->
                    <div class="col-sm-6 col-lg-6" >
                        <div class="col-md-5 ">
                            <label>
                                <input type="radio" checked name="todos" value="equipes"> 
                                Manual
                            </label>
                        </div>
                    </div>
                    <!--Fim dosegundo radiobox-->




                    <div  class="col-md-12 parabaixotab">	<!--esse aqui muda a lagura da tabela toda-->														
                        <div class="tabbable tabs-left">  

                            <div class="col-md-10"> <!--esse aqui muda a lagura de dentro da tabela-->
                                <div class="tab-content">



                                    <!--aqui começa o restante da tabela-->
                                    <div id="Layer1" class="positiontab">
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
                                                    
                                            <?php foreach ($equipes as $equipes) {     
                                              ?> 
                                                    
                                              <tr>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipe['Marcos Pereira'];?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipe['Analista Financeiro'];?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipe['Finaceiro'];?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><center><?php echo $equipe['SP1'];?></center></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipe['São Paulo'];?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipe['SP'];?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipe['Brasil'];?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/></center></td>
                                              </tr>
                                             
                                            <?php }?> 
                                            
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!--aqui termina a tabela-->

                                    <!--ultima caixa-->
                                    <div class="col-sm-1 col-lg-9"  >
                                        <div class="col-md-7">
                                            <form action="demo_form.asp">   Nome da Equipe  
                                                <input class="input-mini" type="text">
                                            </form>                          
                                        </div>
                                    </div>
                                    <!-- Fim da ultima caixa -->

                                </div>
                            </div>
                        </div>							<!--Aqui termina a tab do lado esquerdo com tabela-->
                    </div>

                    <div class="gantt"></div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-6" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-3 control-label">Tema para Equipe</label>
                                <div class="col-md-8 pull-right">

                                    <select class="span1">
                                        <option>Selecione o Tema (MOD/Pack)</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- rodape -->
                <div>
                    <button type="button" class="btn btn-primary pull-right btnazul">Criar Equipes</button>
                    <button class="btn btn-deafult pull-right">Cancelar</button>
                </div> 

            </div>
        </div>

    </body>
</html>

<!--FIM container-->


