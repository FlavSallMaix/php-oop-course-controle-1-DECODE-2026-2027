<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Http\Router;
use App\Http\Request;

$request = new Request();

$router = new Router();
$response = $router->main($request);

echo '<pre>' . $response->content . '</pre>';

// Exercice 3 : Invoke-RestMethod -Uri "http://127.0.0.1:8181/contact" -Method Post -ContentType "application/json" -Body '{...}')
// Exercice 4 : (Invoke-RestMethod -Uri "http://127.0.0.1:8181/contact/<filename>" -Method Patch -ContentType "application/json" -Body '{...}').pre

?>