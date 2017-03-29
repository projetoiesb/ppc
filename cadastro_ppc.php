<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Plano Pedagógico do Curso</title>

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
                <a class="navbar-brand" href="#">Cadastro PPC</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Sobre</a>
                    </li>
                    <li>
                        <a href="#">Serviços</a>
                    </li>
                    <li>
                        <a href="#">Contato</a>
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
                <h1 class="page-header">Plano Pedagógico do Curso - PPC</h1>
            </div>
        </div>

        <!-- Team Members Row -->
        <form action="#" method="post">
            <div class="row">
                <div class="col-lg-8">
                    <label for="nome_curso_txt">Curso *</label>
                    <input required type="text" class="form-control" id="nome_curso_txt" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for="perfil_curso_txt">Perfil do curso *</label>
                    <textarea required class="form-control" rows="5" id="perfil_curso_txt"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for="perfil_egresso_txt">Perfil do egresso *</label>
                    <textarea required class="form-control" rows="5" id="perfil_egresso_txt"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for="forma_acesso_txt">Formas de acesso ao curso *</label>
                    <textarea required class="form-control" rows="5" id="forma_acesso_txt"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for="perfil_formacao_txt">Representação grafica de um perfil de Formação *</label>
                    <textarea required class="form-control" rows="5" id="perfil_formacao_txt"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for="processo_ensino_aprendizagem_txt">Sistema de avaliação do processo de ensino e aprendizagem *</label>
                    <textarea required class="form-control" rows="5" id="processo_ensino_aprendizagem_txt"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for="avaliacao_projeto_txt">Sistema de avaliação do Projeto do Curso *</label>
                    <textarea required class="form-control" rows="5" id="avaliacao_projeto_txt"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for="politica_atendimento_deficientes_txt">Política de atendimento a pessoas com deficiencia e/ou mobilidade reduzida *</label>
                    <textarea required class="form-control" rows="5" id="politica_atendimento_deficientes_txt"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label for="tcc_rd_1" >Trabalho de conclusão de curso</label>
                    <div class="radio">
                        <label><input type="radio" checked id="tcc_rd_1" name="tcc_rd" value="1" />Sim</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="tcc_rd" value="0" />Não</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label for="estagio_rd_1" >Estágio Curricular</label>
                    <div class="radio">
                        <label><input type="radio" checked id="estagio_rd_1" name="estagio_rd" value="1" />Sim</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="estagio_rd" value="0" />Não</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <hr />
                <div class="col-lg-12">
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
