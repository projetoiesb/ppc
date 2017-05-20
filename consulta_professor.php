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
            <div class="col-xs-8">
                <form class="well">
                    <fieldset>
                        <div class="form-group col-xs-12">
                            <label for="maiorTitulacaoProfessor">Selecione um professor:</label>
                                <select class="form-control" name="maiorTitProfessor">
                                    <?php
                                        
                                        $conn = db_connect();
                                        // consulta a tabela professor
                                        $query = "SELECT ID, NOME, CPF, MAIORTITULACAO, AREAFORMACAO, LINKLATTES, DATAATUALIZACAO FROM PROFESSORES";
                                        $dados = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                        
                                        // transforma os dados em um array
                                        $linha = mysqli_fetch_assoc($dados);
                                        // calcula quantos dados retornaram
                                        $total = mysqli_num_rows($dados);
                                        
                                        // se o número de resultados for maior que zero, mostra os dados
                                        if($total > 0) {
                                        // inicia o loop que vai mostrar todos os dados
                                        do {
                                    ?>
                                        <option value="<?=$linha['ID']?>"><?=$linha['ID']?> - <?=$linha['NOME']?></option>
                                    <?php
                                        // finaliza o loop que vai mostrar os dados
                                        }while($linha = mysqli_fetch_assoc($dados));
                                        // fim do if 
                                        }
                                    ?>
                                </select>                        
                        </div>
                    </fieldset>    
                </form>
            </div>
            <div class="col-xs-4">
                <a href="cadastro_professor.php" type="button" class="btn btn-danger">Incluir novo</a>
                <input type="submit" form="professorForm" class="btn btn-primary" name="enviarProfessorForm" value="Consultar">
            </div>
        </div>
         
    </div>
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
