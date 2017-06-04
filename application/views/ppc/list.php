    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Projeto Pedagógico do Curso</h1>
                <a href="/ppcs/create" type="button" class="btn btn-success">Novo PPC</a>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-xs-12"> 
                <!-- List PPC -->
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Curso</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($ppc as $item): ?>
                            <tr>
                            <td><?php echo $item['ppc_id']; ?></td>
                            <td><a href="ppcs/detail/<?php echo $item['ppc_id']; ?>">
                                    <?php 
                                          $indice = $item['curso_id'] - 1;
                                          print_r($curso[$indice]['curso_name']); 
                                    ?>  
                                </a></td>
                            <td>
                                <a class="btn btn-primary edit-disciplina"
                                   href="ppcs/edit/<?php echo $item['ppc_id']; ?>">Editar</a>
                                <a class="btn btn-danger remove-item"
                                   href="ppcs/delete/<?php echo $item['ppc_id']; ?>">Excluir</a>
                            </td>
                            </tr>
                        <?php endforeach; ?>  
                    </tbody>
                </table>
                <!-- End List PPC-->
            </div>
        </div>
    </div>
