<div class="container">
    <div class="row">
        <div class="col-xs-12">   

            <h3>Novo curso</h3>

            <?php echo validation_errors(); ?>

            <?php echo form_open('cursos/create', ['class' => 'well', 'id' => 'cursoForm']); ?>

            <fieldset>
                <legend>Dados do curso</legend>

                <div class="form-group col-xs-4">
                    <label for="cursoTipo">Tipo do curso</label>
                    <input class="form-control" type="text" name="cursoTipo" />
                </div>

                <div class="form-group col-xs-4">
                    <label for="cursoModalidade">Modalidade</label>
                    <input class="form-control" name="cursoModalidade" />
                </div>

                <div class="form-group col-xs-4">
                    <label for="cursoNome">Denominação do curso</label>
                    <input class="form-control" name="cursoNome"/>
                </div>

                <div class="form-group col-xs-4">
                    <label for="cursoHabilitacao">Habilitação</label>
                    <input class="form-control" name="cursoHabilitacao"/>
                </div>

                <div class="form-group col-xs-4">
                    <label for="cursoLocal">Local de oferta</label>
                    <input class="form-control" name="cursoLocal"/>
                </div>

                <div class="form-group col-xs-4">
                    <label for="cursoTurnos">Turnos de funcionamento</label>
                    <input class="form-control" name="cursoTurnos"/>
                </div>

                <div class="form-group col-xs-3">
                    <label for="cursoVagas">Número de vagas por turno</label>
                    <input class="form-control" type="number" name="cursoVagas"/>
                </div>

                <div class="form-group col-xs-2">
                    <label for="cursoCarga">Carga horária</label>
                    <input class="form-control" type="number" name="cursoCarga"/>
                </div>

                <div class="form-group col-xs-4">
                    <label for="cursoRegime">Regime letivo</label>
                    <input class="form-control" name="cursoRegime"/>
                </div>

                <div class="form-group col-xs-3">
                    <label for="cursoPeriodo">Períodos</label>
                    <input class="form-control" name="cursoPeriodo"/>
                </div>

                <div class="form-group col-xs-4">
                    <label for="cursoCoord">Coordenador do curso</label>
                    <select class="form-control" name="cursoCoord">
                        <?php foreach($coordenador as $coord_item): ?>
                            <option value="<?php echo $coord_item['prof_id']; ?>"> <?php echo $coord_item['prof_name']; ?> </option> 
                        <?php endforeach; ?> 
                    </select>
                </div>

            </fieldset>
        </form>

        <div class="row">
            <div class="col-xs-12">
                <hr />
                    <a href="index.php" type="button" class="btn btn-danger">Cancelar</a>
                    <input type="submit" form="cursoForm" class="btn btn-primary" value="Salvar">
                <hr />
            </div>
        </div>
    </div>
</div>


