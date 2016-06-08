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
        <link href="../../assets/css/cadastrar-acoes.css" rel="stylesheet"/>
        
       
        <script src="../../assets/js/jquery.min.js"></script> 
        <script src="../../assets/js/bootstrap.min.js"></script> 
        <script src="../../assets/js/views/cadastrarAcoes.js"></script> 

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
          <!--antepenultimo passo para mostrar na tela se funciona-->
        <form  method="post" action="http://localhost:9090/gaming/index.php/acoes/createAcoes" >
        
         
        <!--cabeçãlho-->

        <div class="col-md-12 header-style">
            <nav class="navbar navbar-default nab-branco">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header ">
                        <a class="navbar-brand" href="#"><strong>Game APP |</strong>Company Console</a>
                    </div>

                    <div class= 'col-md-2 pull-right'>
                        <a class= "navbar-brand" href ="#"><small><small>Nome da Empresa</small></small><br/><small><small>Nome do Administrador</small></small></a>
                    </div>

                    <div class= 'col-md-5 pull-right'>
                        <a class= "navbar-brand" href ="#"><strong>Cadastrar Ações</strong></a>
                    </div>
                </div>
            </nav>
        </div>

        <!-- FIM cabeçãlho-->

        <!--Menu-->
        <div class="col-md-2 pull-left div-vermelha menu-style ">

            <ul class="nav nav-pills nav-stacked">
                <button type= "button" class= "btn btn-default btn-lg btn-block" > Voltar </button>

        </div>
        <!--FIM menu-->

        <!--container-->
        <div class="col-md-10  container-style ">
            <div id="page-content" class="margembranca "> 

                <div class="col-md-12" >

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Ação</label>
                                <div class="col-md-8 pull-right">
                                    <input type="text" id="acoes" name="acoes" class="form-control " placeholder="">
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>

                 <div class="celular col-md-3 pull-right">
                    <div class="onoffswitch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked="true" >
                        <label class="onoffswitch-label" for="myonoffswitch">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div> 
                  </div>
                    
                    <!--Linha da Agência -->
                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-10">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Vigência</label>
                                <div class="col-md-3">
                                    <input type="date"  id="datainicio" name="datainicio" value="" class= "textbox70"/>

                                    <div class="col-md-1 textpos">
                                        <p>a</p>
                                    </div>
                                </div>

                                <div class="col-md-3 ">
                                    <input type="date"  id="datatermino" name="datatermino" value=" " class= "textbox70"/>
                                    <div class="col-md-1 textpos">
                                        <p>das</p>
                                    </div>
                                </div>

                                <div class="col-md-2 ">
                                    <input type="text" class="form-control " id="horainicio" name="horainicio" placeholder="00:00">
                                    <div class="col-md-4 textpos1">
                                        <p>ás</p>
                                    </div>
                                </div>

                                <div class="col-md-2 mudar">
                                    <input type="text" class="form-control " id="horatermino" name="horatermino" placeholder="00:00"> 
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--FIM Linha da Agência -->

                    <div class="col-md-12" >
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control1-labe">Objetos</label>
                                <div class="col-md-8 pull-right ">
                                    <div class = "checbox checboxcontainer" >
                                        <input type="radio" id="selecobjetos" name="selecobjetos" value="1"> Selecione o(s) Objetos(s)
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-10 " >
                        <div id="table-responsive" class="col-lg-10 pull-right tabelap">

                            <table class="tablesorter">
                                <thead>
                                    <tr>
                                        <th style="border-width: thin; border-style: solid; border-color: black;">Objeto</th>
                                        <th style="border-width: thin; border-style: solid; border-color: black;">Categoria</th>
                                        <th style="border-width: thin; border-style: solid; border-color: black;"><center>Obrig.</center></th>
                                <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php foreach ($objetos as $objetos) {     
                 ?> <!--penultimo passo, para exexutar tudo com o Foreach-->
                 
                                    <tr>
                                        <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipe['objetos'];?></td>
                                        <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipe['categoria'];?></td>
                                        <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/> </center></td>
                                        <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"checked /> </center></td>
                                </tr
                                <?php }?> <!penultimo passo>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5">
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer" >
                                    <input type="radio" id="objetocategoria" name="objetocategoria" value="1"> Objetos aleatórios pela Categoria
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <select class="col-md-5" id="seleccategoria" name="seleccategoria">
                                <option value="1">Selecione o Período para filtrar</option>
                                <option value="2">Viagem</option>
                                <option value="3">Eletrodomésticos</option>
                                <option value="4">Eletroeletrónico</option>
                                <option value="5">Celular/Smartphone</option>
                                <option value="6">Computador/Tablet</option>
                                <option vlaue="7">Show/Entretenimento</option>
                                <option vlaue="8">Comida/Gastronomia</option>
                                <option value="9">Bebida/Enogastronomia</option>
                            </select>
                        </div>
                    </div>

                    <!-- Linha do checkbox com opções-->
                    <div class="col-md-12" > 
                        <div class="col-sm-6 col-lg-5" >
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer"> 
                                    <input type="radio" id="modspacks" name="modspacks" value="1"> MODs/Packs<br/>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <select class="col-md-5" id="selecmod" name="selecmod">
                                <option value="1">Selecione o MOD/Packs</option>
                                <option value="2">Viagem</option>
                                <option value="3">Eletrodomésticos</option>
                                <option value="4">Eletroeletrónico</option>
                                <option value="5">Celular/Smartphone</option>
                                <option value="6">Computador/Tablet</option>
                                <option value="7">Show/Entretenimento</option>
                                <option value="8">Comida/Gastronomia</option>
                                <option value="9">Bebida/Enogastronomia</option><br/>
                            </select> 
                        </div> 
                    </div>       
                    <!--FIM da linha do checkbox com opções--> 

                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Qtd.vezes</label>
                                <div class="col-md-4">
                                    <input type="number" id="quantidadevezes" name="quantidadevezes" size="4" maxlength="8"  placeholder=""/> por Jogador,limitado a um total de
                                </div>
                                <div class="col-md-4">
                                    <input type="number" id="quantidadevezes" name="totalvezes" size="4" maxlength="8"  placeholder=""/> vezes
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Frequencia</label>
                                <div class="col-md-4">
                                    <input type="number" id="frequecia" name="frequencia" size="4" maxlength="8"  placeholder=""> vez a cada
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="cadahora" name="cadahora" size="4" maxlength="8"  placeholder=""> hora
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Para quem</label>
                                <div class = "checbox checboxcontainer">
                                    <input type="radio" id="todousuario" name="todousuario"  value="1"> Todos os Usuários/Jogadores cadastrado
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5">
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer" >
                                    <input type="radio" id="somenteequipe" name="somenteequipe" value="1">  Somente a(s) Equipes(s)
                                </div> 
                            </div>
                        </div>
                    </div>


                    <div class="col-md-10 " >
                        <div id="table-responsive" class="col-lg-10 pull-right tabelap">
                            <table class="tablesorter">
                                <thead>
                                    <tr>
                                        <th style="border-width: thin; border-style: solid; border-color: black;">Selecionar  a Equipe</th>
                                        <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php foreach ($equipes as $equipe) {     
                 ?> <!--penultimo passo, para exexutar tudo com o Foreach-->
                                    <tr>
                                        <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipe['descricao'];?></td>
                                        <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/checked> </center></td>

                                </tr>

                         <?php }?> <!penultimo passo>
                               
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-12">
                            <div class="col-md-10 pull-right ">
                                <div class = "checbox checboxcontainer" >
                                    <input type="checkbox"  id="obrigatorio" name="obrigatorio" value="1">  Obrigatório todos os membros da Equipe finalizarem/participarem
                                </div> 
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5">
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer" >
                                    <input type="radio" id="definirmanualmente" name="definirmanualmente" value="1">  Definir manualmente
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-6" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Dica de tela</label>
                                <div class="col-md-8 pull-right">
                                    <input type="text" id="dicatela" name="dicatela" class="form-control" placeholder="">
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Texto p/Log</label>
                                <div class="col-md-3">
                                    <form action="demo_form.asp">O usuário/jogador"Fulano"
                                    </form>
                                </div>
                                <div class="col-md-4 verbocx">
                                    <input type="text" id="textlog" name="textlog" size="15" maxlength="8" placeholder="entre com um verbo"> a "Ação"
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            
            <!--codigo faz parte da chamada para o código (cadastrarprograma.js)-->
             <input type="hidden" name="status" id="status" status="checked" />
            <!--fim do codigo da chamada de java script-->

            <!-- rodape -->
            <div>
                <button type="submit" class="btn btn-primary pull-right btnazul">Salvar e criar Ação</button>
                <button class="btn btn-deafult pull-right btnazul">Salvar</button>
                <button class="btn btn-deafult pull-right">Cancelar</button>
            </div> 

        </div>
 
    </form>
</body>
</html>

<!--FIM container-->