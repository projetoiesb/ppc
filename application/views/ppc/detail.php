    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Projeto Pedagógico do Curso (a melhorar)</h1>
                <a href="/ppcs/edit/<?php echo $ppc_item[0]['ppc_id']; ?>" type="button" class="btn btn-primary">Editar</a>
                <a href="/ppcs/delete/<?php echo $ppc_item[0]['ppc_id']; ?>" type="button" class="btn btn-danger">Apagar</a>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-xs-12">        
                    <?php foreach($ppc_item as $item): ?>
                        <h4>Id:</h4>
                        <p><?php echo $item['ppc_id']; ?></p> 

                        <h4>Curso:</h4>
                        <p><?php 
                                $indice = $item['curso_id'] - 1;
                                echo $curso[$indice]['curso_name'];
                           ?>   
                        </p>

                        <h4>Perfil do curso:</h4>
                        <p><?php echo $item['ppc_courseProfile']; ?></p>
                        <h4>Perfil do egresso:</h4>
                        <p><?php echo $item['ppc_egressProfile']; ?></p>
                        <h4>Forma de acesso ao curso:</h4>
                        <p><?php echo $item['ppc_courseAccess']; ?></p>
                        <h4>Representação gráfica de um perfil de formação:</h4>
                        <p><?php echo $item['ppc_formation']; ?></p>
                        <h4>Sistema de avaliação do processo Ensino-Aprendizagem:</h4>
                        <p><?php echo $item['ppc_teachingEvaluation']; ?></p>
                        <h4>Sistema de avaliação do projeto do curso:</h4>
                        <p><?php echo $item['ppc_projectEvaluation']; ?></p>
                        <h4>Trabalho de conclusão de curso:</h4>
                        <p><?php echo $item['ppc_conclusion']; ?></p>
                        <h4>Estágio curricular:</h4>
                        <p><?php echo $item['ppc_trainee']; ?></p>
                        <h4>Politica de atendimento a pessoas com deficiência e/ou mobilidade reduzida:</h4>
                        <p><?php echo $item['ppc_pad']; ?></p>

                <?php endforeach; ?>              
            </div>
        </div>           
    </div>
