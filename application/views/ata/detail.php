    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Ata</h1>
                <a href="/atas/edit/<?php echo $ata_item[0]['ata_id']; ?>" type="button" class="btn btn-primary">Editar</a>
                <a href="/atas/delete/<?php echo $ata_item[0]['ata_id']; ?>" type="button" class="btn btn-danger">Apagar</a>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-xs-12">        
                    <?php foreach($ata_item as $item): ?>
                        <p><strong>Id:</strong> <?php echo $item['ata_id']; ?></p>
                        <p><strong>Data:</strong> <?php echo $item['ata_date']; ?></h4>
                        <p><strong>Local:</strong> <?php echo $item['ata_local']; ?></p>
                        <p><strong>Participantes:</strong> <?php echo $item['ata_participants']; ?></p>
                        <p><strong>Deliberação:</strong> <?php echo $item['ata_deliberations']; ?></p>
                <?php endforeach; ?>              

            </div>
        </div>           
    </div>
