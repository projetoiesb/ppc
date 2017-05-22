<h3>Nova ata</h3>

<?php echo validation_errors(); ?>

<?php echo form_open('atas/edit/'.$ata_item[0]['ata_id']); ?>

    <p>ID: <?php echo $ata_item[0]['ata_id']; ?></p>

    <label for="ataData">Data</label>
    <input type="date" name="ataData" value="<?php echo $ata_item[0]['ata_date']; ?>"/><br />

    <label for="ataLocal">Local</label>
    <input name="ataLocal" value="<?php echo $ata_item[0]['ata_local']; ?>" /><br />

    <label for="ataPartic">Participantes</label>
    <textarea name="ataPartic"><?php echo $ata_item[0]['ata_participants']; ?></textarea><br />

    <label for="ataDelib">Deliberação</label>
    <textarea name="ataDelib"><?php echo $ata_item[0]['ata_deliberations']; ?></textarea><br />

    <input type="submit" name="submit" value="Atualizar item" />

</form>
