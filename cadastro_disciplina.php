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
    
    <!-- Notifications -->
    <link href="css/toastr.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/round-about.css" rel="stylesheet">  
    <title>Cadastro de Disciplina</title>
</head>
<body>

    <!-- Navigation -->
     <?php include 'navbar.html'; ?>

    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cadastro de Disciplina</h1>
            </div>
        </div>
        <!-- List Disciplinas -->
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Código</th>
                    <th>Semestre</th>
                    <th>Carga Horária</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <!-- End List Disciplinas-->
        <!-- Modal cadastrar Disciplina -->
        <div class="modal fade" id="create-disciplina" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Adicionar Disciplina</h4>
                    </div>

                    <div class="modal-body">
                        <form class="well" action="api/create_disciplina.php" method="POST">
                            <fieldset>
                                <legend>Dados da Disciplina</legend>
                                <div class="form-group col-xs-12">
                                    <label for="inputNomeDisciplina">Nome</label>
                                    <input type="text" class="form-control" name="nome" placeholder="">
                                </div>

                                <div class="form-group col-xs-12">
                                    <label for="inputDescricaoDisciplina">Descrição</label>
                                    <textarea class="form-control" name="descricao" rows="3"></textarea>
                                    
                                </div>

                                <div class="form-group col-xs-3">
                                    <label for="inputCodigoDisciplina">Código</label>
                                    <input type="text" class="form-control" name="codigo" id="inputCodigoDisciplina" placeholder="">
                                </div>

                                <div class="form-group col-xs-6">
                                    <label for="inputSemestreDisciplina">Semestre</label>
                                    <input type="text" class="form-control" name="semestre" id="inputSemestreDisciplina" placeholder="">
                                </div>

                                <div class="form-group col-xs-3">
                                    <label for="inputCargaHorariaDisciplina">Carga horária</label>
                                    <input type="text" class="form-control" name="carga_horaria" id="inputCargaHorariaDisciplina" placeholder="">
                                </div>

                            </fieldset>
                            <button type="button" class="crud-submit btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-default">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim modal cadastrar Disciplina -->

        <!-- Modal editar Disciplina -->
        <div class="modal fade" id="edit-disciplina" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Editar Disciplina</h4>
                    </div>

                    <div class="modal-body">
                        <form class="well" action="api/update_disciplina.php" method="POST">
                            <input type="hidden" name="id" class="edit-id">
                            <fieldset>
                                <legend>Dados da Disciplina</legend>
                                <div class="form-group col-xs-12">
                                    <label for="inputNomeDisciplina">Nome</label>
                                    <input type="text" class="form-control" name="nome" placeholder="">
                                </div>

                                <div class="form-group col-xs-12">
                                    <label for="inputDescricaoDisciplina">Descrição</label>
                                    <textarea class="form-control" name="descricao" rows="3"></textarea>
                                    
                                </div>

                                <div class="form-group col-xs-3">
                                    <label for="inputCodigoDisciplina">Código</label>
                                    <input type="text" class="form-control" name="codigo" id="inputCodigoDisciplina" placeholder="">
                                </div>

                                <div class="form-group col-xs-6">
                                    <label for="inputSemestreDisciplina">Semestre</label>
                                    <input type="text" class="form-control" name="semestre" id="inputSemestreDisciplina" placeholder="">
                                </div>

                                <div class="form-group col-xs-3">
                                    <label for="inputCargaHorariaDisciplina">Carga horária</label>
                                    <input type="text" class="form-control" name="carga_horaria" id="inputCargaHorariaDisciplina" placeholder="">
                                </div>

                            </fieldset>
                            <button type="button" class="edit-submit-disciplina btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-default">Cancelar</button>
                        </form>
                    </div>              
                    
                </div>
            </div>
        </div>
        <!-- Fim modal editar disciplina -->

        <div class="col-xs-12">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-disciplina">Incluir Disciplina</button>
            
        </div>
        <!-- Paginator -->
        <div class="row">
            <div class="col-lg-12">
                <ul id="pagination" class="pagination-sm"></ul>
            </div>
        </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Paginator -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- JavaScript Disciplina -->
    <script type="text/javascript">
        //var host = location.host
        //var path = location.pathname
        var url = 'http://localhost/xampp/ppc/';
    </script>
    <script src="js/crud_ajax_disciplinas.js"></script>
</body>
</html>
