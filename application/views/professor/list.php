    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Professores</h1>
                <a href="<?php echo base_url('index.php/professores/create'); ?>" type="button" class="btn btn-primary">Novo</a>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-xs-12">   
                <table id="list-professor" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Área de formação</th>
                            <th>Titulação</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($professor as $professor_item): ?>
                        <tr>
                            <td><?php echo $professor_item['prof_name']; ?></td>
                            <td><?php echo $professor_item['prof_cpf']; ?></td>
                            <td><?php echo $professor_item['prof_greatTitle']; ?></td>
                            <td><?php echo $professor_item['prof_areaFormation']; ?></td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm" onclick="window.location.href = '<?php echo base_url('index.php/professores/detail/'); echo $professor_item['prof_id']; echo '/'.$professor_item['prof_cpf']; ?>'" >
                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Ver
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>           
    </div>