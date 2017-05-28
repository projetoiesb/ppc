    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Curso (a melhorar)</h1>
                <a href="/cursos/edit/<?php echo $curso_item[0]['curso_id']; ?>" type="button" class="btn btn-primary">Editar</a>
                <a href="/cursos/delete/<?php echo $curso_item[0]['curso_id']; ?>" type="button" class="btn btn-danger">Apagar</a>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-xs-12">        
                    <?php foreach($curso_item as $item): ?>
                        <h4>Id:</h4>
                        <p><?php echo $item['curso_id']; ?></p> 
                        <h4>Nome:</h4>
                        <p><?php echo $item['curso_name']; ?></p>
                        <h4>Habilitação:</h4>
                        <p><?php echo $item['curso_license']; ?></p>
                        <h4>Tipo:</h4>
                        <p><?php echo $item['curso_type']; ?></p>
                        <h4>Carga horária:</h4>
                        <p><?php echo $item['curso_workload']; ?></p>
                        <h4>Coordenador:</h4>
                        <p><?php 
                                $indice = $item['prof_id'] - 1;
                                echo $coordenador[$indice]['prof_name'];
                           ?>   
                        </p>
                                 
                <?php endforeach; ?>              

            </div>
        </div>           
    </div>
