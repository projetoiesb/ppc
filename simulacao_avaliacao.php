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
    <title>Simulação de Avaliação</title>
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
                <h1 class="page-header">Identificação do Curso</h1>
            </div>
        </div>
        <form class="" method="post">
        <div class="row">
            <fieldset>
                <div class="form-group">
                    <div class="col-lg-3">
                        <label for="TipoCurso">Tipo do Curso</label>
                            <select class="form-control">
                                <option>-- Selecione --</option>
                                <option>Curso Superior Tecnológico</option>
                            </select>
                    </div>

                    <div class="col-lg-3">
                        <label for="Modalidade">Modalidade</label>
                            <select class="form-control">
                                <option>-- Selecione --</option>
                                <option>A distância</option>
                            </select>
                    </div>

                    <div class="col-lg-3">
                        <label for="DenominacaoCurso">Denominação do Curso</label>
                            <select class="form-control">
                                <option>-- Selecione --</option>
                                <option>CST em Análise e Desenvolvimento de Sistema</option>
                            </select>
                    </div>
                    <div class="col-lg-3">
                        <label for="LocalOferta">Local de Oferta</label>
                            <select class="form-control">
                                <option>-- Selecione --</option>
                                <option>Campus IESB Oeste</option>
                            </select>
                    </div>
                </div>
            </fieldset>
        </div>
        <!-- Tabs -->
        <div class="row">
            <div class="col-lg-12">
                <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                    <li class="active">
                        <a href="#dimensao1" data-toggle="tab">Dimensão 1: Organização Didática-Pedagógica</a>
                    </li>
                    <li>
                        <a href="#dimensao2" data-toggle="tab">Dimensão 2:</a>
                    </li>
                    <li>
                        <a href="#simular_nota" data-toggle="tab">Simular Nota</a>
                    </li>
                    <li>
                        <a href="#gerar_manual" data-toggle="tab">Gerar Manual e-Mec</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div id="my-tab-content" class="tab-content">
                <div class="tab-pane active col-lg-12" id="dimensao1">
                    <div class="row">
                        <h4>Categoria de análise: Projeto Pedagógico do Curso</h4>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="Indicadores">Indicadores</label>
                                <select class="form-control">
                                    <option>-- Selecione --</option>
                                    <option>Contexto Educacional</option>
                                    <option>Auto Avaliação</option>
                                    <option>Objetivos do Curso</option>
                                    <option>Perfil Prof. do Egresso</option>
                                    <option>Número de Vagas</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="Conceito">Conceito</label>
                                <input class="form-check-input"
                                       type="radio" 
                                       name="gridRadiosIndicadores"
                                       value="1" checked> 1
                                <input class="form-check-input"
                                       type="radio" 
                                       name="gridRadiosIndicadores"
                                       value="2"> 2
                                <input class="form-check-input"
                                       type="radio" 
                                       name="gridRadiosIndicadores"
                                       value="3"> 3
                                <input class="form-check-input"
                                       type="radio" 
                                       name="gridRadiosIndicadores"
                                       value="4"> 4
                                <input class="form-check-input"
                                       type="radio" 
                                       name="gridRadiosIndicadores"
                                       value="5">5
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-group">
                                <button type="button" class="btn btn-success">Atribuir</button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <h4>Categoria de análise: Projeto Pedagógico do Curso: formação</h4>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="Indicadores">Indicadores</label>
                                <select class="form-control">
                                    <option>-- Selecione --</option>
                                    <option>Estrutura Curricular</option>
                                    <option>Conteúdos Curriculares</option>
                                    <option>Metodologia</option>
                                    <option>Atendimento ao Discente</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="Conceito">Conceito</label>
                                <input class="form-check-input"
                                       type="radio" 
                                       name="gridRadiosIndicadores2"
                                       value="1" checked> 1
                                <input class="form-check-input"
                                       type="radio" 
                                       name="gridRadiosIndicadores2"
                                       value="2"> 2
                                <input class="form-check-input"
                                       type="radio" 
                                       name="gridRadiosIndicadores2"
                                       value="3"> 3
                                <input class="form-check-input"
                                       type="radio" 
                                       name="gridRadiosIndicadores2"
                                       value="4"> 4
                                <input class="form-check-input"
                                       type="radio" 
                                       name="gridRadiosIndicadores2"
                                       value="5">5
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-group">
                                <button type="button" class="btn btn-success">Atribuir</button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <h4>Relato Global da Dimensão 1 - Organização Didática Pedagógica</h4>
                        <textarea class="form-control" id="relato" rows="3"></textarea>
                    </div>
                </div>

                <div class="tab-pane col-lg-12" id="dimensao2">
                    <h1>Dimensao 2</h1>
                        <p>Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est. Quem num gosti di mum que vai caçá sua turmis! Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Viva Forevis aptent taciti sociosqu ad litora torquent</p>
                </div>

                <div class="tab-pane" id="simular_nota">
                    <h1>Simular Nota</h1>
                    <p>Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est. Quem num gosti di mum que vai caçá sua turmis! Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Viva Forevis aptent taciti sociosqu ad litora torquent</p>
                </div>

                <div class="tab-pane" id="gerar_manual">
                    <h1>Gerar Manual e-Mec</h1>
                    <p>Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Quem num gosta di mé, boa gente num é. Atirei o pau no gatis, per gatis num morreus.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <button type="button" class="btn btn-warning">Revisar</button>
            <button type="button" class="btn btn-info">Guardar</button>
            <button type="button" class="btn btn-success">Simular</button>
        </div>
        </form>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>