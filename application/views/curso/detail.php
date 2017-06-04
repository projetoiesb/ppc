    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Curso</h1>
                <a href="/cursos/edit/<?php echo $curso_item[0]['curso_id']; ?>" type="button" class="btn btn-primary">Editar</a>
                <a href="/cursos/delete/<?php echo $curso_item[0]['curso_id']; ?>" type="button" class="btn btn-danger">Apagar</a>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-xs-12">        
                    <?php foreach($curso_item as $item): ?>
                        <p><strong>Id#:</strong> <?php echo $item['curso_id']; ?></b>
                        <p><strong>Tipo:</strong> <?php echo $item['curso_type']; ?></p>
                        <p><strong>Modalidade:</strong> <?php echo $item['curso_modality']; ?></p>
                        <p><strong>Nome:</strong> <?php echo $item['curso_name']; ?></p></h4>
                        <p><strong>Habilitação:</strong> <?php echo $item['curso_license']; ?></p>
                        <p><strong>Local de oferta:</strong> <?php echo $item['curso_offerLocal']; ?></p>
                        <p><strong>Turnos:</strong> <?php echo $item['curso_turns']; ?></p>
                        <p><strong>Vagas por turno:</strong> <?php echo $item['curso_vacancies']; ?></p>
                        <p><strong>Carga horária:</strong> <?php echo $item['curso_workload']; ?></p></h4>
                        <p><strong>Regime letivo:</strong> <?php echo $item['curso_regime']; ?></p></h4>
                        <p><strong>Períodos:</strong> <?php echo $item['curso_periods']; ?></p></h4>
                        <p><strong>Coordenador:</strong> <?php 
                                            $indice = $item['prof_id'] - 1;
                                            echo $coordenador[$indice]['prof_name'];
                                        ?>   
                        </p>
                                 
                  <?php endforeach; ?>              

            </div>
        </div>           
    </div>
