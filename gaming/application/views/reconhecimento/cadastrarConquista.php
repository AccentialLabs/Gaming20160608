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
        <link href="../../assets/css/cadastrar-reconhecimento-conquistas.css" rel="stylesheet"/>

        <script src="../../assets/js/jquery.min.js"></script> 
        <script src="../../assets/js/bootstrap.min.js"></script> 
        <script src="../../assets/js/views/cadastrarConquista.js"></script> 
        
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
         print_r($tiporeconhecimento);
        ?>
              
<form method="post" action="http://localhost:9090/gaming/index.php/reconhecimento/createConquista">      
  
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
                        <a class= "navbar-brand" href ="#"><strong>Cadastrar Reconhecimentos/Conquista</strong></a>
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

                    <div class="col-sm-6 col-lg-7" >
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Tipo</label>
                            <div class="col-md-9 pull-right">
                                <select class="col-md-" id="tipo" name="tipo">
                                    <option value="1">Selecione o Período para filtrar</option>
                                    <option value="2">Viagem</option>
                                    <option value="3">Eletrodomésticos</option>
                                    <option value="3">Eletroeletrónico</option>
                                    <option value="4">Celular/Smartphone</option>
                                    <option value="5">Computador/Tablet</option>
                                    <option value="6">Show/Entretenimento</option>
                                    <option value="7">Comida/Gastronomia</option>
                                    <option value="8">Bebida/Enogastronomia</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 pull-right celular" >
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                            <label class="onoffswitch-label" for="myonoffswitch">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span> 
                            </label>
                        </div>
                    </div> 

                    <div class="col-sm-6 col-lg-7" > <br/>
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Reconhecimento</br>/Conquista</label>
                            <div class="col-md-9 pull-right">
                                <input type="text" class="form-control " value=" " id="conquista" name="conquista" placeholder="">
                                <br/>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-7" > <br/>
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-3 control-label">Modo de aferiação</label>
                            <div class="col-md-4 ">
                                <input type="radio" id="modoafericao" name="modoafericao" value="nome"> Por Pontos
                            </div>


                            <div class="col-md-5">
                                <div class="col-sm-6 col-lg-12">
                                    <div class="form-group">

                                        <div class="col-md-7">
                                            <form action="demo_form.asp">Quantidade de Pontos
                                             </form>
                                        </div>
                                        <div class="col-md-2 ">
                                            <input type="number"id="quantidadeponto" name="quantidadeponto"  size="15" maxlength="8"  placeholder=""> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-9 pull-right">
                                <input type="radio" id="modoafericao" name="modoafericao" value="1"> Por Ações(não sequencias)
                            </div>
                        </div>
                    </div>



                    <div class="col-md-10 " >
                        <div id="table-responsive" class="col-lg-10 pull-right tabelap">

                            <table class="tablesorter">
                                <thead>
                                    <tr>
                                        <th style="border-width: thin; border-style: solid; border-color: black;">Selecione as Ações</th>		
                                        <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html" /> </center></td>
                                </tr>
                                </thead>
                                <tbody>
                               
                              
                                    
                                <tr>
                                   <td style="border-width: thin; border-style: solid; border-color: black;"></td>	
                                   <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html" checked /> </center></td>			
                                </tr>
                               
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Linha do checkbox com opções-->

                    <div class="col-sm-6 col-lg-5" >
                        <div class="col-md-8 pull-right ">
                            <div class = "checbox checboxcontainer"> 
                                <input type="radio" id="modoafericao" name="modoafericao"  value="3"> Por Missão<br/>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <select class="col-md-5">
                            <option>Selecione a Missão</option>
                            <option>Viagem</option>
                            <option>Eletrodomésticos</option>
                            <option>Eletroeletrónico</option>
                            <option>Celular/Smartphone</option>
                            <option>Computador/Tablet</option>
                            <option>Show/Entretenimento</option>
                            <option>Comida/Gastronomia</option>
                            <option>Bebida/Enogastronomia</option>
                        </select> 
                    </div> 
                    
                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5" >
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer"> 
                                    <input type="radio" id="modoafericao" name="modoafericao"  value="4"> Por Programa<br/>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <select class="col-md-5">
                                <option>Selecione a Missão</option>
                                <option>Viagem</option>
                                <option>Eletrodomésticos</option>
                                <option>Eletroeletrónico</option>
                                <option>Celular/Smartphone</option>
                                <option>Computador/Tablet</option>
                                <option>Show/Entretenimento</option>
                                <option>Comida/Gastronomia</option>
                                <option>Bebida/Enogastronomia</option>
                            </select> 
                        </div> 
                    </div>

                    <div class="col-sm-6 col-lg-5" >
                        <div class="col-md-8 pull-right ">
                            <div class = "checbox checboxcontainer"> 
                                <input type="radio" id="modoafericao" name="modoafericao"  value="nome"> Por MOD/PACK<br/>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <select class="col-md-5">
                            <option>Selecione a Missão</option>
                            <option>Viagem</option>
                            <option>Eletrodomésticos</option>
                            <option>Eletroeletrónico</option>
                            <option>Celular/Smartphone</option>
                            <option>Computador/Tablet</option>
                            <option>Show/Entretenimento</option>
                            <option>Comida/Gastronomia</option>
                            <option>Bebida/Enogastronomia</option>
                        </select> 
                    </div> 

                    <!--FIM da linha do checkbox com opções--> 

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-7" > <br/>
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Sobre o</br>/reconhecimento</label>
                                <div class="col-md-9 pull-right">
                                    <input type="text" class="form-control " id="reconhecimento" name="reconhecimento" placeholder="">
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="col-sm-6 col-lg-10 ">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Bagde/Imagem</label>
                                <div class="col-md-6 ">
                                    <a href="#" class="ico-search">clique aqui para importar outra imagem</a>
                                </div>

                                <div class = "col-md-3" > 
                                    <input type="checkbox" id="expira" name="expira"  value="0"> Reconhecimento expira em<br/>
                                </div> 

                                <div class="col-md-1">
                                    <input name="nascimento" type="date"  id="month" value=" " class= "textbox70"/>
                                </div>   
                            </div>
                        </div>
                    </div>   

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-7" > <br/>
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Mensagem</br>Parabéns</label>
                                <div class="col-md-9 pull-right">
                                    <input type="text" class="form-control " id="parabens" name="parabens" placeholder="">
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="col-sm-6 col-lg-10 ">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-3 control-label">Conteudo destravado</label>
                                <div class="col-md-6 ">
                                    <a href="#" class="ico-search">clique aqui para importar outra imagem</a>
                                </div>

                            </div>
                        </div>
                    </div> 

                    <div class="col-sm-6 col-lg-7" ><br/>
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Premiação</label>
                            <div class="col-md-9 pull-right">
                                <select class="col-md-6" id="premiacao" name="premiacao">
                                    <option value="1">Selecione o prêmio</option>
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
                    
                    <div class="col-md-12"> <br/>
                        <div class="col-sm-6 col-lg-10">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Pontos extras</label>
                                <div class="col-md-2">
                               <input type="text" name="pontosextras" id="pontosextras" size="8" maxlength="8"  placeholder="">
                                    </div>
                                <div class = "col-md-6"> 
                                    <input type="checkbox" id="pontuaequipe" name="pontuaequipe" value="nome"> Pontua também a(s) Equipes(s) que o usuário/jogador faz parte<br/>
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
                                <div class="col-md-5 verbocx">
                                    <input type="text" name="textologin" id="textologin" size="15" maxlength="8"  placeholder="entre com um verbo"> "Reconhecimento/Conquistas"
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>

         <!--esse input serve para a declaração do onoffswitch do status-->
           <input type="hidden" name="status" id="status"/>
               <!--Fim da declaração do input para a declaração do onoffswitch do status-->
        
        <!-- rodape -->
        <div>
            <button type="submit" class="btn btn-primary pull-right btnazul">Salvar</button>
            <button class="btn btn-deafult pull-right">Cancelar</button>
        </div> 
        
</form>
</body>
</html>

<!--FIM container-->