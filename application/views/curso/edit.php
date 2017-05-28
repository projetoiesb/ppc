<h3>Nova discip</h3>

<?php echo validation_errors(); ?>

<?php echo form_open('disciplinas/edit/'.$discip_item[0]['discip_id']); ?>

    <p>ID: <?php echo $discip_item[0]['discip_id']; ?></p>

    <label for="discipNome">Nome</label>
    <input type="text" name="discipNome" value="<?php echo $discip_item[0]['discip_name']; ?>"/><br />

    <label for="discipDesc">Descrição</label>
    <textarea name="discipDesc"><?php echo $discip_item[0]['discip_description']; ?></textarea><br />

    <label for="discipCod">Código</label>
    <input name="discipCod" value="<?php echo $discip_item[0]['discip_code']; ?>"/><br />

    <label for="discipSemestre">Semestre</label>
    <input name="discipSemestre" value="<?php echo $discip_item[0]['discip_semester']; ?>"/><br />

    <label for="discipCarga">Carga Horária</label>
    <input type="number" name="discipCarga" value="<?php echo $discip_item[0]['discip_workload']; ?>"/><br />

    <input type="submit" name="submit" value="Atualizar item" />

</form>
