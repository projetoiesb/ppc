<div class="container">
    <div class="row">
        <div class="col-xs-12">  

            <h3>Editar Projeto Petagógico do Curso</h3>

            <?php echo validation_errors(); ?>

            <?php echo form_open('/ppcs/edit/'.$ppc_item[0]['ppc_id'], ['class' => 'well', 'id' => 'ppcForm']); ?>

            <fieldset>
                <legend>Dados do PPC</legend>

                <div class="form-group row col-xs-12">
                <div class="form-group col-xs-4">
                    <label for="curso">Curso</label>
                    <select class="form-control" name="curso">
                        <?php foreach($curso as $curso_item): ?>
                            <?php if($ppc_item[0]['curso_id'] == $curso_item['curso_id']) { ?>
                                <option selected="selected" value="<?php echo $curso_item['curso_id']; ?>"><?php echo $curso_item['curso_name']; ?> </option>
                            <?php } else { ?>
                                <option value="<?php echo $curso_item['curso_id']; ?>"><?php echo $curso_item['curso_name']; ?> </option>
                            <?php } ?>
                        <?php endforeach; ?> 
                    </select>
                </div>
                </div>

                <div class="form-group col-xs-6">
                    <label for="ppcCursoPerfil">Perfil do curso</label>
                    <textarea class="form-control" name="ppcCursoPerfil" rows="5"><?php echo $ppc_item[0]['ppc_courseProfile']; ?></textarea>
                </div>

                <div class="form-group col-xs-6">
                    <label for="ppcEgressoPerfil">Perfil do egresso</label>
                    <textarea class="form-control" name="ppcEgressoPerfil" rows="5"><?php echo $ppc_item[0]['ppc_egressProfile']; ?></textarea>
                </div>

                <div class="form-group col-xs-6">
                    <label for="ppcAcessoCurso">Forma de acesso ao curso</label>
                    <textarea class="form-control" name="ppcAcessoCurso" rows="5"><?php echo $ppc_item[0]['ppc_courseAccess']; ?></textarea>
                </div>

                <div class="form-group col-xs-6">
                    <label for="ppcRepresentacao">Representação gráfica de um perfil de formação</label>
                    <textarea class="form-control" name="ppcRepresentacao" rows="5"><?php echo $ppc_item[0]['ppc_formation']; ?></textarea>
                </div>

                <div class="form-group col-xs-6">
                    <label for="ppcAvalEnsino">Avaliação do processo ensino-aprendizagem</label>
                    <textarea class="form-control" name="ppcAvalEnsino" rows="5"><?php echo $ppc_item[0]['ppc_teachingEvaluation']; ?></textarea>
                </div>

                <div class="form-group col-xs-6">
                    <label for="ppcAvalCurso">Avaliação do projeto do curso</label>
                    <textarea class="form-control" name="ppcAvalCurso" rows="5"><?php echo $ppc_item[0]['ppc_projectEvaluation']; ?></textarea>
                </div>

                <div class="form-group col-xs-12">
                    <label for="ppcPda">Politica de atendimento a pessoas com deficiência e/ou mobilidade reduzida</label>
                    <textarea class="form-control" name="ppcPda" rows="5"><?php echo $ppc_item[0]['ppc_pad']; ?></textarea>
                </div>

                <div class="form-group col-xs-6">
                    <label for="ppcTcc">Trabalho de conclusão de curso</label>
                    <input class="form-control" type="text" name="ppcTcc" value="<?php echo $ppc_item[0]['ppc_conclusion']; ?>"/>
                </div>

                <div class="form-group col-xs-6">
                    <label for="ppcEstagio">Estágio curricular</label>
                    <input class="form-control" type="text" name="ppcEstagio" value="<?php echo $ppc_item[0]['ppc_trainee']; ?>"/>
                </div>

            </fieldset>
        </form>

        <div class="row">
            <div class="col-xs-12">
                <hr />
                    <a href="/index.php" type="button" class="btn btn-danger">Cancelar</a>
                    <input type="submit" form="ppcForm" class="btn btn-primary" value="Salvar">
                <hr />
            </div>
        </div>

        </div>
    </div>
</div>
