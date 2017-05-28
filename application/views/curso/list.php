    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Curso</h1>
                <a href="/cursos/create" type="button" class="btn btn-primary">Inserir</a>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-xs-12">        

                <?php foreach($curso as $curso_item): ?>
                <a href="/cursos/detail/<?php echo $curso_item['curso_id']; ?>">
                    <p>
                        <?php echo $curso_item['curso_name']; ?> - 
                        <?php echo $curso_item['curso_type']; ?> -
                        <?php echo $curso_item['curso_license']; ?> -
                        <?php 
                              $indice = $curso_item['prof_id'] - 1;
                              print_r($coordenador[$indice]['prof_name']); 
                        ?>       
                    </p>
                </a>
                <?php endforeach; ?>                
            </div>
        </div>           
    </div>
