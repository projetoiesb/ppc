<h3>Editar professor</h3>

<?php echo validation_errors(); ?>

<?php echo form_open('professores/edit/'.$professor_item[0]['prof_id']); ?>

    <p>ID: <?php echo $professor_item[0]['prof_id']; ?></p>

    <label for="profNome">Nome</label>
    <input name="profNome" value="<?php echo $professor_item[0]['prof_name']; ?>"/><br />

    <label for="profCpf">CPF</label>
    <input name="profCpf" value="<?php echo $professor_item[0]['prof_cpf']; ?>"/><br />

    <label for="profTitulo">Maior titulação</label>
    <input name="profTitulo" value="<?php echo $professor_item[0]['prof_greatTitle']; ?>"/><br />

    <label for="profAreaForm">Area de formação</label>
    <input name="profAreaForm" value="<?php echo $professor_item[0]['prof_areaFormation']; ?>"/><br />

    <label for="profLink">Link curriculum Lattes</label>
    <input type="url" name="profLink" value="<?php echo $professor_item[0]['prof_linkLattes']; ?>"/><br />

    <label for="profAtualiza">Ultima atualização</label>
    <input type="date" name="profAtualiza" value="<?php echo $professor_item[0]['prof_lastUpdate']; ?>"/><br />

    <input type="submit" name="submit" value="Atualizar" />

</form>
