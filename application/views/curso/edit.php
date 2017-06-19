<div class="container">
    <div class="row">
        <div class="col-xs-12"> 

            <h3>Editar curso</h3>

            <?php echo validation_errors(); ?>

            <?php echo form_open('cursos/edit/'.$curso_item[0]['curso_id'], ['class' => 'well', 'id' => 'cursoForm']); ?>

            <fieldset>
                <legend>Dados do curso</legend>

                <div class="form-group col-xs-4">
                    <label for="cursoTipo">Tipo</label>
                    <input class="form-control" type="text" name="cursoTipo" value="<?php echo $curso_item[0]['curso_type']; ?>"/>
                </div>

                <div class="form-group col-xs-4">
                    <label for="cursoModalidade">Modalidade</label>
                    <input class="form-control" name="cursoModalidade" value="<?php echo $curso_item[0]['curso_modality']; ?>">
                </div>

                <div class="form-group col-xs-4">
                    <label for="cursoNome">Nome</label>
                    <input class="form-control" name="cursoNome" value="<?php echo $curso_item[0]['curso_name']; ?>"/>
                </div>

                <div class="form-group col-xs-4">
                    <label for="cursoHabilitacao">Habilitação</label>
                    <input class="form-control" name="cursoHabilitacao" value="<?php echo $curso_item[0]['curso_license']; ?>"/>
                </div>

                <div class="form-group col-xs-4">
                    <label for="cursoLocal">Local de oferta</label>
                    <input class="form-control" name="cursoLocal" value="<?php echo $curso_item[0]['curso_offerLocal']; ?>"/>
                </div>

                <div class="form-group col-xs-4">
                    <label for="cursoTurnos">Turnos</label>
                    <input class="form-control" name="cursoTurnos" value="<?php echo $curso_item[0]['curso_turns']; ?>"/>
                </div>

                <div class="form-group col-xs-3">
                    <label for="cursoVagas">Vagas por turno</label>
                    <input class="form-control" type="number" name="cursoVagas" value="<?php echo $curso_item[0]['curso_vacancies']; ?>"/>
                </div>

                <div class="form-group col-xs-2">
                    <label for="cursoCarga">Carga horária</label>
                    <input class="form-control" name="cursoCarga" value="<?php echo $curso_item[0]['curso_workload']; ?>"/>
                </div>

                <div class="form-group col-xs-4">
                    <label for="cursoRegime">Regime letivo</label>
                    <input class="form-control" name="cursoRegime" value="<?php echo $curso_item[0]['curso_regime']; ?>"/>
                </div>

                <div class="form-group col-xs-3">
                    <label for="cursoPeriodo">Periodos</label>
                    <input class="form-control" name="cursoPeriodo" value="<?php echo $curso_item[0]['curso_periods']; ?>"/>
                </div>

                <div class="form-group col-xs-4">
                    <label for="cursoCoord">Coordenador</label>
                    <select class="form-control" name="cursoCoord">
                        <?php foreach($coordenador as $prof_item): ?>
                        <?php if($curso_item[0]['prof_id'] == $prof_item['prof_id']) { ?>
                            <option selected="selected" value="<?php echo $prof_item['prof_id']; ?>"><?php echo $prof_item['prof_name']; ?> </option>
                        <?php } else { ?>
                            <option value="<?php echo $prof_item['prof_id']; ?>"><?php echo $prof_item['prof_name']; ?> </option>
                        <?php } ?>              
                        <?php endforeach; ?> 
                    </select>
                </div>
            </fieldset>
        </form>

        <div class="row">
            <div class="col-xs-12">
                <hr />
                    <a href="<?php echo base_url('index.php/cursos') ?>" type="button" class="btn btn-danger">Cancelar</a>
                    <input type="submit" form="cursoForm" class="btn btn-primary" value="Salvar">
                <hr />
            </div>
        </div>
    </div>
</div>
