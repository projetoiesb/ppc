    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Matriz Curricular</h1>
                <a href="/matrizes/edit/<?php echo $matriz_item[0]['curso_id']; ?>" type="button" class="btn btn-primary">Editar</a>
                <a href="/matrizes/delete/<?php echo $matriz_item[0]['curso_id']; ?>" type="button" class="btn btn-danger">Apagar</a>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-xs-12">
                <h2>Curso: <?php echo $curso_item['0']['0']['curso_name']; ?></h2>  
                <h3>Disciplinas:</h3>      
                    <?php foreach($discip_item as $item): ?>
                        <p><?php echo $item['0']['discip_name']; ?></p>
                                 
                <?php endforeach; ?>              

            </div>
        </div>           
    </div>
