    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Atas</h1>
                <a href="/atas/create" type="button" class="btn btn-success">Nova ata</a>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-xs-12"> 
                <!-- List Atas -->
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Data</th>
                            <th>Local</th>
                            <th>Participantes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($ata as $item): ?>
                            <tr>
                            <td><?php echo $item['ata_id']; ?></td>
                            <td><a href="atas/detail/<?php echo $item['ata_id']; ?>"><?php echo $item['ata_date']; ?></a></td>
                            <td><?php echo $item['ata_local']; ?></td>
                            <td><?php echo $item['ata_participants']; ?></td>
                            <td>
                                <a class="btn btn-primary edit-disciplina"
                                   href="atas/edit/<?php echo $item['ata_id']; ?>">Editar</a>
                                <a class="btn btn-danger remove-item"
                                   href="atas/delete/<?php echo $item['ata_id']; ?>">Excluir</a>
                            </td>
                            </tr>
                        <?php endforeach; ?>  
                    </tbody>
                </table>
                <!-- End List Atas-->
            </div>
        </div>
    </div>
