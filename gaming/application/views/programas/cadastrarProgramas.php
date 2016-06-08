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
        <link href="../../assets/css/cadastrar-programas.css" rel="stylesheet"/>

        <script src="../../assets/js/jquery.min.js"></script> 
        <script src="../../assets/js/bootstrap.min.js"></script> 
        <script src="../../assets/js/views/cadastrarPrograma.js"></script> 
        
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
        <!--cabeçãlho-->

         <!--antepenultimo passo-->
        <?php 
         print_r($objetos);
        ?>
         <!--antepenultimo passo para mostrar na tela se funciona-->
         
        <form  method="post" action="http://localhost:9090/gaming/index.php/programas/createPrograma">
        
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
                        <a class= "navbar-brand" href="#"><strong>Cadastrar Programas</strong></a>
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
                                <label for="inputEmail" class="col-md-2 control-label">Programa</label>
                                <div class="col-md-8 pull-right">
                                    <input type="text" name="nome" id="nome" class="form-control "  placeholder="">
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
                                    <input  type="date"  id="datainicio" name="datainicio" value=" " class= "textbox70"/>
                                    
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
                                    <input type="text" id="horainicio" name="horainicio" class="form-control" placeholder="00:00">
                                    <div class="col-md-4 textpos1">
                                        <p>ás</p>
                                    </div>
                                </div>

                                <div class="col-md-2 mudar">
                                    <input type="text" id="horatermino" name="horatermino" class="form-control " placeholder="00:00"> 
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--FIM Linha da Agência -->

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Objetivo</label>
                                <div class="col-md-8 pull-right">
                                    <input type="text" id="objetivo" name="objetivo" class="form-control " placeholder="">
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Local/Mapa</label>
                                <div class="col-md-8 pull-right">
                                    <input type="text" id="localmapa" name="localmapa" class="form-control " placeholder="">
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-10 ">
                        <label for="inputEmail" class="col-md-2 control-label"></label>
                        <div class="col-md-4 ">
                            <a href="#" class="ico-search">Link para imagem/mapa</a>
                        </div>
                    </div>
                    <!--Aqui temian a primeira parte da tela ,a parte brancaaaaaaaaa-->

                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">
                            <label for="inputEmail" class="col-md-2 control-label">Participantes</label>
                            <div class = "checbox checboxcontainer col-md-5 pull-rightl">
                                <input type="radio" id="participantes" value="participantes"> Definir pelas Equipes existentes
                            </div> 
                            <div class="col-md-4 ">
                                <a href="#" class="ico-search"> Participantes definidos.Clique para alterar</a>
                            </div> 
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5">
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer" >
                                    <input type="radio" id="participantes" value="participantes"> Definir manualmente
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">
                            <label for="inputEmail" class="col-md-2 control-label">Times</label>
                            
                            <div class = "checbox checboxcontainer col-md-5 pull-rightl">
                                <input type="radio"  value="nome"> Sem Time (individual)
                            </div> 
                            
                            <div class = "checbox checboxcontainer col-md-10 pull-rightl">
                                <input type="radio"  value="nome"> Times baseados nas Equipes existentes
                            </div> 

                            <div class = "checbox checboxcontainer col-md-10 pull-right">
                                <input type="radio"  value="nome">  Jogadores escolhem os Times
                            </div> 

                            <div class = "checbox checboxcontainer col-md-10 pull-right ">
                                <input type="radio"  value="nome">Sistemas escolhe os Times
                                <div class="col-md-8 pull-right" >
                                    <input type="text" name="qtd." size="4" maxlength="8" id="Qtd." placeholder=""> Jogadores por Time
                                    <div class="col-md-6 pull-right" >
                                        <div class="col-md-8 pull-left">
                                            <form action="demo_form.asp"> Nome Times (prefixo)
                                            </form>
                                        </div>
                                            <div class="col-md-2 pull-eft">
                                            <input type="text" name="qtd." size="7" maxlength="8" id="Qtd." placeholder=""> </div>
                                    </div>
                                </div>
                            </div> 
                            
                        </div>
                    </div>

                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">
                            <label for="inputEmail" class="col-md-2 control-label">Personagens</label>
                            <div class = "checbox checboxcontainer col-md-2 pull-rightl">
                                <input type="radio"  value="nome"> Não (único)
                            </div> 

                            <div class = "checbox checboxcontainer col-md-3 pull-rightl">
                                <input type="radio"  value="nome"> Sim
                            </div> 

                            <div class="col-md-4 ">
                                <a href="#" class="ico-search"> Participantes definidos.Clique para alterar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-10">
                            <div class="col-md-5 pull-right ">
                                <div class = "checbox checboxcontainer" >
                                    <input type="checkbox"  value="nome"> Jogadores escolhem os Personagens a cada rodada
                                </div> 
                            </div>
                        </div>
                    </div>

                    <!--Aqui temina a segunda parte da tela ,a parte cinzaaaaa-->

                    <div class="col-md-5"> 
                        <div class="col-sm-6 col-lg-12" ><br/>
                            <label for="inputEmail" class="col-md-2 control-label">Rodadas</label>
                            <div class="col-md-8 pull-right">
                                <input type="number" name="rodadasvezes" id="rodadasvezes" size="2" maxlength="8" placeholder="  02">vezes (deixe em branco era indefinido)
                            </div> 
                        </div>
                    </div>

                    <div class="col-md-5"> 
                        <div class="col-sm-6 col-lg-12"><br/>
                            <div class = "checbox checboxcontainer col-md-12">
                                <input type="radio" id="rodadasdiferentes" name="rodadasdiferentes" value="0"> Rodadas diferentes (default são rodadas recorrentes/iguais)
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" > <br/>
                        <div class="col-sm-6 col-lg-10">
                            <div class="col-md-10 pull-right">
                                
                                <div class = "checbox checboxcontainer col-md-5" >
                                    <input type="radio" id="automaticarodada" name="automaticarodada" value="0">  Rodada automática
                                </div>

                                <div class="col-md-1 ">
                                    <form action="demo_form.asp"> a cada 
                                    </form>
                                </div>
                                
                                <div class="col-md-4">  
                                    <input type="number" name="intervalo" id="intervalo" size="7" maxlength="8" placeholder=""> minutos (intervalo)
                                </div>
                                
                                <div class = "checbox checboxcontainer col-md-5">
                                    <input type="radio" id="gestorrodada"  value="1" name="gestorrodada">  Rodada disparada pelo Gestor
                                </div> 

                                <div class = "checbox checboxcontainer col-md-5">
                                    <select class="col-md-9" id="gestor_id" name="gestor_id">
                                        <option value="1">Selecione o Gestor</option>
                                        <option value="2">Viagem</option>
                                        <option value="3">Eletrodomésticos</option>
                                        <option value="4">Eletroeletrónico</option>
                                        <option value="5">Celular/Smartphone</option>
                                        <option value="6">Computador/Tablet</option>
                                        <option value="7">Show/Entretenimento</option>
                                        <option value="8">Comida/Gastronomia</option>
                                        <option value="9">Bebida/Enogastronomia</option>
                                    </select>
                                </div> 
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12"> 
                        <div class="col-sm-6 col-lg-10" >
                            <div class="col-md-10 pull-right" >
                                <div class = "checbox checboxcontainer col-md-5" >
                                    <input type="radio" id="facilitadorrodada" name="facilitadorrodada" value="facilitadorrodada" checked>  Rodada disparada pelo Facilitador
                                </div> 

                                <div class = "checbox checboxcontainer col-md-5" >
                                    <select id="facilitador_id" name="facilitador_id" class="col-md-9">
                                        <option value="1">Selecione o Facilitador</option>
                                        <option value="2">Viagem</option>
                                        <option value="3">Eletrodomésticos</option>
                                        <option value="4">Eletroeletrónico</option>
                                        <option value="5">Celular/Smartphone</option>
                                        <option value="6">Computador/Tablet</option>
                                        <option value="7">Show/Entretenimento</option>
                                        <option value="8">Comida/Gastronomia</option>
                                        <option value="9">Bebida/Enogastronomia</option>
                                    </select>
                                </div> 
                            </div>

                        </div>
                    </div>

                    <!--Aqui ira começar a parte toda do paineeeeeel-->

                    <div class="col-md-12" >
                        <div class="col-sm-6 col-lg-10" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control1-labe"></label>
                                <div class="col-md-9 pull- ">

                                    <!--aqui começa o paineeeeeeeeeeeeeeeeeeeeeel -->
                                    <div id="playlistTable" class="panel panel-default">
                                        <div class="panel-heading">Rodada #1 (ou Rodada única/recorrente)</div>
                                        <div class="panel-body">
                                            <!--aqui termina a primeira parte do paineeeeel -->


                                            <div class="col-md-12">
                                                <div class="col-sm-6 col-lg-9" >
                                                    <div class="form-group">
                                                        <label for="inputEmail" class="col-md-3 control-label">Objetivo</label>
                                                        <div class="col-md-9 pull-right">
                                                            <input type="email" class="form-control " id="inputEmail" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="col-sm-6 col-lg-9" >
                                                    <div class="form-group">
                                                        <label for="inputEmail" class="col-md-3 control-label">Pista/Dica</label>
                                                        <div class="col-md-9 pull-right">
                                                            <input type="email" class="form-control " id="inputEmail" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="col-sm-6 col-lg-9" >
                                                    <div class="form-group">
                                                        <label for="inputEmail" class="col-md-3 control-label">Imagem</label>
                                                        <div class="col-md-9 pull-right">
                                                            <a href="#" class="ico-search">clique aqui para importar outra imagem</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="col-sm-6 col-lg-9" >
                                                    <div class="form-group">
                                                        <label for="inputEmail" class="col-md-3 control-label">Tempo</label>
                                                        <div class="col-md-9 pull-right">
                                                            <input type="text" name="qtd." size="5" maxlength="8" id="Qtd." placeholder=""> segundos (deixe em branco para indefinido)
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="col-sm-6 col-lg-9" >
                                                    <div class = "checbox checboxcontainer col-md-5" >
                                                        <input type="radio"  value="nome" checked> Objetos específicos
                                                    </div> 
                                                </div>
                                            </div> 
                                            <!--Aqui começa a tabela dentro da Panel-->
                                            <div class="col-md-12">
                                                <div class="col-sm-6 col-lg-12" >
                                                    <div class="table-responsive">
                                                        <table class="tablesorter">
                                                            <thead>
                                                                
                                                                <tr>
                                                                    <th style="border-width: thin; border-style: solid; border-color: black;">Objetos</th>
                                                                    <th style="border-width: thin; border-style: solid; border-color: black;">Categorias</th>
                                                                    <th style="border-width: thin; border-style: solid; border-color: black;">Pontos</th>
                                                                    <th style="border-width: thin; border-style: solid; border-color: black;">Personagem</th>
                                                                    <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                                            </tr>
                                                           
                                                            
                                                            </thead>
                                                            <tbody>
                                                                
                                                            <?php foreach ($objetos as $objetos) {     
                                                                 ?> <!--penultimo passo, para exexutar tudo com o Foreach-->
                                                                     
                                                           <tr>
                                                             <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipe['objetos'];?></td>
                                                             <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipe['categoria'];?></td>
                                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipe['ponto'];?></td>
                                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipe['personagem'];?></td>
                                                            <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html" /> </center></td>
                                                          </tr>
                                                          
                                                           <?php }?> <!penultimo passo>
                                                           
                                                            </tbody>  
                                                        </table>
                                                    </div>
                                                </div>				<!--Aqui termina a tabela dentro da Panel-->

                                                <div class="col-md-12">
                                                    <div class="col-sm-6 col-lg-9" >
                                                        <div class = "checbox checboxcontainer col-md-5" >
                                                            <input type="radio"  value="nome" checked> Objetos aleatórios
                                                        </div> 
                                                        <div class="col-md-5">
                                                            <select class="col-md-12">
                                                                <option>Selecione a Categoria</option>
                                                                <option>Qualquer um da Equipe</option>
                                                                <option> < Personagem_1></option>
                                                            </select>
                                                        </div> 
                                                    </div>   
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="col-sm-6 col-lg-9" >
                                                        <div class="form-group">
                                                            <label for="inputEmail" class="col-md-3 control-label">Mensagem Parabéns</label>
                                                            <div class="col-md-9 pull-right">
                                                                <input type="email" class="form-control " id="inputEmail" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- começa a parte final do painel-->
                                        <table id="playlistTable" class="panel-footer" >
                                            <div class="panel-footer" >Etapa 2 (aparece se estiver selecionado "Rodadas diferentes")
                                            </div>
                                        </table>
                                    </div>
                                    <!--aqui termina o paineeeeeeeeeeeeeeeeeeeeeel -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Aqui termina apret toda do paineeeeeeeel-->

                    <div class="col-md-10">
                        <div class="col-sm-6 col-lg-12">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2"></label>
                                <label for="inputEmail" class="col-md-1">Pontuação</label>
                                <div class = "checbox checboxcontainer col-md-4">
                                    <div class="col-md-10 pull-right"> <input type="radio" id="pontuacao" name="pontuacao" value="1"> Acumula a cada rodada</div>
                                </div> 
                                <div class = "checbox checboxcontainer col-md-5">
                                    <div class="col-md-12 pull-right score"> <input type="checkbox" id="scoregeral" name="scoregeral" value="0">Não somar pontos ao score geral da Empresa</div>
                                </div> 
                            </div> 
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="col-sm-6 col-lg-12">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2"></label>
                                <label for="inputEmail" class="col-md-1"></label>
                                <div class = "checbox checboxcontainer col-md-4">
                                    <div class="col-md-10 pull-right"> <input type="radio" id="pontuacao" name="pontuacao" value="1"> Zera a cada rodada</div>
                                </div> 
                            </div> 
                        </div>
                    </div>
                    
                <!-- COmeça aqui a Parte final do da parte cinza-->
                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">
                            <label for="inputEmail" class="col-md-2 control-label">Premiação</label>
                            <div class = "checbox checboxcontainer col-md-2 pull-rightl">
                                <input type="checkbox"  value="" id="premiacaoindividual" name="premiacaoindividual" checked> Individual
                            </div> 

                            <div class="col-md-4 ">
                                <a href="#" class="ico-search"> Prêmios definidos.Clique aqui para alterar</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12"> 
                        <div class="col-sm-6 col-lg-10">
                            <label for="inputEmail" class="col-md-2 control-label"></label>
                            <div class = "checbox checboxcontainer col-md-2 pull-rightl">
                                <input type="checkbox" value="premiacaoequipe" name="premiacaoequipe" id="premiacaoequipe" checked> Equipe
                            </div> 
                            <div class="col-md-4 ">
                                <a href="#" class="ico-search"> Defenir prêmios</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12"> 
                        <div class="col-sm-6 col-lg-10">
                            <label for="inputEmail" class="col-md-2 control-label"></label>
                            <div class = "checbox checboxcontainer col-md-2 pull-rightl">
                                <input type="checkbox" id="premiacaotodos" name="premiacaotodos" value="premiacaotodos"> Todos
                            </div> 
                            <div class="col-md-4">
                                <select class="text-center" id="selecionepremio" name="selecionepremio">
                                    <option value="1">Selecione o prêmio</option>
                                    <option value="2">Qualquer um da Equipe</option>
                                    <option value="3"> < Personagem_1></option>
                                </select>
                            </div> 
                        </div>
                    </div>


                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Mensagem Parabéns</label>
                                <div class="col-md-8 pull-right">
                                    <input type="text" class="form-control " id="mensagemparabens" name="mensagemparabens" placeholder="">
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Pontos extras</label>
                                <div class="col-md-8 ">
                                     <input type="number" name="pontosextras" id="pontosextras"  size="10" maxlength="10" placeholder=" "> 
                                     
                                      <div class = "checbox checboxcontainer col-md-9  pull-right">
                                          <input type="checkbox" id="premiaequipes" name="premiaequipes" value="nome"> Premia as Equipes que o usuário/jogador faz parte
                                      </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!--codigo faz parte da chamada para o código (cadastrarprograma.js)-->
             <input type="hidden" name="status" id="status"/>
            <!--fim do codigo da chamada de java script-->

            <!-- rodape -->
            <div>
                <button type="button" class="btn btn-primary pull-right btnazul">Salvar e criar Reconhecimentos</button>
                <button type="button" class="btn btn-primary pull-right btnazul">Salvar e enviar convites</button>
                <button type="submit" class="btn btn-deafult pull-right btnazul">Salvar</button>
                <button typr="button" class="btn btn-deafult pull-right">Cancelar</button>
            </div> 

        </div>
</form>
    </body>
</html>

<!--FIM container-->