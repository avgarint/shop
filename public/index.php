<?php

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../src/controllers/MainController.php";

$router = require_once __DIR__ . "/../src/router/routes.php";

// Débogage : voir les routes et la correspondance
// dump($router->getRoutes());

$match = $router->match();

if ($match) {
    //dump($match); // Voir ce qu'AltoRouter détecte pour la requête
    [$controller, $method] = explode("#", $match["target"]);

    if (file_exists($controller) && method_exists($controller, $method)) {
        (new MainController())->$method();
    } else {
        (new MainController())->NotFound();
    }
} else {
    (new MainController())->NotFound();
}

?>
