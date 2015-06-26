<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<html class="no-js" lang=""> <!--<![endif]-->

    <head lang="pt-BR">
        <meta charset="UTF-8">
        <meta name="description" content="Sistema Online de Gerenciamento Empresarial Fecomércio-PE">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="Hugo Santos - hugolcs@gmail.com">     
        <title>SEGOF-PE</title>

        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" href="css/bootstrap-theme.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body data-spy="scroll" data-target=".bs-docs-sidebar">
        <!-- Navbar
   ================================================== -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="?arquivo=principal.php">Fecomércio-PE</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="">
                                <a href="?arquivo=principal.php">Página inicial</a>
                            </li>
                            <li class="">
                                <a href="?arquivo=/contra-cheque/index.php">Contra Cheque</a>
                            </li>
                            <li class="">
                                <a href="?/getting-started.html">Espelho de Pontos</a>
                            </li>
                            <li class="">
                                <a href="?arquivo=atestado.php">Atestados Médicos</a>
                            </li>
                            <li class="">
                                <a href="?arquivo=atendimentos.php">Chamados Atendimentos</a>
                            </li>
                            <li class="">
                                <a href="?arquivo=contato.php">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Subhead
================================================== -->
        <header class="jumbotron subhead" id="overview">
            <div class="container">
                <h1>Intranet Fecomércio-PE</h1>
                <p class="lead">Federação do Comércio de Bens, Serviços e Turismo do Estado de Pernambuco</p>
            </div>
        </header>
        <div class="container">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span3">
                        <!-- Inicio do menu de navegação do site-->
                        <ul class="nav nav-list bs-docs-sidenav">
                            <li><a href="index.php"><i class="icon-chevron-right"></i>Página Incial</a></li>
                            <li><a href="contra-cheque/index.php"><i class="icon-chevron-right"></i> Contra Cheque</a></li>
                            <li><a href="atestado.php"><i class="icon-chevron-right"></i>Adestado Medico</a></li>
                        </ul>
                        <!-- Fim do menu de navegação do site-->
                    </div>
                    <div class="span9 principal">

                        <?php
                        if ($_GET["arquivo"] == "") {
                            require_once 'principal.php';
                        } else {
                            require_once ($_GET["arquivo"]);
                        }
                        ?>


                    </div>
                </div>
            </div>
            <hr>
            <footer>
                <p align="center"> &copy; Copyright 2000-2015 Fecomércio-PE</p>
            </footer>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>
