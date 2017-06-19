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

                <?php echo validation_errors(); ?>

                <?php echo form_open('simulacoes/calculate', ['class' => 'well form-horizontal', 'id' => 'ataForm']); ?>

                <fieldset>
                    <legend>Dados do curso</legend>

                <h3 class="col-xs-12">Dimensão 1: Administração Acadêmica</h3>

                <div class="form-group col-xs-4">    
                    <label class="col-xs-8 control-label" for="avalComposicao">Composição do Núcleo Docente Estruturante – NDE</label>
                    <div class="input-group">
                        <select class="form-control" name="dim1[]">
                            <?php echo($options); ?>
                        </select>                         
                    </div>
                </div>

                <div class="form-group col-xs-4">
                    <label class="col-xs-8 control-label" for="ataLocal">Titulação do NDE</label>
                    <div class="input-group">
                        <select class="form-control" name="dim1[]">
                            <?php echo($options); ?>
                        </select>
                    </div>
                </div>

                <div class="form-group col-xs-4">
                    <label class="col-xs-8 control-label" for="ataLocal">Experiência profissional do NDE</label>
                    <div class="input-group">
                        <select class="form-control" name="dim1[]">
                            <?php echo($options); ?>
                        </select>
                    </div>
                </div>

                <div class="form-group col-xs-4">
                    <label class="col-xs-8 control-label" for="ataLocal">Regime de trabalho do NDE</label>
                    <div class="input-group">
                        <select class="form-control" name="dim1[]">
                            <?php echo($options); ?>
                        </select>
                    </div>
                </div>

                <div class="form-group col-xs-4">
                    <label class="col-xs-8 control-label" for="ataLocal">Titulação</label>
                    <div class="input-group">
                        <select class="form-control" name="dim1[]">
                            <?php echo($options); ?>
                        </select>
                    </div>
                </div>

                <div class="form-group col-xs-4">
                    <label class="col-xs-8 control-label" for="ataLocal">formação acadêmica e experiência do coordenador do curso</label>
                    <div class="input-group">
                        <select class="form-control" name="dim1[]">
                            <?php echo($options); ?>
                        </select>
                    </div>
                </div>

                <div class="form-group col-xs-4">
                    <label class="col-xs-8 control-label" for="ataLocal">Regime de trabalho do coordenador do curso</label>
                    <div class="input-group">
                        <select class="form-control" name="dim1[]">
                            <?php echo($options); ?>
                        </select>
                    </div>
                </div>

                <div class="form-group col-xs-4">
                    <label class="col-xs-8 control-label" for="ataLocal">Composição e funcionamento do colegiado de curso ou equivalente</label>
                    <div class="input-group">
                        <select class="form-control" name="dim1[]">
                            <?php echo($options); ?>
                        </select>
                    </div>
                </div>

                <h3 class="col-xs-12">Dimensão 2: Perfil dos Docentes</h3>

                <div class="form-group col-xs-4">
                    <label class="col-xs-8 control-label" for="ataLocal">Titulação do corpo docente</label>
                    <div class="input-group">
                        <select class="form-control" name="dim2[]">
                            <?php echo($options); ?>
                        </select>
                    </div>
                </div>

                <div class="form-group col-xs-4">
                    <label class="col-xs-8 control-label" for="ataLocal">Regime de trabalho do corpo docente</label>
                    <div class="input-group">
                        <select class="form-control" name="dim2[]">
                            <?php echo($options); ?>
                        </select>
                    </div>
                </div>

                <div class="form-group col-xs-4">
                    <label class="col-xs-8 control-label" for="ataLocal">Tempo de experiência de magistério superior ou experiência na educação profissional</label>
                    <div class="input-group">
                        <select class="form-control" name="dim2[]">
                            <?php echo($options); ?>
                        </select>
                    </div>
                </div>

                <div class="form-group col-xs-4">
                    <label class="col-xs-8 control-label" for="ataLocal">Tempo de experiência profissional do corpo docente (fora do magistério)</label>
                    <div class="input-group">
                        <select class="form-control" name="dim2[]">
                            <?php echo($options); ?>
                        </select>
                    </div>
                </div>

                <h3 class="col-xs-12">Dimensão 3: Condições de Trabalho</h3>

                <div class="form-group col-xs-4">
                    <label class="col-xs-8 control-label" for="ataLocal">Número de alunos por docente</label>
                    <div class="input-group">
                        <select class="form-control" name="dim3[]">
                            <?php echo($options); ?>
                        </select>
                    </div>
                </div>

                <div class="form-group col-xs-4">
                    <label class="col-xs-8 control-label" for="ataLocal">Número de alunos por turma em disciplina teórica</label>
                    <div class="input-group">
                        <select class="form-control" name="dim3[]">
                            <?php echo($options); ?>
                        </select>
                    </div>
                </div>

                <div class="form-group col-xs-4">
                    <label class="col-xs-8 control-label" for="ataLocal">Número médio de disciplinas por docente</label>
                    <div class="input-group">
                        <select class="form-control" name="dim3[]">
                            <?php echo($options); ?>
                        </select>
                    </div>
                </div>

                <div class="form-group col-xs-4">
                    <label class="col-xs-8 control-label" for="ataLocal">Pesquisa</label>
                    <div class="input-group">
                        <select class="form-control" name="dim3[]">
                            <?php echo($options); ?>
                        </select>
                    </div>
                </div>

                <div class="form-group col-xs-4">
                    <label class="col-xs-8 control-label" for="ataLocal">produção científica</label>
                    <div class="input-group">
                        <select class="form-control" name="dim3[]">
                            <?php echo($options); ?>
                        </select>
                    </div>
                </div>

                <div class="form-group col-xs-4">
                    <label class="col-xs-8 control-label" for="ataLocal">tecnológica</label>
                    <div class="input-group">
                        <select class="form-control" name="dim3[]">
                            <?php echo($options); ?>
                        </select>
                    </div>
                </div>


                </fieldset>
            </form>

            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <hr />
                    <a href="<?php echo base_url(); ?>" type="button" class="btn btn-danger">Cancelar</a>
                    <input type="submit" form="ataForm" class="btn btn-primary" value="Calcular">
                <hr />
            </div>
        </div>



    </div>
