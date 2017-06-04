    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Simulação de Avaliação de Curso</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12"> 
                <h1>Resultados</h1>

                <!-- List Atas -->
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>Dimensão 1</th>
                            <th>Dimensão 2</th>
                            <th>Dimensão 3</th>
                            <th>Pontuação Geral</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                            <td><?php echo $dimensao1; ?></td>
                            <td><?php echo $dimensao2; ?></td>
                            <td><?php echo $dimensao3; ?></td>
                            <td><?php echo $geral; ?></td>
                            </tr> 
                    </tbody>
                </table>
                <!-- End List Atas-->
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <hr />
                    <a href="/index.php/simulacoes" type="button" class="btn btn-success">Nova simulação</a>
                <hr />
            </div>
        </div>

    </div>
