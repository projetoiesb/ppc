<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPC</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('css/round-about.css'); ?>" rel="stylesheet">

    <!-- JQuery UI -->
    <link href="<?php echo base_url('css/jquery-ui.css'); ?>" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>">Projeto PCC</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu Principal <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo base_url('index.php/atas'); ?>">Atas de Reunião</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/bibliografias'); ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Bibliografias</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/cursos'); ?>">Cursos</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/cronogramas'); ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cronogramas de Atividades</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/disciplinas'); ?>">Disciplinas</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/matrizes'); ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Matrizes Curriculares</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/planos'); ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Planos de Ensino</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/professores'); ?>"><span class="" aria-hidden="true"></span> Professores</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/ppcs'); ?>">Projetos Pedagógicos</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/simulacoes'); ?>">Simulação de avaliação de Cursos</a>
                                </li>
                            </ul>
                        <li>
                            <a href="index.php/sobre">Sobre</a>
                        </li>
                        <li>
                           <a href="Migrate">Database</a>
                        </li>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
