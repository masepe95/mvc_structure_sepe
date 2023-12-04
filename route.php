<?php

require __DIR__ . '/PageController.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$controller = new PageController();

switch ($urlPath) {
    case '/':
        $controller->home();
        break;
    case '/folder1':
    case '/folder1/':
        $controller->folder1();
        break;
    case '/folder2':
    case '/folder2/':
        $controller->folder2();
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        echo "<h1>404 Not Found</h1>";
        break;
}
