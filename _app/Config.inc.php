<?php

//BASE DO SITE
define('SERVERURL', 'http://localhost/OTPanel/');   //ENDEREÇO DO PAINEL
define('SERVERNAME', 'OTPanel');                    //NOME DO SERVIDOR

// CONFIGRAÇÕES DO SITE ####################
define('HOST', 'localhost');//HOST DO BANCO DE DADOS 
define('USER', 'root');     //USUARIO DO BANCO DE DADOS
define('PASS', '');         //SENHA DO BANCO DE DADOS
define('DBSA', '');         //NOME DO BANCO DE DADOS

function __autoload($Class){
		$cDir = ['Conn', 'Helpers', 'Models', '_models'];
		$iDir = null;

		foreach ($cDir as $dirName):
			if(!$iDir && file_exists(__DIR__ . DIRECTORY_SEPARATOR . $dirName . DIRECTORY_SEPARATOR . $Class . '.class.php') && !is_dir(__DIR__ . DIRECTORY_SEPARATOR . $dirName . DIRECTORY_SEPARATOR . $Class . '.class.php')):
				include_once(__DIR__ . DIRECTORY_SEPARATOR . $dirName . DIRECTORY_SEPARATOR . $Class . '.class.php');
				$iDir = true;
			endif;
		endforeach;

		if (!$iDir):
			echo "<b>Erro ao incluir:</b> {$Class}.class.php";
			die;
		endif;
	}

//
// TRATAMENTO DE ERROS #####################
//CSS constantes :: Mensagens de Erro
define('WS_ACCEPT', 'accept');
define('WS_INFOR', 'infor');
define('WS_ALERT', 'alert');
define('WS_ERROR', 'error');

//WSErro :: Exibe erros lançados :: Front
function WSErro($ErrMsg, $ErrNo, $ErrDie = null) {
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
    echo "<p class=\"trigger {$CssClass}\">{$ErrMsg}<span class=\"ajax_close\"></span></p>";

    if ($ErrDie):
        die;
    endif;
}

//PHPErro :: personaliza o gatilho do PHP
function PHPErro($ErrNo, $ErrMsg, $ErrFile, $ErrLine) {
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
    echo "<p class=\"trigger {$CssClass}\">";
    echo "<b>Erro na Linha: #{$ErrLine} ::</b> {$ErrMsg}<br>";
    echo "<small>{$ErrFile}</small>";
    echo "<span class=\"ajax_close\"></span></p>";

    if ($ErrNo == E_USER_ERROR):
        die;
    endif;
}

set_error_handler('PHPErro');

