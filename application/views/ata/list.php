    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Atas</h1>
                <a href="/atas/create" type="button" class="btn btn-primary">Nova</a>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-xs-12">        

                <?php foreach($ata as $ata_item): ?>
                <a href="/atas/detail/<?php echo $ata_item['ata_id']; ?>">
                    <p>
                        <?php echo $ata_item['ata_date']; ?> - 
                        <?php echo $ata_item['ata_local']; ?> -
                        <?php echo $ata_item['ata_participants']; ?>
                        <?php //echo $ata_item['ata_deliberations']; ?>
                    </p>
                </a>
                <?php endforeach; ?>                
            </div>
        </div>           
    </div>
