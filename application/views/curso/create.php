<h3>Nova disciplina</h3>

<?php echo validation_errors(); ?>

<?php echo form_open('cursos/create'); ?>

    <label for="cursoTipo">Tipo do curso</label>
    <input type="text" name="cursoTipo" /><br />

    <label for="cursoModalidade">Modalidade</label>
    <input name="cursoModalidade" /><br />

    <label for="cursoNome">Denominação do curso</label>
    <input name="cursoNome"/><br />

    <label for="cursoHabilitacao">Habilitação</label>
    <input name="cursoHabilitacao"/><br />

    <label for="cursoLocal">Local de oferta</label>
    <input name="cursoLocal"/><br />

    <label for="cursoTurnos">Turnos de funcionamento</label>
    <input name="cursoTurnos"/><br />

    <label for="cursoVagas">Número de vagas para cada turno</label>
    <input type="number" name="cursoVagas"/><br />

    <label for="cursoCarga">Carga horária</label>
    <input type="number" name="cursoCarga"/><br />

    <label for="cursoRegime">Regime letivo</label>
    <input name="cursoRegime"/><br />

    <label for="cursoPeriodo">Períodos</label>
    <input name="cursoPeriodo"/><br />

    <label for="cursoCoord">Coordenador do curso</label>
    <select name="cursoCoord">
              <?php foreach($coordenador as $coord_item): ?>
                  <option value="<?php echo $coord_item['prof_id']; ?>"> <?php echo $coord_item['prof_name']; ?> </option> 
              <?php endforeach; ?> 
    </select><br />

    <input type="submit" name="submit" value="Criar" />

</form>
