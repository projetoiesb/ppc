    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Projeto Pedagógico do Curso</h1>
                <a href="/ppcs/create" type="button" class="btn btn-primary">Inserir</a>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-xs-12">        

                <?php foreach($ppc as $ppc_item): ?>
                <a href="/ppcs/detail/<?php echo $ppc_item['ppc_id']; ?>">
                    <p>
                        <?php echo $ppc_item['ppc_id']; ?> -
                        <?php 
                              $indice = $ppc_item['curso_id'] - 1;
                              print_r($curso[$indice]['curso_name']); 
                        ?>       
                    </p>
                </a>
                <?php endforeach; ?>                
            </div>
        </div>           
    </div>
