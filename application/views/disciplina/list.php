    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Disciplinas</h1>
                <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-disciplina">Incluir Disciplina</button> -->
                <a class="btn btn-success" href="<?php echo base_url('index.php/disciplinas/create') ?>">Incluir Disciplina</a>
            </div>
        </div>
        <hr/>

        <!-- Modal cadastrar Disciplina -->
        <!-- <div class="modal fade" id="create-disciplina" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Adicionar Disciplina</h4>
                    </div>

                    <div class="modal-body">
                        <form class="well" action="disciplinas/create.php" method="POST">
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
        </div> -->
        <!-- Fim modal cadastrar Disciplina -->

        <div class="row">
            <div class="col-xs-12"> 
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
                        <?php foreach($disciplina as $discip_item): ?>
                            <tr>
                            <td><?php echo $discip_item['discip_id']; ?></td>
                            <td><?php echo $discip_item['discip_name']; ?></td>
                            <td><?php echo $discip_item['discip_description']; ?></td>
                            <td><?php echo $discip_item['discip_code']; ?></td>
                            <td><?php echo $discip_item['discip_semester']; ?></td>
                            <td><?php echo $discip_item['discip_workload']; ?></td>
                            <td>
                                <a class="btn btn-primary edit-disciplina"
                                   href="<?php echo base_url('index.php/disciplinas/edit/') ?><?php echo $discip_item['discip_id']; ?>">Editar</a>
                                <a class="btn btn-danger remove-item"
                                   href="<?php echo base_url('index.php/disciplinas/delete/') ?><?php echo $discip_item['discip_id']; ?>">Excluir</a>
                            </td>
                            </tr>
                        <?php endforeach; ?>  
                    </tbody>
                </table>
                <!-- End List Disciplinas-->
            </div>
        </div>
    </div>
