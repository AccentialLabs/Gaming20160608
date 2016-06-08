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
        <!--<link href="css/configuracoes4.css" rel="stylesheet" /> retirei por confiurar a nav-brand---> 
        <link href="../../assets/css/cadastrar-premio.css" rel="stylesheet"/>

        <script src="../../assets/js/jquery.min.js"></script> 
        <script src="../../assets/js/bootstrap.min.js"></script>   
        <script src="../../assets/js/views/cadastraPremio.js"></script> 
    </head>
    <body> 
        <form  method="post" action="http://localhost:9090/gaming/index.php/configuracoes/createPremio" >
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
                        <a class= "navbar-brand" href ="#"><strong>Cadastrar Prêmio</strong></a>
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
                    
                  
                    <div class="col-sm-6 col-lg-5" >
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Nome</label>
                            <div class="col-md-8 pull-right">
                                <input type="text" class="form-control tamanho" id="nome" name="nome" placeholder="Jantar para você e um acompanhante no REst.Chez Michox">
                                <br/>
                            </div>
                        </div>
                    </div>

                    <!--ativo celular-->                  
                    <div class="celular col-md-3 ">
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked> 
                            <label class="onoffswitch-label" for="myonoffswitch">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                    <!--FIM ativo celular-->
 
                    <div class="col-sm-6 col-lg-5" >
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Tipo</label>
                            <div class="col-md-8 pull-right">
                                <select class="span1" id="tipopremio_id" name="tipopremio_id">
                                    <option value="1">Experiência</option>
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

                    <div class="col-md-12 ">
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control1-labe">Descrição</label>
                                <div class="col-md-8 pull-right ">
                                    <textarea class="form-control" id="descricao" name="descricao">
Isto é um exemplo de área de texto ...........
Isto é um exemplo de área de texto ...........
Isto é um exemplo de área de texto ...........
                                    </textarea>       
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-10 ">
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Imagens</label>
                                <div class="col-md-8 ">
                                    <a href="#" class="ico-search" id="addimagem" name="addimagem">Clique aqui para selecionar a imagem</a>
                                </div> 
                                <br/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Site</label>
                                <div class="col-md-8 pull-right">
                                    <input type="text" class="form-control " id="site" name="site" placeholder="www.chezmichoux.com.br">
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Link adicional</label>
                                <div class="col-md-8 pull-right">
                                    <input type="text" class="form-control " id="linkadicional" name="linkadicional" placeholder="https://www.google.com.br/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=google+maps+oscar+freire">
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control1-labe">Informações adicionais</label>
                                <div class="col-md-8 pull-right ">
                                    <textarea class="form-control" id="informacoesadicionais" name="informacoesadicionais">
R.Oscar Freire 123-Jardins-São Paulo-SP.
Fone: 11-4321-5678
RSVP: ligue antes para confirmar a disponibilidade.
Válido de 5º a Dom (exeto feriados) das 18h ás 24h.
                                    </textarea>
                                    <br/>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-3 control-label">Instruções <br/>para receber<br/>o prêmio</label>
                                <div class="col-md-8 pull-right">
                                    <textarea class="form-control" id="intrucoes" name="intrucoes">
Procure a Tatiane Ferreira (Gerente RH-ramal 1234) para retirar seu voucher(p/ 2 pessoas).
                                    </textarea>
                                    <br/>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Quantidade</label>
                                <div class="col-md-8 pull-right">
                                    <div class = "checbox " >
                                        <input type="radio"  value="0" id="quantidadecontrolada" name="quantidadecontrolada"> ilimitado/sem controle 
                                    </div> 

                                    <div class = "checbox checboxcontainer">
                                        <input type="radio"  value="1" id="quantidadecontrolada" name="quantidadecontrolada"> com controle de estoque
                                    </div>                               
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6 col-lg-10" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control1-labe"> </label>
                                <div class="col-md-2 ">
                                   Qtd.inicial 
                                        <input type="text" name="quantidadepremios" size="5" maxlength="8" id="quantidadepremios"  placeholder="10">
                              
                                </div>
                                <div class="col-md-3 ">
                                  Qtd.ataul
                                        <input type="text" name="quantidadeatualpremios" size="5" maxlength="8" id="quantidadeatualpremios" placeholder="10" />  <a href="#" class="ico-search1">redefinir</a>
                                   
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12" >
                        <div class="col-sm-6 col-lg-5" >
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control1-labe">Disponibilidade</label>
                                <div class="col-md-8 pull-right ">
                                    <div class = "checbox checboxcontainer" >
                                        <input type="radio"  value="1" id="disponibilidade" name="disponibilidade"> por conquista
                                    </div> 

                                    <div class = "checbox checboxcontainer">
                                        <input type="radio"  value="0" id="disponibilidade" name="disponibilidade"> no Catálogo de Prêmios
                                    </div>    

                                   Qtd.Pontos 
                                        <input type="text" name="quantidadedisponibilizadade" size="4" maxlength="8" id="quantidadedisponibilizadade" placeholder="">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>

            <input type="hidden" name="status" id="status" checked="1"/>
            
        <!-- rodape -->
        <div>
            <button type="submit" class="btn btn-primary pull-right btnazul">Salvar</button>
            <button type="submit" class="btn btn-deafult pull-right">Cancelar</button>
        </div> 

    </div>
</form>
</body>
</html>

<!--FIM container-->