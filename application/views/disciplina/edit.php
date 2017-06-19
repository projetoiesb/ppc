<?php echo validation_errors(); ?>

<?php echo form_open(base_url('index.php/disciplinas/edit/').$discip_item[0]['discip_id']); ?>

<div>
    <div role="document">
        <div>
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Editar Disciplina</h4>
            </div>

            <div class="modal-body">
                    <input type="hidden" name="id" class="edit-id">
                    <fieldset>
                        <legend>Dados da Disciplina</legend>
                        <div class="form-group col-xs-12">
                            <label for="inputNomeDisciplina">Nome</label>
                            <input type="text"
                                   class="form-control"
                                   name="nome"
                                   placeholder=""
                                   value="<?php echo $discip_item[0]['discip_name']; ?>">
                        </div>

                        <div class="form-group col-xs-12">
                            <label for="inputDescricaoDisciplina">Descrição</label>
                            <textarea class="form-control"
                                      name="descricao"
                                      rows="3">
                                    <?php echo $discip_item[0]['discip_description']; ?>      
                            </textarea>
                            
                        </div>

                        <div class="form-group col-xs-3">
                            <label for="inputCodigoDisciplina">Código</label>
                            <input type="text"
                                   class="form-control"
                                   name="codigo"
                                   id="inputCodigoDisciplina"
                                   placeholder=""
                                   value="<?php echo $discip_item[0]['discip_code']; ?>">
                        </div>

                        <div class="form-group col-xs-6">
                            <label for="inputSemestreDisciplina">Semestre</label>
                            <input type="text"
                                   class="form-control"
                                   name="semestre"
                                   id="inputSemestreDisciplina"
                                   placeholder=""
                                   value="<?php echo $discip_item[0]['discip_semester']; ?>">
                        </div>

                        <div class="form-group col-xs-3">
                            <label for="inputCargaHorariaDisciplina">Carga horária</label>
                            <input type="text"
                                   class="form-control"
                                   name="carga_horaria"
                                   id="inputCargaHorariaDisciplina"
                                   placeholder=""
                                   value="<?php echo $discip_item[0]['discip_workload']; ?>">
                        </div>

                    </fieldset>
                    <a href="<?php echo base_url('index.php/disciplinas/') ?>" type="button" class="btn btn-danger">Cancelar</a>
                    <input type="submit" name="submit" value="Salvar atualizações" class="edit-submit-disciplina btn btn-primary"></input>
                    
            </div>              
        </div>
    </div>
</div>
</form>
