<!DOCTYPE html>

<!---
Tela: de Cadastro de Professor
Autor: Vinícius Barth
  --->

<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="css/round-about.css" rel="stylesheet">  
    <title>Cadastro de Professor</title>
</head>
<body>
    <?php require_once('crud_professor.php');?>
    <?php include 'navbar.html'; ?>
    
    <?php                      
    
    if(isset($_POST['enviarProfessorForm'])) {
        
        // variáveis recebem os valores do formulário
        $nome = $_POST['nomeProfessor'];
        $cpf = $_POST['cpfProfessor'];
        $maiorTit = $_POST['maiorTitProfessor'];
        $area = $_POST['areaFormacaoProfessor'];
        $link = $_POST['linkLattesProfessor'];
        $ult = $_POST['dataUltAtualizacaoProfessor'];
        
        
        // Se não estiverem vazias...
        if (!$nome="" || !$cpf="" || !$maiorTit="" || !$area="" || !$link="" || !$ult="") {
            // prepara a String com o camando SQL
            $sql_final = "INSERT INTO PROFESSORES (NOME, CPF, MAIORTITULACAO, AREAFORMACAO, LINKLATTES, DATAATUALIZACAO) VALUES ('$nome', '$cpf', '$maiorTit', '$area', '$link', '$ult')";
            
            // chama a função para inserir, passando a String com os comandos
            insert_professor($sql_final);
            unset($_POST['enviarProfessorForm']);
        } else {
            echo "erro na inclusão de professor!";
        }
        
    }
    ?>
    
    <!-- Page Content -->
    <div class="container">
        <!-- Identificação do Curso -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Cadastro de Professor</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">        
                <form id="professorForm" class="well" method="POST" enctype="multipart/form-data" action="">
                    <fieldset>
                        <legend>Dados Pessoais</legend>
                    <div class="form-group col-xs-8">
                        <label for="nomeProfessor">Nome</label>
                        <input type="text" class="form-control" name="nomeProfessor" placeholder="nome completo">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="cpfProfessor">CPF</label>
                        <input type="text" class="form-control" name="cpfProfessor" placeholder="">
                    </div>

                    <div class="form-group col-xs-6">
                        <label for="maiorTitulacaoProfessor">Maior Titulação</label>
<!--                        <input type="text" class="form-control" id="maiorTitulacaoprofessor" placeholder="">-->
                            <select class="form-control" name="maiorTitProfessor">
                                <option value="Graduação">Graduação</option>
                                <option value="Especialização Lato Sensu">Especialização Lato Sensu</option>
                                <option value="Especialização Stricto Sensu">Especialização Stricto Sensu</option>
                                <option value="Mestrado">Mestrado</option>
                                <option value="Doutorado">Doutorado</option>
                                <option value="Pós-Doutorado">Pós-Doutorado</option>
                            </select>
                    </div>

                    <div class="form-group col-xs-6">
                        <label for="areaFormacaoProfessor">Área de Formação</label>
                        <input type="text" class="form-control" name="areaFormacaoProfessor" placeholder="">
                    </div>

                    <div class="form-group col-xs-8">
                        <label for="linkLattesProfessor">Curriculum Lattes (link)</label>
                        <input type="url" class="form-control" name="linkLattesProfessor" placeholder="https://www.url.com.br">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="dataAtualizacaoProfessor">Data da última atualização</label>
                        <input type="date" class="form-control" name="dataUltAtualizacaoProfessor" placeholder="">
                    </div>
                    </fieldset>

                </form>
            </div>
        </div>
    
        <div class="row">
            <div class="col-xs-12">
                <hr />
                    <a href="index.php" type="button" class="btn btn-danger">Cancelar</a>
                    <input type="submit" form="professorForm" class="btn btn-primary" name="enviarProfessorForm" value="Salvar">
                <hr />
            </div>
        </div>
            
    </div>
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
