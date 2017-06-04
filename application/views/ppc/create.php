<div class="container">
    <div class="row">
        <div class="col-xs-12">   

            <h3>Novo PPC</h3>

            <?php echo validation_errors(); ?>

            <?php echo form_open('ppcs/create', ['class' => 'well', 'id' => 'ppcForm']); ?>

            <fieldset>
                <legend>Dados do PPC</legend>
    
                <div class="form-group row col-xs-12">
                <div class="form-group col-xs-4">
                    <label for="curso">Curso</label>
                    <select class="form-control" name="curso">
                        <?php foreach($curso as $curso_item): ?>
                            <option value="<?php echo $curso_item['curso_id']; ?>"> <?php echo $curso_item['curso_name']; ?> </option> 
                        <?php endforeach; ?> 
                    </select>
                </div>
                </div>

                <div class="form-group col-xs-6">
                    <label for="ppcCursoPerfil">Perfil do curso</label>
                    <textarea class="form-control" name="ppcCursoPerfil" rows="5"></textarea>
                </div>

                <div class="form-group col-xs-6">
                    <label for="ppcEgressoPerfil">Perfil do egresso</label>
                    <textarea class="form-control" name="ppcEgressoPerfil" rows="5"></textarea>
                </div>

                <div class="form-group col-xs-6">
                    <label for="ppcAcessoCurso">Forma de acesso ao curso</label>
                    <textarea class="form-control" name="ppcAcessoCurso" rows="5"></textarea>
                </div>

                <div class="form-group col-xs-6">
                    <label for="ppcRepresentacao">Representação gráfica de um perfil de formação</label>
                    <textarea class="form-control" name="ppcRepresentacao" rows="5"></textarea>
                </div>

                <div class="form-group col-xs-6">
                    <label for="ppcAvalEnsino">Avaliação do processo ensino-aprendizagem</label>
                    <textarea class="form-control" name="ppcAvalEnsino" rows="5"></textarea>
                </div>

                <div class="form-group col-xs-6">
                    <label for="ppcAvalCurso">Avaliação do projeto do curso</label>
                    <textarea class="form-control" name="ppcAvalCurso" rows="5"></textarea>
                </div>

                <div class="form-group col-xs-12">
                    <label for="ppcPda">Politica de atendimento a pessoas com deficiência e/ou mobilidade reduzida</label>
                    <textarea class="form-control" name="ppcPda" rows="5"></textarea>
                </div>

                <div class="form-group col-xs-6">
                    <label for="ppcTcc">Trabalho de conclusão de curso</label>
                    <input class="form-control" type="text" name="ppcTcc"/>
                </div>

                <div class="form-group col-xs-6">
                    <label for="ppcEstagio">Estágio curricular</label>
                    <input class="form-control" type="text" name="ppcEstagio"/>
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
