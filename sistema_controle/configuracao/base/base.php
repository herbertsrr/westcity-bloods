<?php
define('MANUTENCAO', false);

if (getenv('AMBIENTE') == '1'):
    define('PRODUCAO', true);
else:
    define('PRODUCAO', false);
endif;


/**
 * Constantes relacionadas as APIs
 */
define('API_LOGIN_HTTP', getenv('API_LOGIN_HTTP'));
define('API_LOGIN_HOST', filter_var(getenv('API_LOGIN_HOST'), FILTER_VALIDATE_DOMAIN));
define('API_LOGIN_PORTA', getenv('API_LOGIN_PORTA'));

define('API_PROCESSOS_HTTP', getenv('API_PROCESSOS_HTTP'));
define('API_PROCESSOS_HOST', filter_var(getenv('API_PROCESSOS_HOST'), FILTER_VALIDATE_DOMAIN));
define('API_PROCESSOS_PORTA', getenv('API_PROCESSOS_PORTA'));

define('API_RELATORIOS_HTTP', getenv('API_RELATORIOS_HTTP'));
define('API_RELATORIOS_HOST', filter_var(getenv('API_RELATORIOS_HOST'), FILTER_VALIDATE_DOMAIN));
define('API_RELATORIOS_PORTA', getenv('API_RELATORIOS_PORTA'));

define('API_SPCBRASIL_HTTP', getenv('API_SPCBRASIL_HTTP'));
define('API_SPCBRASIL_HOST', filter_var(getenv('API_SPCBRASIL_HOST'), FILTER_VALIDATE_DOMAIN));
define('API_SPCBRASIL_PORTA', getenv('API_SPCBRASIL_PORTA'));


/**
 * Constantes relacionadas ao Projeto.
 */
define('PROJETO_RAIZ', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);
define('PROJETO_NOME', 'SCL - Sistema Credluz');
define('PROJETO_NOME_SESSAO', getenv('PROJETO_NOME_SESSAO'));
define('PROJETO_HTTP', getenv('PROJETO_HTTP'));
define('PROJETO_HOST', getenv('PROJETO_HOST'));
define('PROJETO_BASE_URL', PROJETO_HTTP . PROJETO_HOST);