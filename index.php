<?php
require_once("mysql.inc.php");
require_once("controllers/PageController.php");

$error = '';
$url = isset($_GET['path']) ? explode("/", ltrim($_GET['path'], "/")) : [];

$controllerName = !empty($url[0]) ? ucfirst($url[0]) . 'Controller' : 'PageController';
$methodName = !empty($url[1]) ? $url[1] : 'home';
$params = array_slice($url, 2);

if (class_exists($controllerName)) {
    $controller = new $controllerName();

    if (method_exists($controller, $methodName)) {
        call_user_func_array([$controller, $methodName], $params);
    } else {
        $error = 'Method not found.';
    }
} else {
    $error = 'Controller not found.';
}
