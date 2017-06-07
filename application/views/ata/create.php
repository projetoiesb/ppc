<div class="container">
    <div class="row">
        <div class="col-xs-12">   

            <h3>Nova ata</h3>

            <?php echo validation_errors(); ?>

            <?php echo form_open('atas/create', ['class' => 'well', 'id' => 'ataForm']); ?>

                <fieldset>
                    <legend>Dados da ata</legend>

                <div class="form-group col-xs-3">
                    <label for="ataData">Data</label>
                    <input class="form-control" type="date" name="ataData" />
                </div>

                <div class="form-group col-xs-9">
                    <label for="ataLocal">Local</label>
                    <input class="form-control" name="ataLocal" />
                </div>

                <div class="form-group col-xs-12">    
                    <label for="ataPartic">Participantes</label>
                    <textarea class="form-control" name="ataPartic"></textarea>
                </div>

                <div class="form-group col-xs-12">
                    <label for="ataDelib">Deliberação</label>
                    <textarea class="form-control" rows="5" name="ataDelib"></textarea>
                </div>
                </fieldset>
            </form>

        <div class="row">
            <div class="col-xs-12">
                <hr />
                    <a href="<?php echo base_url("atas"); ?>" type="button" class="btn btn-danger">Cancelar</a>
                    <input type="submit" form="ataForm" class="btn btn-primary" value="Salvar">
                <hr />
            </div>
        </div>

        </div>
    </div>
</div>
