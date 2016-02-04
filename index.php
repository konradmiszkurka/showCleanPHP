<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

include_once 'libs/autoload.php';

$router = new router();
$app = new app($router->get());
$app->run();

