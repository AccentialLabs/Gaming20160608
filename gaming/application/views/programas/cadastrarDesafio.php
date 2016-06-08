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
        <link href="../../assets/css/cadastrar-desafio.css" rel="stylesheet"/>

        <script src="../../assets/js/jquery.min.js"></script> 
        <script src="../../assets/js/bootstrap.min.js"></script> 
        <script src="../../assets/js/views/cadastrarDesafio.js"></script> 
        
        
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
        
 <form  method="post" action="http://localhost:9090/gaming/index.php/programas/createDesafio" >
             
     <!--antepenultimo passo-->
        <?php 
            print_r($equipes);
        ?>
     
         <?php 
            print_r($objetos);
        ?>
     <!--antepenultimo passo para mostrar na tela se funciona-->
        
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
                        <a class= "navbar-brand" href ="#"><strong>Cadastrar Desafio</strong></a>
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
        <div class="col-md-10  container-style ">
            <div id="page-content" class="margembranca "> 

                <div class="col-md-12" >

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Desafio</label>
                                <div class="col-md-8 pull-right">
                                    <input type="text" id="nome" name="nome" class="form-control " placeholder="">
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 pull-right celular">
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
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
                                    <input type="date" name="nascimento" id="datainicio" value=" " class= "textbox70"/>

                                    <div class="col-md-1 textpos"> 
                                        <p>a</p> 
                                    </div>
                                </div>

                                <div class="col-md-3 ">
                                    <input name="datatermino" type="date"  id="datatermino" value=" " class= "textbox70"/>
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

                    <div class="col-sm-6 col-lg-10"> 
                        <label for="text" class="col-md-2 control1-labe" >Desafiante</label>
                        <div class="col-md-10" >
                            <div class = "checbox checboxcontainer" >
                                <input type="radio"  value="0" id="selecdesafianteequipe" name="selecdesafianteequipe" > Selecione o Desafiante
                                <div class="col-md-8 pull-right ">
                                    <select class="col-md-6" id="selecfuncionario" name="selecfuncionario">
                                        <option valie="1">Selecione o Funcionário</option>
                                        <option value="2">Viagem</option>
                                        <option value="3">Eletrodomésticos</option>
                                    </select>
                                </div>
                            </div>    
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-10"> 
                        <label for="inputEmail" class="col-md-2 control1-labe" ></label>
                        <div class="col-md-10" >
                            <div class = "checbox checboxcontainer" >
                                <input type="radio"  value="1" id="selecdesafianteequipe" name="selecdesafianteequipe"> Selecione a Equipe Desafiante
                                <div class="col-md-8 pull-right ">
                                    <select class="col-md-6" id="selecequipe" name="selecequipe">
                                        <option value="1">Selecione a Equipe</option>
                                        <option value="2">Viagem</option>
                                        <option value="3">Eletrodomésticos</option>
                                    </select>
                                </div>
                            </div>    
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-10"> <br/>
                        <label for="inputEmail" class="col-md-2 control1-labe" >Desafiados</label>
                        <div class="col-md-10" >
                            <div class = "checbox checboxcontainer" >
                                <input type="radio"  value="0" id="desafiantetodos" name="desafiantetodos"> Desafiante escolhe manualmente
                            </div>    
                            <div class = "checbox checboxcontainer" >
                                <input type="radio"  value="1" id="desafiantetodos" name="desafiantetodos"> Todos da(s) Equipes(s)
                            </div>   
                        </div>
                    </div>

                    <div class="col-md-10 " >
                        <div id="table-responsive" class="col-lg-10 pull-right tabelap">

                            <div class="table-responsive">
                                <table class="tablesorter">
                                    <thead>
                                        <tr>
                                            <th style="border-width: thin; border-style: solid; border-color: black;">Selecione a Equipe</th>
                                            <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                    </tr>
                                    </thead>
                                    <tbody>
            
                                <?php foreach ($equipes as $equipes) {     
                                    ?> <!--penultimo passo, para exexutar tudo com o Foreach-->
                                        
                                    <tr>
                                         <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipes['descricao'];?></td>
                                         <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html" checked /> </center></td>
                                    </tr>
                                <?php }?> <!penultimo passo>
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5">
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer" >
                                    <input type="radio" value="0" id="definirmanualmente" name="definirmanualmente"> Definir manualmente
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-9">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Objetos</label>
                                <div class="col-md-10 ">
                                    <div id="table-responsive" class="col-lg-12 pull-right tabelap">
                                        <table class="tablesorter">
                                            <thead>
                                                <tr>
                                                    <th style="border-width: thin; border-style: solid; border-color: black;">Objetos</th>
                                                    <th style="border-width: thin; border-style: solid; border-color: black;"><center>Categoria</center></th>
                                            <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <?php foreach ($objetos as $objetos) {     
                                    ?> <!--penultimo passo, para exexutar tudo com o Foreach-->
                                                
                                                <tr>
                                                    <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipes['perguntas'];?></td>
                                                    <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipes['categoria'];?></td>
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/checked> </center></td>
                                            </tr>
                                             <?php }?> <!penultimo passo>
                         
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Interação</label>
                                <div class="col-md-8 pull-right">
                                    <input type="radio"  value="0" name="identificada" name="identificada" checked> Identificada
                                </div>
                                <div class="col-md-8 pull-right">
                                    <input type="radio"  value="0" id="anonima" name="anonima"> Anônima(resposta através da web)
                                </div>
                                <div class="col-md-8 pull-right">
                                    <input type="radio"  value="0" id="desafiadoescolhe" name="desafiadoescolhe"> Deixar Desafiado(s) escolher(em)
                                </div>
                            </div>
                        </div>
                         
                            <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Obrigatório</label>
                                <div class="col-md-8 pull-right">
                                    <input type="radio"  value="0" id="obrigatorio" name="obrigatorio"> Sim
                                </div>
                                 <div class="col-md-8 pull-right">
                                     <input type="radio"  value="1" id="obrigatorio" name="obrigatorio"> Não
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                     <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label"> Pontuação </br>Extra para</br>Desafiante</label>
                                <div class="col-md-10 pull-right">
                                    <input type="checkbox"  value="0" id="" name="pontuacaoextra" checked> Recebe os pontos das respostas/Interações erradas
                                </div>
                                <div class="col-md-2">
                                     <form action="demo_form.asp">  Perde </form>
                                </div>
                                 <div class="col-md-7 verbocx">
                                     <input type="number" name="perde" size="10" maxlength="8" id="perde" placeholder=""> pontos se não receber nenhuma interação
                                </div>
                               
                                <div class="col-md-2">
                                     <form action="demo_form.asp">Ganha</form>
                                </div>
                                 <div class="col-md-7 verbocx">
                                     <input type="number" name="ganha" size="10" maxlength="8" id="ganha" placeholder=""> pontos se receber interação
                                </div>
                            </div>
                        </div> 

                      <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-3 control-label">Dica de tela</label>
                                <div class="col-md-8 pull-right">
                                    <input type="text" id="dicatela" name="dicatela" class="form-control " placeholder="">
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

                <!-- linha de codigo para o onoffswit-->
                  <input type="hidden" name="status" id="status"/>
                
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