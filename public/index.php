<?php

/* Gets the Necessary Elements by the Namespaces */
use App\Router;
// use Tracy\Debugger;

/* Require Composer Autoload to load Classes */
require_once '../vendor/autoload.php';

/* Start Sessions Feature */
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

/* Create URL Router */
$router = new Router();

/* Test Zone (uncomment Debugger to get Tracy, print_r or var_dump to get Session or Router values) */
// Debugger::enable();
// print_r($_SESSION);
// var_dump($router);

/* Run Application */
$router->run();
