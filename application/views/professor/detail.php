    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Professores</h1>
                <a href="/professores/edit/<?php echo $professor_item[0]['prof_id']; ?>" type="button" class="btn btn-primary">Editar</a>
                <a href="/professores/delete/<?php echo $professor_item[0]['prof_id']; ?>" type="button" class="btn btn-danger">Apagar</a>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-xs-12">        
                    <?php foreach($professor_item as $item): ?>
                        <h4>Id:</h4>
                        <p><?php echo $item['prof_id']; ?></p> 
                        <h4>Nome:</h4>
                        <p><?php echo $item['prof_name']; ?></p>
                        <h4>CPF:</h4>
                        <p><?php echo $item['prof_cpf']; ?></p>
                        <h4>Maior titulação:</h4>
                        <p><?php echo $item['prof_greatTitle']; ?></p>
                        <h4>Area de formação:</h4>
                        <p><?php echo $item['prof_areaFormation']; ?></p>
                        <h4>Link curriculum Lattes:</h4>
                        <p><?php echo $item['prof_linkLattes']; ?></p>
                        <h4>Ultima atualização:</h4>
                        <p><?php echo $item['prof_lastUpdate']; ?></p>
                <?php endforeach; ?>              

            </div>
        </div>           
    </div>
