<?php
/**
 * Constantes relacionadas ao Projeto
 */
define('MANUTENCAO', false);
define('PRODUCAO', getenv('AMBIENTE'));


/**
 * Constantes relacionadas a SESSAO
 */
define('SESSAO_LOGIN', getenv('SESSAO_LOGIN'));


/**
 * Constantes relacionadas ao Banco de Dados.
 */
define('BANCO_IP1', getenv('BANCO_IP1'));
define('BANCO_IP2', getenv('BANCO_IP2'));
define('BANCO_DB', getenv('BANCO_DB'));
define('BANCO_USUARIO', getenv('BANCO_USUARIO'));
define('BANCO_SENHA', getenv('BANCO_SENHA'));


/**
 * Constantes relacionadas ao Projeto.
 */
define('PROJETO_RAIZ', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);
define('PROJETO_NOME', 'SCL - Sistema Credluz');
define('PROJETO_HTTP', 'http://');
define('PROJETO_HOST', 'bloods.westcity.local');
define('PROJETO_BASE_URL', PROJETO_HTTP . PROJETO_HOST);