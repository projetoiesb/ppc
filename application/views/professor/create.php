<h3>Novo Professor</h3>

<?php echo validation_errors(); ?>

<?php echo form_open('professores/create'); ?>

    <label for="profNome">Nome</label>
    <input name="profNome" /><br />

    <label for="profCpf">CPF</label>
    <input name="profCpf" /><br />

    <label for="profTitulo">Maior titulação</label>
    <input name="profTitulo" /><br />

    <label for="profAreaForm">Area de formação</label>
    <input name="profAreaForm" /><br />

    <label for="profLink">Link curriculum Lattes</label>
    <input type="url" name="profLink" /><br />

    <label for="profAtualiza">Ultima atualização</label>
    <input type="date" name="profAtualiza" /><br />

    <input type="submit" name="submit" value="Criar" />

</form>
