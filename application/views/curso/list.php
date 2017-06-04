    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Curso</h1>
                <a href="/cursos/create" type="button" class="btn btn-success">Novo curso</a>
            </div>
        </div>
        <hr/>


        <div class="row">
            <div class="col-xs-12"> 
                <!-- List Disciplinas -->
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Tipo</th>
                            <th>Modalidade</th>
                            <th>Habilitação</th>
                            <th>Local</th>
                            <th>Turnos</th>
                            <th>Vagas</th>
                            <th>Carga horária</th>
                            <th>Regime letivo</th>
                            <th>Período</th>
                            <th>Coordenador</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($curso as $item): ?>
                            <tr>
                            <td><?php echo $item['curso_id']; ?></td>
                            <td><a href="/cursos/detail/<?php echo $item['curso_id']; ?>"><?php echo $item['curso_name']; ?></a></td>
                            <td><?php echo $item['curso_type']; ?></td>
                            <td><?php echo $item['curso_modality']; ?></td>
                            <td><?php echo $item['curso_license']; ?></td>
                            <td><?php echo $item['curso_offerLocal']; ?></td>
                            <td><?php echo $item['curso_turns']; ?></td>
                            <td><?php echo $item['curso_vacancies']; ?></td>
                            <td><?php echo $item['curso_workload']; ?></td>
                            <td><?php echo $item['curso_regime']; ?></td>
                            <td><?php echo $item['curso_periods']; ?></td>
                            <td><?php 
                                    $indice = $item['prof_id'] - 1;
                                    print_r($coordenador[$indice]['prof_name']); 
                                ?>
                            </td>
                            <td>
                                <a class="btn btn-primary edit-disciplina"
                                   href="/cursos/edit/<?php echo $item['curso_id']; ?>">Editar</a>
                                <a class="btn btn-danger remove-item"
                                   href="/cursos/delete/<?php echo $item['curso_id']; ?>">Excluir</a>
                            </td>
                            </tr>
                        <?php endforeach; ?>  
                    </tbody>
                </table>
                <!-- End List Disciplinas-->
            </div>
        </div>
    </div>
