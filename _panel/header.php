<?php

session_start();
require('../_app/Config.inc.php');

$login = new Login(3);
$logoff = filter_input(INPUT_GET, 'logoff', FILTER_VALIDATE_BOOLEAN);
$getexe = filter_input(INPUT_GET, 'exe', FILTER_DEFAULT);

if (!$login->CheckLogin()):
    unset($_SESSION['userlogin']);
    header('Location: index.php?exe=restrito');
else:
    $userlogin = $_SESSION['userlogin'];
endif;

if ($logoff):
    unset($_SESSION['userlogin']);
    header('Location: index.php?exe=logoff');
endif;


?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo SERVERDESC?>">
        <meta name="author" content="Felipe Muniz">

        <title><?php echo SERVERNAME?></title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="painel.php"><?php echo SERVERNAME?></a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li>
                        <a href="<?php echo SERVERURL ?>" target="_blank" class="fl-r" >
                            <span class="glyphicon glyphicon-home pull-left" style="left: -3px;"></span>Abrir site</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Felipe Muniz <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-gear"></i> Configurações</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="logof.php"><i class="fa fa-fw fa-power-off"></i> Deslogar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="painel.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>

                        <li>
                            <a aria-expanded="false" class="collapsed" href="javascript:;" data-toggle="collapse" data-target="#gen">
                                <i class="fa fa-fw fa-list"></i> TESTE <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul style="height: 0px;" aria-expanded="false" id="gen" class="collapse">
                                <li><a href="painel.php?exe=addgen">TESTE</a></li>
                                <li><a href="painel.php?exe=gen">TESTE</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a aria-expanded="false" class="collapsed" href="javascript:;" data-toggle="collapse" data-target="#acc">
                                <i class="fa fa-fw fa-user"></i> Contas <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul style="height: 0px;" aria-expanded="false" id="acc" class="collapse">
                                <li><a href="painel.php?exe=accounts">Contas</a></li>
                                <li><a href="painel.php?exe=vipaccounts">Contas vips</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a aria-expanded="false" class="collapsed" href="javascript:;" data-toggle="collapse" data-target="#players">
                                <i class="fa fa-fw fa-users"></i> Players <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul style="height: 0px;" aria-expanded="false" id="players" class="collapse">
                                <li><a href="painel.php?exe=players">Players</a></li>
                            </ul>
                        </li>
                        
                        
                        
                   
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>