<?php

session_start();

error_reporting(~E_NOTICE);

$controller = $_GET['c'] ?? 'Post';
$method = $_GET['m'] ?? 'index';

$public_routes = [
    'Post' => ['login_form', 'login_process', 'register_form', 'register_process']
];

if (!isset($public_routes[$controller]) || !in_array($method, $public_routes[$controller])) {
    if (!isset($_SESSION['user'])) {
        header('Location: index.php?c=Post&m=login_form');
        exit;
    }
}


include_once "controller/Controller.class.php";
include_once "controller/$controller.class.php";

(new $controller)->$method();
