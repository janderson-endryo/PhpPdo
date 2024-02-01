<?php 
function loand(){
    // filtra os dados => proteçao na url metodo get
    $page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_URL);

    $page = (!$page) ? 'page/home.php' : "page/{$page}.php";

    // verifica se o arquivo existe
    if (!file_exists($page)) {
        throw new \Exception("pagina nao encontrada!!");
    }

    return $page;
}
?>
