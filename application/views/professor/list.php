    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Professores</h1>
                <a href="/professores/create" type="button" class="btn btn-primary">Inserir</a>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-xs-12">        

                <?php foreach($professor as $professor_item): ?>
                <a href="/professores/detail/<?php echo $professor_item['prof_id']; ?>">
                    <p>
                        <?php echo $professor_item['prof_name']; ?> - 
                        <?php echo $professor_item['prof_cpf']; ?> -
                        <?php echo $professor_item['prof_greatTitle']; ?> - 
                        <?php echo $professor_item['prof_areaFormation']; ?>
                    </p>
                </a>
                <?php endforeach; ?>                
            </div>
        </div>           
    </div>
