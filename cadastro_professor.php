<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="css/round-about.css" rel="stylesheet">  
    <title>Cadastro de Professor</title>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cadastro de Professor</h1>
            </div>
        </div>

        <ul id="cadastroProfessorTabs" class="nav nav-tabs" data-tabs="cadastroProfessorTabs">
            <li class="active"><a href="#dadosPessoais" data-toggle="tab">Dados Pessoais</a></li>
            <li><a href="#atuacaoIES" data-toggle="tab">Atuação IES</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="dadosPessoais">
                <form>
                    <div class="form-group col-xs-8">
                        <label for="nomeProfessor">Nome</label>
                        <input type="text" class="form-control" id="nomeProfessor" placeholder="nome completo">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="cpfProfessor">CPF</label>
                        <input type="text" class="form-control" id="cpfProfessor" placeholder="">
                    </div>

                    <div class="form-group col-xs-6">
                        <label for="maiorTitulacaoProfessor">Maior Titulação</label>
                        <input type="text" class="form-control" id="maiorTitulacaoprofessor" placeholder="">
                    </div>

                    <div class="form-group col-xs-6">
                        <label for="areaFormacaoProfessor">Área de Formação</label>
                        <input type="text" class="form-control" id="maiorTitulacaoProfessor" placeholder="">
                    </div>

                    <div class="form-group col-xs-8">
                        <label for="linkLattesProfessor">Curriculum Lattes (link)</label>
                        <input type="url" class="form-control" id="linkLattesProfessor" placeholder="www.url.com.br">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="dataAtualizacaoProfessor">Data da última atualização</label>
                        <input type="date" class="form-control" id="linkLattesProfessor" placeholder="">
                    </div>

                </form>
            </div>
            <div class="tab-pane" id="atuacaoIES">
                <div class="row">
                    <div class="col-xs-12">
                        <form>
                            <div class="form-group col-xs-3">
                                <label for="matriculaProfessor">Matricula</label>
                                <input type="text" class="form-control" id="matriculaProfessor" placeholder="123456678">
                            </div>

                            <div class="form-group col-xs-2">
                                <label for="dataAdmissaoProfessor">Data de admissão</label>
                                <input type="date" class="form-control" id="dataAdmissaoProfessor" placeholder="">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <hr />
                        <p class="text-center">Informe a quantidade de horas das atividades</p>
                    </div>
                </div>

                <div class="row">
                <div class="col-xs-6">
                    <form class="form-horizontal">
                        
                        <div class="form-group">
                            <div class="col-xs-2">
                                <input type="text" class="form-control" id="inputHorasNDE" placeholder="01">
                            </div>
                            <label for="inputHorasNDE" class="control-label">NDE</label>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-2">
                                <input type="text" class="form-control" id="inputHorasTCC" placeholder="01">
                            </div>
                            <label for="inputHorasTCC" class="control-label">Orientação TCC</label>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-2">
                                <input type="text" class="form-control" id="inputHorasCoordenacao" placeholder="01">
                            </div>
                            <label for="inputHorasCoordenacao" class="control-label">Coordenação Curso</label>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-2">
                                <input type="text" class="form-control" id="inputHorasCoordenacaoOutros" placeholder="01">
                            </div>
                            <label for="inputHorasCoordenacaoOutros" class="control-label">Coordenação Outros Cursos</label>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-2">
                                <input type="text" class="form-control" id="inputPesquisa" placeholder="01">
                            </div>
                            <label for="inputPesquisa" class="control-label">Pesquisa (semestre atual)</label>
                        </div>
                    </form>
                </div>
               
                <div class="col-xs-6">
                    <form class="form-horizontal">
                        
                        <div class="form-group">
                            <div class="col-xs-2">
                                <input type="text" class="form-control" id="inputAtividadeExtraCurso" placeholder="01">
                            </div>
                            <label for="inputAtividadeExtraCurso" class="control-label">Atividades extra classe no curso</label>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-2">
                                <input type="text" class="form-control" id="inputAtvidadeExtraOutros" placeholder="01">
                            </div>
                            <label for="inputAtividadeExtraOutros" class="control-label">Atividade extra classe em outros cursos</label>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-2">
                                <input type="text" class="form-control" id="inputQuantidadeHorasCurso" placeholder="01">
                            </div>
                            <label for="inputQuantidadeHorasCurso" class="control-label">Qtde de horas curso</label>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-2">
                                <input type="text" class="form-control" id="inputQuantidadeHorasOutros" placeholder="01">
                            </div>
                            <label for="inputQuantidadeHorasOutros" class="control-label">Qtde de horas outros cursos</label>
                        </div>

                    </form>
                </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 ">
                        <p class="text-center">Disciplinas ministradas no curso</p>
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                
                    <div class="col-xs-6 ">
                        <p class="text-center">Disciplinas ministradas em outros cursos</p>
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
                
            </div>            
        </div>
        
    
        <div class="row">
            <div class="col-lg-12">
                <hr />
                
                <button type="button" class="btn btn-primary">Salvar</button>
                <button type="button" class="btn btn-danger">Cancelar</button>

                <hr />
            </div>
        </div>
    </div>
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
