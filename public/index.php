<?php
session_start();
require_once __DIR__ . '/../src/controllers/HomeController.php';
require_once __DIR__ . '/../src/controllers/GameController.php';
require_once __DIR__ . '/../src/controllers/ResultsController.php';
require_once __DIR__ . '/../src/Model.php';

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'game':
        $controller = new \DenKrutov\logic\Controllers\GameController();
        break;
    case 'results':
        $controller = new \DenKrutov\logic\Controllers\ResultsController();
        break;
    case 'home':
    default:
        $controller = new \DenKrutov\logic\Controllers\HomeController();
}

$controller->handleRequest();
