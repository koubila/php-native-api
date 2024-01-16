<?php

require_once '../autoload.php';

define('HOME_PAGE', '404');
$pages = array('games', 'deals', 'stores');

if (isset($_GET['page']) && in_array($_GET['page'], $pages)) {
    
    $page = ucfirst($_GET['page']);
    $controller = $page.'Controller';

    $ctrl = new $controller();
    
    // Appel sur le root endpoint
    $result = $ctrl->route();

}else{
    // var_dump("session var get is ",$_GET['page']);
    $result = ['status'=>404, 'message'=> 'Page not found'];
    header('HTTP/1.0 404 Not found');
}

header('Content-Type: application/json');
echo json_encode($result);