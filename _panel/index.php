<?php
session_start();
require('../_app/Config.inc.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Login do Painel">
        <meta name="author" content="Felipe Muniz">
        <title>Login Painel</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">
    </head>
    <body>
        <div class="col-lg-2" align="center" style=" margin: 200px auto;
             float: none;">
                
                 <?php
                $login = new Login(3);

                if ($login->CheckLogin()):
                    header('Location: painel.php');
                endif;

                $dataLogin = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                if (!empty($dataLogin['AdminLogin'])):

                    $login->ExeLogin($dataLogin);
                    if (!$login->getResult()):
                        WSErro($login->getError()[0], $login->getError()[1]);
                    else:
                        header('Location: painel.php');
                    endif;

                endif;

                $get = filter_input(INPUT_GET, 'exe', FILTER_DEFAULT);
                if (!empty($get)):
                    if ($get == 'restrito'):
                        WSErro('<b>Oppsss:</b> Acesso negado. Favor efetue login para acessar o painel!', WS_ALERT);
                    elseif ($get == 'logoff'):
                        WSErro('<b>Sucesso ao deslogar:</b> Sua sessão foi finalizada. Volte sempre!', WS_ACCEPT);
                    endif;
                endif;
                ?>

                <form name="AdminLoginForm" action="" method="post">
                    <label>
                        <span>E-mail:</span>
                        <input type="email" name="user" />
                    </label>

                    <label>
                        <span>Senha:</span>
                        <input type="password" name="pass" />
                    </label>  

                    <input type="submit" name="AdminLogin" value="Logar" class="btn blue" />

                </form>
            
        </div> <!-- /container -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>

    
</html>