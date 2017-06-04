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
                        <p><strong>Id:</strong> <?php echo $item['ppc_id']; ?></p>
                        <p><strong>Curso:</strong> <?php 
                                                       $indice = $item['curso_id'] - 1;
                                                       echo $curso[$indice]['curso_name'];
                                                   ?>
                        </p>
                        <p><strong>Perfil do curso:</strong> <?php echo $item['ppc_courseProfile']; ?></p>
                        <p><strong>Perfil do egresso:</strong>> <?php echo $item['ppc_egressProfile']; ?></p>
                        <p><strong>Forma de acesso ao curso:</strong> <?php echo $item['ppc_courseAccess']; ?></p>
                        <p><strong>Representação gráfica de um perfil de formação:</strong> <?php echo $item['ppc_formation']; ?></p>
                        <p><strong>Sistema de avaliação do processo Ensino-Aprendizagem:</strong> <?php echo $item['ppc_teachingEvaluation']; ?></p>
                        <p><strong>Sistema de avaliação do projeto do curso:</strong> <?php echo $item['ppc_projectEvaluation']; ?></p>
                        <p><strong>Trabalho de conclusão de curso:</strong> <?php echo $item['ppc_conclusion']; ?></p>
                        <p><strong>Estágio curricular:</strong> <?php echo $item['ppc_trainee']; ?></p>
                        <p><strong>Politica de atendimento a pessoas com deficiência e/ou mobilidade reduzida:</strong> <?php echo $item['ppc_pad']; ?></p>
                <?php endforeach; ?>              
            </div>
        </div>           
    </div>
