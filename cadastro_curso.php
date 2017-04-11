<!-- 
    Projeto Integrador III
    Cadastro de cursos
    Autor: Hugo
-->
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro PPC</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/round-about.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand" href="#">Plano Pedagógico de Curso</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Cadastro</a>
                    </li>
                    <li>
                        <a href="#">Histórico</a>
                    </li>
                    <li>
                        <a href="#">...</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cadastro de cursos</h1>
            </div>
        </div>

        <!-- Team Members Row -->
        <form action="#" method="post">
            <div class="row">
                <div class="col-lg-6">
                    <label for="tipo_curso_txt">Tipo de curso *</label>
                    <select required class="form-control" id="tipo_curso_txt">
                        <option>Selecione</option>
                        <option>Curso Superior Tecnológico</option>
                        <option>Curso Superior Licenciatura</option>
                        <option>Curso Superior Bacharelado</option>
                        <option>Curso Superior Sequencial</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <label for="modalidade_txt">Modalidade *</label>
                    <select required class="form-control" id="modalidade_txt">
                        <option>Selecione</option>
                        <option>Presencial</option>
                        <option>A distância</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for="denominacao_curso_txt">Denominação do curso *</label>
                    <input required type="text" class="form-control" id="denominacao_curso_txt" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label for="habilitacao_curso_txt">Habilitação</label>
                    <input type="text" class="form-control" id="habilitacao_curso_txt" />
                </div>
                <div class="col-lg-6">
                    <label for="local_curso_txt">Local de oferta *</label>
                    <input required type="text" class="form-control" required="true" id="local_curso_txt" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <label for="turno_curso">Turnos *</label>
                    <br />
                    <label class="checkbox-inline"><input type="checkbox" value="1" checked>A distância</label>
                    <label class="checkbox-inline"><input type="checkbox" value="2">Manhã</label>
                    <label class="checkbox-inline"><input type="checkbox" value="3">Tarde</label>
                    <label class="checkbox-inline"><input type="checkbox" value="4">Noite</label>
                </div>
                <div class="col-lg-4">
                    <label for="vagas_turno_curso_txt">Vagas por turno *</label>
                    <input required type="text" class="form-control" id="vagas_turno_curso_txt" />
                </div>
                <div class="col-lg-4">
                    <label for="carga_horaria_curso_txt">Carga horária do curso *</label>
                    <input required type="text" class="form-control" id="carga_horaria_curso_txt" />
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <h2>Estrutura curricular</h2>
                    <hr />
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6">
                    <label for="regime_letivo_curso_txt">Regime letivo</label>
                    <input type="text" class="form-control" id="regime_letivo_curso_txt" />
                </div>
                <div class="col-lg-6">
                    <label for="periodo_letivo_curso_txt">Período letivo</label>
                    <input type="text" class="form-control" id="periodo_letivo_curso_txt" />
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <h2>Coordenador do curso</h2>
                    <hr />
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-lg-6">
                    <label for="nome_coordenador_txt">Nome *</label>
                    <input type="text" class="form-control" id="nome_coordenador_txt" />
                    <a href="#">Cadastrar novo</a>
                </div>
                <div class="col-lg-6">
                    <label for="cpf_coordenador_txt">CPF *</label>
                    <input disabled="true" type="text" class="form-control" id="cpf_coordenador_txt" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label for="titulacao_coordenador_txt">Titulação *</label>
                    <input disabled="true" type="text" class="form-control" id="titulacao_coordenador_txt" />
                </div>
                <div class="col-lg-6">
                    <label for="tempo_dedicacao_txt">Tempo de dedicação *</label>
                    <input type="text" class="form-control" id="tempo_dedicacao_txt" />
                </div>
            </div>
            <div class="row">
                <hr />
                <div class="col-lg-12" style="text-align: center;">
                    <input type="reset" class="btn btn-default" value="Limpar" />
                    <input type="submit" class="btn btn-primary" value="Enviar" />
                </div>
            </div>
        </form>
    </div>
    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p style="text-align: center">Copyright &copy; PPC 2017</p>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
