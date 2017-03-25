<!DOCTYPE html>

<!---
Tela: de Cadastro de Disciplina
Autor: Vinícius Barth
  --->

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
    <title>Cadastro de Disciplina</title>
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
                <h1 class="page-header">Cadastro de Disciplina</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form class="well">
                    <fieldset>
                        <legend>Dados da Disciplina</legend>
                        <div class="form-group col-xs-12">
                            <label for="inputNomeDisciplina">Nome</label>
                            <input type="text" class="form-control" id="inputNomeDisciplina" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <label for="inputDescricaoDisciplina">Descrição</label>
                            <select class="form-control">
                                    <option>-- Selecione --</option>
                                    <option>Prática</option>
                                    <option>Teórica</option>
                            </select>
                        </div>

                        <div class="form-group col-xs-3">
                            <label for="inputCodigoDisciplina">Código</label>
                            <input type="text" class="form-control" id="inputCodigoDisciplina" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <label for="inputSemestreDisciplina">Semestre</label>
                            <input type="text" class="form-control" id="inputSemestreDisciplina" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <label for="inputCargaHorariaDisciplina">Carga horária</label>
                            <input type="text" class="form-control" id="inputCargaHorariaDisciplina" placeholder="">
                        </div>

                    </fieldset>
                </form>
                <div class="col-xs-12">
                    <hr />
                    <button type="button" class="btn btn-primary">Salvar</button>
                    <button type="button" class="btn btn-default">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
