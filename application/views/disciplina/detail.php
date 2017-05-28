    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Disciplina</h1>
                <a href="/disciplinas/edit/<?php echo $discip_item[0]['discip_id']; ?>" type="button" class="btn btn-primary">Editar</a>
                <a href="/disciplinas/delete/<?php echo $discip_item[0]['discip_id']; ?>" type="button" class="btn btn-danger">Apagar</a>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-xs-12">        
                    <?php foreach($discip_item as $item): ?>
                        <h4>Id:</h4>
                        <p><?php echo $item['discip_id']; ?></p> 
                        <h4>Nome:</h4>
                        <p><?php echo $item['discip_name']; ?></p>
                        <h4>Descrição:</h4>
                        <p><?php echo $item['discip_description']; ?></p>
                        <h4>Código:</h4>
                        <p><?php echo $item['discip_code']; ?></p>
                        <h4>Semestre:</h4>
                        <p><?php echo $item['discip_semester']; ?></p>
                        <h4>Carga horária:</h4>
                        <p><?php echo $item['discip_workload']; ?> h</p>
                <?php endforeach; ?>              

            </div>
        </div>           
    </div>
