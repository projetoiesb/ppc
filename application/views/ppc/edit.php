<h3>Nova discip</h3>

<?php echo validation_errors(); ?>

<?php echo form_open('ppcs/edit/'.$ppc_item[0]['ppc_id']); ?>

    <p>ID: <?php echo $ppc_item[0]['ppc_id']; ?></p>

    <select name="curso">
              <?php foreach($curso as $curso_item): ?>
                  <?php if($ppc_item[0]['curso_id'] == $curso_item['curso_id']) { ?>
                           <option selected="selected" value="<?php echo $curso_item['curso_id']; ?>"><?php echo $curso_item['curso_name']; ?> </option>
                    <?php } else { ?>
                            <option value="<?php echo $curso_item['curso_id']; ?>"><?php echo $curso_item['curso_name']; ?> </option>
                    <?php } ?>
                  
              <?php endforeach; ?> 
    </select><br />


    <label for="ppcCursoPerfil">Perfil do curso</label>
    <textarea name="ppcCursoPerfil"><?php echo $ppc_item[0]['ppc_courseProfile']; ?></textarea><br />

    <label for="ppcEgressoPerfil">Perfil do egresso</label>
    <textarea name="ppcEgressoPerfil"><?php echo $ppc_item[0]['ppc_egressProfile']; ?></textarea><br />

    <label for="ppcAcessoCurso">Forma de acesso ao curso</label>
    <textarea name="ppcAcessoCurso"><?php echo $ppc_item[0]['ppc_courseAccess']; ?></textarea><br />

    <label for="ppcRepresentacao">Representação gráfica de um perfil de formação</label>
    <textarea name="ppcRepresentacao"><?php echo $ppc_item[0]['ppc_formation']; ?></textarea><br />

    <label for="ppcAvalEnsino">Sistema de avaliação do processo Ensino-Aprendizagem</label>
    <textarea name="ppcAvalEnsino"><?php echo $ppc_item[0]['ppc_teachingEvaluation']; ?></textarea><br />

    <label for="ppcAvalCurso">Sistema de avaliação do projeto do curso</label>
    <textarea name="ppcAvalCurso"><?php echo $ppc_item[0]['ppc_projectEvaluation']; ?></textarea><br />

    <label for="ppcTcc">Trabalho de conclusão de curso</label>
    <input type="text" name="ppcTcc" value="<?php echo $ppc_item[0]['ppc_conclusion']; ?>"/><br />

    <label for="ppcEstagio">Estágio curricular</label>
    <input type="text" name="ppcEstagio" value="<?php echo $ppc_item[0]['ppc_trainee']; ?>"/><br />

    <label for="ppcPda">Politica de atendimento a pessoas com deficiência e/ou mobilidade reduzida</label>
    <textarea name="ppcPda"><?php echo $ppc_item[0]['ppc_pad']; ?></textarea><br />

    <input type="submit" name="submit" value="Atualizar item" />

</form>
