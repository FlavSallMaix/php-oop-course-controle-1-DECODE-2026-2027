<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Http\Router;
use App\Http\Request;

$request = new Request();

$router = new Router();
$response = $router->main($request);

echo '<pre>' . $response->content . '</pre>';

// Commande pour tester la feature d'ajout de contact (exercice 1) : (Invoke-RestMethod -Uri "http://127.0.0.1:8181/contact" -Method Post -ContentType "application/json" -Body '{...}').pre
// Commande pour tester la feature de modification de contact (exercice 4) : (Invoke-RestMethod -Uri "http://127.0.0.1:8181/contact/<filename>" -Method Patch -ContentType "application/json" -Body '{...}').pre
// Commande pour tester la feature de suppression de contact (exercice 5) : (Invoke-RestMethod -Uri "http://127.0.0.1:8181/contact/1795174865_azerty@frenchy.fr.json" -Method Delete -ContentType "application/json").pre

?>