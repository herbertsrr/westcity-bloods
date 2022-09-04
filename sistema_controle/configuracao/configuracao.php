<?php
$pathroot = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR;
$path = dirname(__FILE__) . DIRECTORY_SEPARATOR;

/* FAZ O LOADING DO ARQUIVO .ENV */
$dotenv = \Dotenv\Dotenv::createUnsafeImmutable($pathroot);
$dotenv->load();
$dotenv->required('AMBIENTE')->notEmpty();

$dotenv->required('SESSAO_LOGIN')->notEmpty();

$dotenv->required('BANCO_IP1')->notEmpty();
$dotenv->required('BANCO_IP2')->notEmpty();
$dotenv->required('BANCO_DB')->notEmpty();
$dotenv->required('BANCO_USUARIO')->notEmpty();
$dotenv->required('BANCO_SENHA')->notEmpty();
//-------------------------------------------------

//------------------------------------------------------
// constantes para uso em geral
require_once $path . 'base' . DIRECTORY_SEPARATOR . 'base.php';

//------------------------------------------------------
// constantes para o template
require_once $path . 'template' . DIRECTORY_SEPARATOR . 'template.php';

//------------------------------------------------------
// tratativa de excessão
require_once $path . 'exception' . DIRECTORY_SEPARATOR . 'exception.php';
?>
