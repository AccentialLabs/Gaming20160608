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
        <link href="../../assets/css/cadastrar-f2.css" rel="stylesheet"/>

        <script src="../../assets/js/jquery.min.js"></script> 
        <script src="../../assets/js/bootstrap.min.js"></script> 
        <script src="../../assets/js/views/cadastrarFuncionario.js"></script> 
        
    </head>
    <body>
 <form  method="post" action="http://localhost:9090/gaming/index.php/funcionario/createFuncionario" >

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
                        <a class= "navbar-brand" href ="#"><strong>Cadastrar Funcionário</strong></a>
                    </div>
                </div>
            </nav>
        </div>

        <!-- FIM cabeçãlho-->

        <!--Menu-->
        <div class="col-md-2 pull-left div-vermelha menu-style">

            <ul class="nav nav-pills nav-stacked">
                <button type= "button" class= "btn btn-default btn-lg btn-block" > Voltar </button>
            </ul>
        </div>
        <!--FIM menu-->

        <!--container-->
        <div class="col-md-10  container-style">
            <div id="page-content" class="margembranca pull-right"> 

                <div class="col-md-12">
                    <div class="col-sm-6 col-lg-5">
                        <label for="inputEmail" class="col-md-2 control-label">Nome</label>
                        <div class="col-md-8 pull-right" w>
                            <input type="text" class="form-control " id="nome" name="nome" placeholder="">
                            <br/>
                        </div>
                    </div>
                </div>

         <!--ativo celular-->
                <div class="celular col-md-3" >
                    <div class="onoffswitch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                        <label class="onoffswitch-label" for="myonoffswitch">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
        <!--FIM ativo celular-->
 
                <div class="col-md-12">
                    <div class="col-sm-6 col-lg-5" >
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Cargo</label>
                            <div class="col-md-8 pull-right">
                                <input type="text" class="form-control " id="cargo" name="cargo" placeholder="">
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
        
        
                <div class="col-md-12">
                    <div class="col-sm-6 col-lg-5">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Departamento</label>
                            <div class="col-md-8 pull-right">
                                <input type="textl" class="form-control " id="departamento" name="departamento" placeholder="">
                               <br/>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-5">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Unidade</label>
                            <div class="col-md-8 pull-right">
                                <input type="text" class="form-control " id="unidade"name="unidade"  placeholder="">
                               <br/>
                            </div>
                        </div>
                    </div> 
                </div>

        <div class="col-md-12">
                    <div class="col-sm-6 col-lg-5">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Endereço</label>
                            <div class="col-md-8 pull-right">
                                <input type="text" class="form-control " id="endereco" name="endereco" placeholder="">
                                <br/>
                            </div>
                        </div>
                    </div>
        
                <div class="col-md-12">
                    <div class="col-sm-6 col-lg-5">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Cidade</label>
                            <div class="col-md-8 pull-right">
                                <input type="text" class="form-control " id="cidade" name="cidade" placeholder="">
                                <br/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-lg-3">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-1 control-label">Estado</label>
                            <div class="col-md-8 pull-right">
                                <select class="col-md-12 col-lg-12" id="estado" name="estado"> 
                                    <option>AC</option>
                                    <option>SP</option>
                                    <option>BR</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="inputEmail" class="col-md-2 control-label">País</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control " id="pais" name="pais" placeholder="">
                        </div>
                    </div>

                </div>


                <div class="col-md-12">
                    
                    <div class="col-sm-6 col-lg-5">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Telefone</label>
                            <div class="col-md-8 pull-right">
                                <input type="tel" class="form-control " id="telefone" name="telefone" placeholder="">
                             <br/>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-5">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Ramal</label>
                            <div class="col-md-8 pull-right">
                                <input type="number" class="form-control " id="ramal" name="ramal" placeholder="">
                                <br/>
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="col-md-12">
                     <div class="col-sm-6 col-lg-5">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Celular</label>
                            <div class="col-md-8 pull-right">
                                <input type="tel" class="form-control " id="celular" name="celular" placeholder="">
                             <br/>
                            </div>
                        </div>
                    </div>
                </div> 
                        

                <div class="col-md-12">
                    <div class="col-sm-6 col-lg-5">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-3 control-label">E-mail</label>
                            <div class="col-md-8 pull-right">
                                <input type="email" class="form-control " id="email" name="email" placeholder="">
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-sm-6 col-lg-5">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Sexo</label>
                            <div class="col-md-8 pull-right">
                                <label>
                                    <input type="radio" value="1" id="sexo" name="sexo" >
                                    Masculino
                                </label>

                                <label>
                                    <input type="radio" value="0" id="sexo" name="sexo">
                                    Feminino
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-5">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-5 control-label">Data Nascimento</label>
                            <div class="col-sm-6 col-lg-2" >
                                <label class="unit11-1">
                                    <input name="nascimento" type="date"  id="month" value= " " class = "textbox70"/>
                                </label>
                            </div>
                        </div>                            
                    </div> 

                </div>

                <div class="col-md-12">
                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">Foto</label>
                            <div class="col-md-9 pull-right">
                                <form action="demo_form.asp">
                                    <a href="#" class="ico-search1">clique aqui para selecionar a imagem</a></p>
                                </form>	
                            </div>
                        </div>
                    </div>
                </div> 

                <div  class="col-md-12">															
                    <div class="tabbable tabs-left">  
                        <div class="col-md-3">      			<!--Aqui começa a tab do lado esquerdo com tabela-->
                            <ul class ="nav nav-tabs nav-stacked"><!--Aqui começa o cabeçalho da tab-->
                                <li><a href="#tab1" data-toggle="tab">Pontos</a></li>
                                <li class="active"><a href="#tab2" data-toggle="tab">Conquistas</a></li>
                                <li><a href="#tab3" data-toggle="tab">Equipes</a></li>
                            </ul>     <!--Aqui Termina o cabeçalho da tab-->
                        </div>
                        <div class="col-md-9"> 
                            <div class="tab-content">

                                <div class="tab-pane" id="tab1">
                                    <p>Estou na seção 1</p>
                                </div> 
                                
            <!--layout de troca de (tab-pane)-->
                                <div class="tab-pane active" id="tab2">
                                    <div class="tab-pane" id="tab2">  
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover table-condensed">

                                                <thead>
                                                  <tr>
                                                        <th>Realizações</th> 
                                                        <th>Data aquisição</th>
                                                        <td><center><input type="checkbox" name="opcoes"  value="html"/></center></td>
                                                  </tr>
                                                </thead>

                                                <tbody ng-repeat="membro in membroSede">
                                                    
                                                <?php foreach ($realizacoestab as $realizacoestab) {     
                                                            ?> <!--penultimo passo, para exexutar tudo com o Foreach-->
                                                    <tr class="listas">
                                                        <td><?php echo $realizacoestab['realizacoes'];?></td>  
                                                        <td><?php echo $realizacoestab['dataaquisicao'];?></td>
                                                        <td><center><span  class ="glyphicon glyphicon-ban-circle" = oculto-ária "true" ></span></center></td>
                                                    </tr>
                                                <?php }?> <!penultimo passo>
                                                      
                                                </tbody>
                                            </table>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab3">
                                    <p>Hey, estou na seção 3</p>
                                </div>
             <!--layout de troca de (tab-pane)-->
            
                            </div>
                        </div>
                    </div>							<!--Aqui termina a tab do lado esquerdo com tabela-->

                </div>

            </div>

            <!-- rodape -->
            <div>
                 <button type="submit" class="btn btn-primary pull-right btnazul">Salvar</button>
                 <button class="btn btn-deafult pull-right">Cancelar</button>
            </div>  
            
        </div>
      </form>
    </body>
</html> 
<!--FIM container-->