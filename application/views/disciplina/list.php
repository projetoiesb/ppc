    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Disciplinas</h1>
                <a href="/disciplinas/create" type="button" class="btn btn-primary">Nova</a>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-xs-12">        

                <?php foreach($disciplina as $discip_item): ?>
                <a href="/disciplinas/detail/<?php echo $discip_item['discip_id']; ?>">
                    <p>
                        <?php echo $discip_item['discip_name']; ?> - 
                        <?php echo $discip_item['discip_code']; ?> -
                        <?php echo $discip_item['discip_semester']; ?>
                    </p>
                </a>
                <?php endforeach; ?>                
            </div>
        </div>           
    </div>
