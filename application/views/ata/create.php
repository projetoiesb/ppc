<div class="container">
    <div class="row">
        <div class="col-xs-12">   

            <h3>Ata</h3>

            <?php echo validation_errors(); ?>

            <?php echo form_open('atas/create', ['class' => 'well']); ?>

                <fieldset>
                    <legend>Nova ata</legend>

                    <label for="ataData">Data</label>
                    <input class="form-control" type="date" name="ataData" /><br />

                    <label for="ataLocal">Local</label>
                    <input class="form-control" name="ataLocal" /><br />
    
                    <label for="ataPartic">Participantes</label>
                    <textarea class="form-control" name="ataPartic"></textarea><br />

                    <label for="ataDelib">Deliberação</label>
                    <textarea class="form-control" name="ataDelib"></textarea><br />

                    <input type="submit" class="btn btn-primary" name="submit" value="Criar" />

                </fieldset>

            </form>

        </div>
    </div>
</div>
