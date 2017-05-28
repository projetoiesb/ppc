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
                        <h4>Id:</h4>
                        <p><?php echo $item['ata_id']; ?></p> 
                        <h4>Data:</h4>
                        <p><?php echo $item['ata_date']; ?></p>
                        <h4>Local:</h4>
                        <p><?php echo $item['ata_local']; ?></p>
                        <h4>Participantes:</h4>
                        <p><?php echo $item['ata_participants']; ?></p>
                        <h4>Deliberação:</h4>
                        <p><?php echo $item['ata_deliberations']; ?></p>
                <?php endforeach; ?>              

            </div>
        </div>           
    </div>
