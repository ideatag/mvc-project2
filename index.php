<?php
require_once("mysql.inc.php");
require_once("controllers/PageController.php");

// Extract URL path
$url = isset($_GET['path']) ? explode("/", ltrim($_GET['path'], "/")) : [];
var_dump($url);

// Default controller and method
$controllerName = !empty($url[0]) ? ucfirst($url[0]) . 'Controller' : 'PageController';
var_dump($controllerName);
$methodName = !empty($url[1]) ? $url[1] : 'list';
var_dump($methodName);
$params = array_slice($url, 2);
var_dump($params);

// Check if the controller class exists
if (class_exists($controllerName)) {
    var_dump("Controller exists: " . $controllerName);
    $controller = new $controllerName();

    // Check if the method exists within the controller
    if (method_exists($controller, $methodName)) {
        var_dump("Method exists: " . $methodName);
        call_user_func_array([$controller, $methodName], $params);
    } else {
        echo 'Method not found.';
    }
} else {
    echo 'Controller not found.';
}
