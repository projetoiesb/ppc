<?php echo validation_errors(); ?>

<!-- Page Content -->
<div class="container">

    <!-- Introduction Row -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Novo Professor</h1>
        </div>
    </div>
    
    <?php echo form_open("professores/create"); ?>
        <div class="row">
            <div class="col-lg-8">
                <label for="profNome">Nome: </label>
                <input type="text" required class="form-control" id="profNome" name="profNome" />
            </div>
            <div class="col-lg-4">
                <label for="profCpf">CPF: </label>
                <input type="text" required class="form-control" id="profCpf" name="profCpf" />
            </div>
            <div class="col-lg-6">
                <label for="profLink">Currículo Lattes (Link): </label>
                <input type="text" required class="form-control" id="profLink" name="profLink" />
            </div>
            <div class="col-lg-6">
                <label for="profCurriculoData">Data de atualização: </label>
                <input type="text" required class="form-control" id="profCurriculoData" name="profCurriculoData" />
            </div>
            <div class="col-lg-6">
                <label for="profTitulo">Maior Titulação: </label>
                <select required class="form-control" id="profTitulo" id="profNome" name="profTitulo" >
                    <option value="Especialista">Especialista</option>
                    <option value="Mestre">Mestre</option>
                    <option value="Doutor">Doutor</option>
                </select>
            </div>
            <div class="col-lg-6">
                <label for="profAreaForm">Área da maior titulação: </label>
                <select required class="form-control" id="profAreaForm" name="profAreaForm">
                    <option value="Ciências exatas">Ciências exatas</option>
                    <option value="Ciências humanas">Ciências humanas</option>
                    <option value="Ciências naturais">Ciências naturais</option>
                </select>
            </div>
            <div class="col-lg-6">
                <label for="profDataAdmissao">Data de admissão na IES: </label>
                <input type="text" required class="form-control" id="profDataAdmissao" name="profDataAdmissao" />
            </div>
            <div class="col-lg-6">
                <label for="profMatricula">Matricula: </label>
                <input type="text" required class="form-control" id="profMatricula" name="profMatricula" />
            </div>
            <div class="col-lg-3">
                <label for="profMembroNDE">Membro NDE? </label>
                <label class="radio-inline"><input type="radio" value="Não" checked name="profMembroNDE" >Não</label>
                <label class="radio-inline"><input type="radio" value="Sim" name="profMembroNDE" >Sim</label>
            </div>
            <div class="col-lg-3">
                <label for="profMembroCol">Membro Colegiado? </label>
                <label class="radio-inline"><input type="radio" value="Não" checked id="profMembroCol" name="profMembroCol" >Não</label>
                <label class="radio-inline"><input type="radio"  value="Sim" name="profMembroCol" >Sim</label>
            </div>
            <div class="col-lg-6">
                <label for="profMembroForma">Formação ou capacitação padagógica? </label>
                <label class="radio-inline"><input type="radio" value="Não" checked id="profMembroForma" name="profMembroForma" >Não</label>
                <label class="radio-inline"><input type="radio" value="Sim"  name="profMembroForma" >Sim</label>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="<?php echo base_url('index.php/professores') ?>" type="button" class="btn btn-danger">Cancelar</a>
                <input type="submit" id="btn-enviar" class="btn btn-primary btn-enviar" value="Enviar" />
            </div>
        </div>
    </form>
</div>