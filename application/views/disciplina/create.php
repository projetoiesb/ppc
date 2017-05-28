<h3>Nova disciplina</h3>

<?php echo validation_errors(); ?>

<?php echo form_open('disciplinas/create'); ?>

    <label for="discipNome">Nome</label>
    <input type="text" name="discipNome" /><br />

    <label for="discipDesc">Descrição</label>
    <input name="discipDesc" /><br />

    <label for="discipCod">Código</label>
    <input name="discipCod"/><br />

    <label for="discipSemestre">Semestre</label>
    <input name="discipSemestre"/><br />

    <label for="discipCarga">Carga horária</label>
    <input type="number" name="discipCarga"/><br />

    <input type="submit" name="submit" value="Criar" />

</form>
