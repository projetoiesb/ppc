<h3>Nova ata</h3>

<?php echo validation_errors(); ?>

<?php echo form_open('atas/create'); ?>

    <label for="ataData">Data</label>
    <input type="date" name="ataData" /><br />

    <label for="ataLocal">Local</label>
    <input name="ataLocal" /><br />

    <label for="ataPartic">Participantes</label>
    <textarea name="ataPartic"></textarea><br />

    <label for="ataDelib">Deliberação</label>
    <textarea name="ataDelib"></textarea><br />

    <input type="submit" name="submit" value="Create ata item" />

</form>
