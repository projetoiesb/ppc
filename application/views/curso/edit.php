<h3>Nova discip</h3>

<?php echo validation_errors(); ?>

<?php echo form_open('cursos/edit/'.$curso_item[0]['curso_id']); ?>

    <p>ID: <?php echo $curso_item[0]['curso_id']; ?></p>

    <label for="cursoTipo">Tipo</label>
    <input type="text" name="cursoTipo" value="<?php echo $curso_item[0]['curso_type']; ?>"/><br />

    <label for="cursoModalidade">Modalidade</label>
    <textarea name="cursoModalidade"><?php echo $curso_item[0]['curso_modality']; ?></textarea><br />

    <label for="cursoNome">Nome</label>
    <input name="cursoNome" value="<?php echo $curso_item[0]['curso_name']; ?>"/><br />

    <label for="cursoHabilitacao">Habilitação</label>
    <input name="cursoHabilitacao" value="<?php echo $curso_item[0]['curso_license']; ?>"/><br />

    <label for="cursoLocal">Local de oferta</label>
    <input name="cursoLocal" value="<?php echo $curso_item[0]['curso_offerLocal']; ?>"/><br />

    <label for="cursoTurnos">Turnos</label>
    <input name="cursoTurnos" value="<?php echo $curso_item[0]['curso_turns']; ?>"/><br />

    <label for="cursoVagas">Vagas</label>
    <input type="number" name="cursoVagas" value="<?php echo $curso_item[0]['curso_vacancies']; ?>"/><br />

    <label for="cursoRegime">Regime letivo</label>
    <input name="cursoRegime" value="<?php echo $curso_item[0]['curso_workload']; ?>"/><br />

    <label for="cursoPeriodo">Periodos</label>
    <input name="cursoPeriodo" value="<?php echo $curso_item[0]['curso_periods']; ?>"/><br />

    <label for="cursoCoord">Coordenador</label>
    <select name="cursoCoord">
              <?php foreach($coordenador as $prof_item): ?>
                  <?php if($curso_item[0]['prof_id'] == $prof_item['prof_id']) { ?>
                           <option selected="selected" value="<?php echo $prof_item['prof_id']; ?>"><?php echo $prof_item['prof_name']; ?> </option>
                    <?php } else { ?>
                            <option value="<?php echo $prof_item['prof_id']; ?>"><?php echo $prof_item['prof_name']; ?> </option>
                    <?php } ?>
                  
              <?php endforeach; ?> 
    </select><br />



    <input type="submit" name="submit" value="Atualizar item" />

</form>
