<h3>Nova disciplina</h3>

<?php echo validation_errors(); ?>

<?php echo form_open('ppcs/create'); ?>

    <label for="curso">Curso</label>
    <select name="curso">
              <?php foreach($curso as $curso_item): ?>
                  <option value="<?php echo $curso_item['curso_id']; ?>"> <?php echo $curso_item['curso_name']; ?> </option> 
              <?php endforeach; ?> 
    </select><br />


    <label for="ppcCursoPerfil">Perfil do curso</label>
    <textarea name="ppcCursoPerfil"></textarea><br />

    <label for="ppcEgressoPerfil">Perfil do egresso</label>
    <textarea name="ppcEgressoPerfil" ></textarea><br />

    <label for="ppcAcessoCurso">Forma de acesso ao curso</label>
    <textarea name="ppcAcessoCurso"></textarea><br />

    <label for="ppcRepresentacao">Representação gráfica de um perfil de formação</label>
    <textarea name="ppcRepresentacao"></textarea><br />

    <label for="ppcAvalEnsino">Sistema de avaliação do processo Ensino-Aprendizagem</label>
    <textarea name="ppcAvalEnsino"></textarea><br />

    <label for="ppcAvalCurso">Sistema de avaliação do projeto do curso</label>
    <textarea name="ppcAvalCurso"></textarea><br />

    <label for="ppcTcc">Trabalho de conclusão de curso</label>
    <input type="text" name="ppcTcc"/><br />

    <label for="ppcEstagio">Estágio curricular</label>
    <input type="text" name="ppcEstagio"/><br />

    <label for="ppcPda">Politica de atendimento a pessoas com deficiência e/ou mobilidade reduzida</label>
    <textarea name="ppcPda"></textarea><br />

    <input type="submit" name="submit" value="Criar" />

</form>
