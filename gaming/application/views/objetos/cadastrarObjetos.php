<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

//Inserçãode dados com as telas (cadastraobjetos_model;cadastraobjetoEntity,Controller Objetos)
  
<html>
    <head>

        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet"/>
        <!--<link href="css/configuracoes4.css" rel="stylesheet" />   retirei por confiurar a nav-brand---> 
        <link href="../../assets/css/cadastrar-objetos.css" rel="stylesheet"/>

        <script src="../../assets/js/jquery.min.js"></script> 
        <script src="../../assets/js/bootstrap.min.js"></script> 

        <script>
            (function ($) {

                AddTableRow = function () {
                    var newRow = $("<tr class='listas'>");
                    var cols = "";

                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';

                    newRow.append(cols);
                    $("#playlistTable").append(newRow);

                    return false;
                };
            })(jQuery);

        </script>
    </head>
    <body>
          <form  method="post" action="http://localhost:9090/gaming/index.php/objetos/createObjetos" >
      <!--antepenultimo passo-->
        <?php
        print_r($cadastraobjetos);
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
                        <a class= "navbar-brand" href ="#"><strong>Cadastrar Objetos</strong></a>
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
                        <label for="inputEmail" class="col-md-2 control-label">Categoria</label>
                        <div class="col-sm-6 col-lg-5" >
                            <div class="col-md-10 pull-right">
                                <select class="col-md-12" id="categoria" name="categoria">
                                    <option value="1">Selecione a Categoria</option>
                                    <option value="2">Viagem</option>
                                    <option value="3">Eletrodomésticos</option>
                                    <option value="4">Eletroeletrónico</option>
                                    <option value="5">Celular/Smartphone</option>
                                    <option value="6">Computador/Tablet</option>
                                    <option value="7">Show/Entretenimento</option>
                                    <option value="8">Comida/Gastronomia</option>
                                    <option value="9">Bebida/Enogastronomia</option>
                                </select> <br/>
                                <br/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Pergunta</label>
                                <div class="col-md-8 pull-right">
                                    <input type="text" id="pergunta" name="pergunta" class="form-control "placeholder="">
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12" >
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control1-labe">Resposta</label>
                                <div class="col-md-8 pull-right ">
                                    <div class = "checbox checboxcontainer" >
                                        <input type="radio" id="respdescritiva" name="respdescritiva" value="1"> Descritiva
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12" >
                        <div class="col-sm-6 col-lg-7" >
                            <div class="form-group">
                                <div class="col-md-9 pull-right ">
                                    <form action="demo_form.asp"> Qtd.min.caracteres 
                                        <input type="number" id="qtdcaracteres" name="qtdcaracteres" size="4" maxlength="8" placeholder=""> Deixe em branco se não houver mínimo
                                    </form>
                                    <div class="col-md-3">
                                        <form action="demo_form.asp"> Pontos
                                        </form>
                                    </div>
                                    <div class="espaco pull-left">
                                        <input type="number" id="qtdpontos" name="qtdpontos" size="4" maxlength="8"  placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="col-sm-6 col-lg-5" >
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer" >
                                    <input type="radio" id="alternativas" name="alternativas" value="1"> Alternativas
                                </div> 
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group" >
                            <div class="col-md-8 pull-right ">
                                <table id="playlistTable">
                            <thead>
                                 <tr>
                                    <th style="border-width: thin; border-style: solid; border-color: black;">#</th>
                                    <th style="border-width: thin; border-style: solid; border-color: black;">Resposta</th>
                                    <th style="border-width: thin; border-style: solid; border-color: black;"><center>Certa</center></th>
                                    <th style="border-width: thin; border-style: solid; border-color: black;">Ganha/Perde</th>
                                    <th style="border-width: thin; border-style: solid; border-color: black;">Pontos</th>
                                    <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/></center></th>
                                 </tr>
                            </thead>
                            
                            
                           <!--  <?php foreach ($cadastrarobjetos as $cadastrarobjetos) { 
                                ?>  -->
                            
                                <tbody>
                                 <tr>
                                    <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $jogador['pontos'];?></td>
                                    <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $jogador['resposta'];?></td>
                                    <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"checked /></center></th>
                                    <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $jogador['ganharperder'];?></td>
                                    <td style="border-width: thin; border-style: solid; border-color: black;"></td>
                                    <td style="border-width: thin; border-style: solid; border-color: black;"><center> <span  class = "glyphicon glyphicon-ban-circle"= oculto-ária "true"> </center></span> </td>
                                 </tr>  
                                 
                           <!--      <?php }?>      -->
                                 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!--esse aqui é o botãoque adiciona linhas-->
                    <div class="col-md-1 pull-right adicional">
                        <button onclick="AddTableRow()" type="button"><span class="glyphicon glyphicon-plus col-md-1" aria-hidden="true"></span></button>
                    </div>
                    <!--FIM esse aqui é o botãoque adiciona linhas-->

                    <div class="col-md-12" >
                        <div class="col-sm-6 col-lg-5">
                            <div class="form-group">
                                <div class="col-md-8 pull-right">
                                    <div class = "checbox checboxcontainer" >
                                        <input type="checkbox" id="respcorreta" name="respcorreta" value="1"> Mostrar resposta(s) correta(s)
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-8">
                            <div class="col-md-9 pull-right "> <!--posição do texto e da caixa de texto-->
                                <div class="col-md-4">
                                    <form action="demo_form.asp"> Numero de tentativas</form>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" id="numtentativas" name="numtentativas" size="4" maxlength="8" placeholder=""> Mínimo1 vez
                                </div>
                                <div class="col-md-4">
                                    <form action="demo_form.asp"> Limite de tempo (seg.)
                                    </form>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" id="limittempo" name="limittempo" size="4" maxlength="8" placeholder=""> Deixe em branco se não houver limite
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="col-sm-6 col-lg-5" >
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer" >
                                    <input type="radio" id="escala" name="escala"  value="1">  Escala
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-10 pull-right">
                            <div class="col-md-12 pull-right"> <!--posição do texto e da caixa de texto-->
                                <div class="col-md-2">
                                    <form action="demo_form.asp"> Valor inicial/min.</form>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" id="valueminimo" name="valueminimo" size="4" maxlength="8"  placeholder=""> 
                                </div>
                                <div class="col-md-1">
                                    <form action="demo_form.asp"> Incremento
                                    </form>
                                </div>
                                <div class="col-md-2 incremento">
                                    <input type="number" id="incremento" name="incremento" size="4" maxlength="8"  placeholder="">
                                </div>

                                <div class="col-md-3">
                                    <input type="number" id="valuefinal" name="valuefinal" size="4" maxlength="8" placeholder=""> Valor final/máx.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- começo do ponto médio -->
                    <div class=" col-md-12"> 
                        <div class="col-md-6 col-lg-10 pull-right">
                            <div class="col-md-8">
                                <input type="text" name="qtd." size="8" maxlength="8" id="qtd." placeholder=" Label incial"> 
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="qtd." size="8" maxlength="8" id="qtd." placeholder=" Label final"> 
                            </div>
                        </div>
                    </div>
                    <!-- Fim  do ponto médio-->

                    <div class="col-md-12" ><br/>
                        <div class="col-sm-6 col-lg-5" >
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer" >
                                    <input type="radio" id="pontmedio" name="pontmedio"  value="1">  Pontuação por Ponto Médio 
                                </div> 
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-5">
                            <div class="col-md-2">
                                <form action="demo_form.asp">Abaixo</form>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="qtd." size="8" maxlength="8" id="qtd." placeholder=" Pontos"> 
                            </div>

                            <div class="col-md-1" >
                                <form action="demo_form.asp"><big> |</big></form>
                            </div>

                            <div class="col-md-3" style="border:1px solid resd">
                                <input type="text" name="qtd." size="8" maxlength="8" id="qtd." placeholder=" Pontos">
                            </div>

                            <div class="col-md-2" >
                                <form action="demo_form.asp">Acima</form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="col-sm-6 col-lg-5" >
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer" >
                                    <input type="radio" id="pontescala" name="pontescala" value="1"> Pontuação conforme Escala
                                </div> <br/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="col-sm-6 col-lg-5" >
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer" >
                                    <input type="number" id="interacaofisicareal" name="interacaofisicareal"  value="1"> Interção física/real
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Respostas</label>
                                <div class="col-md-8 pull-right">
                                    <input type="varchar" id="resposta" name="resposta" class="form-control " placeholder="">
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-10" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Pontos</label>
                                <div class="col-md-1 ">
                                    <input type="number" id="pontos" name="pontos" class="form-control"  placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="col-sm-6 col-lg-5" >
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer" >
                                    <input type="checkbox" id="habiiitaqr" name="habilitaqr"  value="1"> Habilita QR-Code Reader
                                </div> <br/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="col-sm-6 col-lg-10 ">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Ícone</label>
                                <div class="col-md-8 ">
                                    <a href="#" class="ico-search">Clique aqui para importar outra imagem</a>
                                </div>
                                <br/>
                            </div>
                        </div>
                    </div>  
                    
                </div>
                <!-- rodape -->
                <div>
                    <button type="button" class="btn btn-primary pull-right btnazul">Salvar e criar Ação</button>
                    <button class="btn btn-deafult pull-right btnazul">Salvar</button>
                    <button class="btn btn-deafult pull-right">Cancelar</button>
                </div> 

            </div>
        </div>
          </form>
    </body>
</html>

<!--FIM container-->