    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Matiz Curricular</h1>
                <a href="/cursos/create" type="button" class="btn btn-primary">Inserir</a>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-xs-12">        

                <?php foreach($curso as $item): ?>

                <a href="/matrizes/detail/<?php echo $item['curso_id']; ?>">
                    <p> 
                        <?php echo $item['curso_id']; ?> -
                        <?php echo $item['curso_name']; ?>
                        <?php 
                              //$indice = $curso_item['prof_id'] - 1;
                              //print_r($coordenador[$indice]['prof_name']); 
                        ?>       
                    </p>
                </a>
                <?php endforeach; ?>                
            </div>
        </div>           
    </div>
