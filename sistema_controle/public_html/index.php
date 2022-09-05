<?php
##### pasta raiz do projeto #####
$pathroot = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR;

// Importando o autoloader do Vendor (Composer)
//----------------------------------------------------------------------------------------------------------------------
try {
    $autoload = $pathroot . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
    require_once $autoload;
} catch (\Exception $e) {
    //reporta erro de carregamento autoloading
    trigger_error('Erro ao carregar autoload ( ' . $e->getMessage() . ' )!', E_USER_ERROR);
    return false;
} catch (\Throwable $e) {
    //reporta erro de carregamento autoloading
    trigger_error('Erro ao carregar autoload ( ' . $e->getMessage() . ' )!', E_USER_ERROR);
    return false;
}
//----------------------------------------------------------------------------------------------------------------------

// Importando o arquivo de configuração.
//----------------------------------------------------------------------------------------------------------------------
try {
    $config = $pathroot . 'configuracao' . DIRECTORY_SEPARATOR . 'configuracao.php';
    require_once $config;
} catch (\Exception $e) {
    //REPORTA ERRO DE CARREGAMENTO VARIAVEIS DE AMBIENTE E CONSTANTES DO SISTEMA
    trigger_error(
        'Erro ao carregar contantes do sistema ( ' . $e->getMessage() . ' )!',
        E_USER_ERROR
    );
    return false;
} catch (\Throwable $e) {
    //REPORTA ERRO DE CARREGAMENTO VARIAVEIS DE AMBIENTE E CONSTANTES DO SISTEMA
    trigger_error(
        'Erro ao carregar contantes do sistema ( ' . $e->getMessage() . ' )!',
        E_USER_ERROR
    );
    return false;
}
//----------------------------------------------------------------------------------------------------------------------

// Tratativa de Rotas
//----------------------------------------------------------------------------------------------------------------------
try {
    //------------------------------------------------------
    // Verifica se o sistema está em manutenção
    if (MANUTENCAO):
        header('Location: manutencao.php');
        exit();
    endif;
    //------------------------------------------------------

    //------------------------------------------------------
    // Verifica se a sessão foi criada e validada
    $sessao_index = new \Source\Recursos\Sessao();
    if (!($sessao_index::validar('usuario')) || !($sessao_index::validar('menus'))):
        header('Location: logout.php');
        exit();
    endif;
    //------------------------------------------------------

    //------------------------------------------------------
    // Faz a rota das páginas
    $paginas_diretorio = $pathroot . 'paginas' . DIRECTORY_SEPARATOR;
    $pagina = filter_input(INPUT_GET, "secao", FILTER_DEFAULT);
    $pagina = preg_replace('/&([a-z])[a-z]+;/i', '', $pagina);
    $pagina = strip_tags($pagina);

    if (!isset($pagina) || $pagina == ""):
        include_once $paginas_diretorio . "home/home.php";
    else:
        if (file_exists($paginas_diretorio . $pagina . ".php")):
            include_once $paginas_diretorio . $pagina . ".php";
        else:
            include_once __DIR__ . DIRECTORY_SEPARATOR . "erro.php";
        endif;
    endif;
    //------------------------------------------------------

    //------------------------------------------------------
    // GERENCIADOR DE ROTAS
    /*
    $rotas = $pathroot . '_rotas' . DIRECTORY_SEPARATOR . 'rotas.php';
    $rota = new \Source\Recursos\Rotas(PROJETO_BASE_URL);
    require_once $rotas;
    $rota->run()->sendResponse();
    */
    //------------------------------------------------------
} catch (\Exception $e) {
    header('Location: erro.php');
} catch (\Throwable $e) {
    header('Location: erro.php');
}
//----------------------------------------------------------------------------------------------------------------------