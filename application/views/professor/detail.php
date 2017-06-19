<!-- Page Content -->
<div class="container">
    
    <!-- Identificação do Professor -->
    <div class="row">
        <div class="col-xs-12">
            <h1 class="page-header"><?php echo $professor_item[0]['prof_name'] ?></h1>
            
            <!-- Apresenta as informações -->
            <div class="row">
                <?php foreach ($professor_item as $item): ?>
                    <div class="col-md-4">        
                        <h4>CPF: <?php echo $item['prof_cpf']; ?></h4>
                    </div>
                    <div class="col-md-4">
                        <h4>Maior titulação: <?php echo $item['prof_greatTitle']; ?></h4>
                    </div>
                    <div class="col-md-4">
                        <h4>Área de formação: <?php echo $item['prof_areaFormation']; ?></h4>
                    </div>
                    <div class="col-md-8">
                        <h4>Curriculum Lattes: <a href="<?php echo $item['prof_linkLattes']; ?>"><?php echo $item['prof_linkLattes']; ?></a></h4>
                    </div>
                    <div class="col-md-4">
                        <h4>Atualizado em: <?php echo $item['prof_lastUpdate']; ?></h4>
                    </div>
                    <div class="col-md-4">
                        <h4>Matricula: <?php echo $item['prof_matricula']; ?></h4>
                    </div>
                    <div class="col-md-4">
                        <h4>Admitido em: <?php echo $item['prof_data_admissao']; ?></h4>
                    </div>
                    <div class="col-md-4">
                        <h4>Membro NDE? <?php echo $item['prof_membro_nde']; ?></h4>
                        <h4>Membro Colegiado? <?php echo $item['prof_membro_colegiado']; ?></h4>
                        <h4>Capacitado? <?php echo $item['prof_capacitado']; ?></h4>
                    </div>
                <?php endforeach; ?>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" >Editar</button>
            <a href="../delete/<?php echo $professor_item[0]['prof_id']; ?>" type="button" class="btn btn-danger">Apagar</a>
        </div>

        <!-- Modal de edição -->
        <div id="editModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" >
                        <button type="button" class="close" data-dismiss="modal" >&times;</button>
                        <h4 class="modal-title" >Editar</h4>
                    </div>
                    <div class="modal-body">
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('professores/edit/'.$professor_item[0]['prof_id']); ?>
                            <div class="row">
                                <div class="col-lg-8">
                                    <label for="profNome">Nome: </label>
                                    <input type="text" required class="form-control" value="<?php echo $professor_item[0]['prof_name']; ?>" id="profNome" name="profNome" />
                                </div>
                                <div class="col-lg-4">
                                    <label for="profCpf">CPF: </label>
                                    <input type="text" required class="form-control" value="<?php echo $professor_item[0]['prof_cpf']; ?>" id="profCpf" name="profCpf" />
                                </div>
                                <div class="col-lg-6">
                                    <label for="profLink">Currículo Lattes (Link): </label>
                                    <input type="text" required class="form-control" value="<?php echo $professor_item[0]['prof_linkLattes']; ?>" id="profLink" name="profLink" />
                                </div>
                                <div class="col-lg-6">
                                    <label for="profCurriculoData">Data de atualização: </label>
                                    <input type="text" required class="form-control" value="<?php echo $professor_item[0]['prof_lastUpdate']; ?>" id="profCurriculoData" name="profCurriculoData" />
                                </div>
                                <div class="col-lg-6">
                                    <label for="profTitulo">Maior Titulação: </label>
                                    <select required class="form-control" id="profTitulo" value="<?php echo $professor_item[0]['prof_greatTitle']; ?>" id="profNome" name="profTitulo" >
                                        <option value="Especialista" <?php echo ($professor_item[0]['prof_greatTitle'] === 'Especialista') ? 'selected' : '' ?> >Especialista</option>
                                        <option value="Mestre" <?php echo ($professor_item[0]['prof_greatTitle'] === 'Mestre') ? 'selected' : '' ?> >Mestre</option>
                                        <option value="Doutor" <?php echo ($professor_item[0]['prof_greatTitle'] === 'Doutor') ? 'selected' : '' ?> >Doutor</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="profAreaForm">Área da maior titulação: </label>
                                    <select required class="form-control"  id="profAreaForm" name="profAreaForm">
                                        <option value="Ciências exatas" <?php echo ($professor_item[0]['prof_areaFormation'] === 'Ciências exatas') ? 'selected' : '' ?> >Ciências exatas</option>
                                        <option value="Ciências humanas" <?php echo ($professor_item[0]['prof_areaFormation'] === 'Ciências humanas') ? 'selected' : '' ?> >Ciências humanas</option>
                                        <option value="Ciências naturais" <?php echo ($professor_item[0]['prof_areaFormation'] === 'Ciências naturais') ? 'selected' : '' ?> >Ciências naturais</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="profDataAdmissao">Data de admissão na IES: </label>
                                    <input type="text" required class="form-control" value="<?php echo $professor_item[0]['prof_data_admissao']; ?>" id="profDataAdmissao" name="profDataAdmissao" />
                                </div>
                                <div class="col-lg-6">
                                    <label for="profMatricula">Matricula: </label>
                                    <input type="text" required class="form-control" value="<?php echo $professor_item[0]['prof_matricula']; ?>" id="profMatricula" name="profMatricula" />
                                </div>
                                <div class="col-lg-3">
                                    <label for="profMembroNDE">Membro NDE? </label>
                                    <label class="radio-inline"><input type="radio" value="Não" <?php echo ($professor_item[0]['prof_membro_nde'] === 'Não') ? 'checked' : '' ?> name="profMembroNDE" >Não</label>
                                    <label class="radio-inline"><input type="radio" value="Sim" <?php echo ($professor_item[0]['prof_membro_nde'] === 'Sim') ? 'checked' : '' ?> name="profMembroNDE" >Sim</label>
                                </div>
                                <div class="col-lg-3">
                                    <label for="profMembroCol">Membro Colegiado? </label>
                                    <label class="radio-inline"><input type="radio" value="Não" <?php echo ($professor_item[0]['prof_membro_colegiado'] === 'Não') ? 'checked' : '' ?> name="profMembroCol" >Não</label>
                                    <label class="radio-inline"><input type="radio" value="Sim" <?php echo ($professor_item[0]['prof_membro_colegiado'] === 'Sim') ? 'checked' : '' ?> name="profMembroCol" >Sim</label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="profMembroForma">Formação ou capacitação padagógica? </label>
                                    <label class="radio-inline"><input type="radio" value="Não" <?php echo ($professor_item[0]['prof_capacitado'] === 'Não') ? 'checked' : '' ?> name="profMembroForma" >Não</label>
                                    <label class="radio-inline"><input type="radio" value="Sim" <?php echo ($professor_item[0]['prof_capacitado'] === 'Sim') ? 'checked' : '' ?> name="profMembroForma" >Sim</label>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="button" id="btn-cancelar" data-dismiss="modal" class="btn btn-default" value="Cancelar" />
                                    <input type="submit" id="btn-salva" data-dismiss="modal" class="btn btn-primary btn-salvar" value="Salvar" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Atividades na IES -->
        <div class="col-xs-12">
            <hr />
            <h3>Atividades</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertAtividadeModal" >Nova atividade</button>
        </div>
        <!-- Modal de cadastro de atividades -->
        <div id="insertAtividadeModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" >
                        <button type="button" class="close" data-dismiss="modal" >&times;</button>
                        <h4 class="modal-title" >Nova atividade</h4>
                    </div>
                    <div class="modal-body">
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('atividades/create/'.$professor_item[0]['prof_id']) ?>
                            <div class="row">
                                <div class="col-lg-10">
                                    <label for="ativNome">Atividade: (Tipo de atividade)</label>
                                    <input type="text" required class="form-control" id="ativNome" name="ativNome" />
                                </div>
                                <div class="col-lg-2">
                                    <label for="ativHoras">Horas: </label>
                                    <input type="text" required class="form-control" id="ativHoras" name="ativHoras" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" id="ativProfCpf" name="ativProfCpf" value="<?php echo $professor_item[0]['prof_cpf']; ?>" />
                                    <input type="text" id="ativProfId" name="ativProfId" value="<?php echo $professor_item[0]['prof_id']; ?>" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <hr />
                                    <input type="button" id="btn-cancelar" data-dismiss="modal" class="btn btn-default" value="Cancelar" />
                                    <input type="submit" id="btn-enviar-atividade" data-dismiss="" class="btn btn-primary btn-enviar-atividade" value="Enviar" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Tabela de atividades -->
        <div class="col-xs-12">   
            <table id="list-atividade" class="table table-striped">
                <thead>
                    <tr>
                        <th>Atividade</th>
                        <th>Horas</th>
                        <th>Editar/Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($atividade as $atividade_item): ?>
                    <tr>
                        <td><?php echo $atividade_item['ativ_nome']; ?></td>
                        <td><?php echo $atividade_item['ativ_horas']; ?></td>
                        <td>
                            <button 
                            <button type="button" class="btn btn-danger btn-sm" onclick="window.location.href = '<?php echo base_url('index.php/atividade/delete/'); echo $atividade_item['ativ_id']; ?>'" >
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Excluir
                            </button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <hr/>         
    </div>
</div>
