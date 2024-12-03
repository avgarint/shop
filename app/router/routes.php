<?php

require_once __DIR__ . "/../controllers/MainController.php";

$router = new AltoRouter();

// Calcul automatique de la base path (en incluant /public)
$basePath = rtrim(dirname($_SERVER["SCRIPT_NAME"]), "/");
$router->setBasePath($basePath);

// Routes
$router->map("GET", "/", "MainController#home", "home");
$router->map("GET", "/cart", "MainController#cart", "cart");
$router->map("GET", "/login", "MainController#login", "login");
$router->map("GET", "/product", "MainController#product", "product");
$router->map("GET", "/products", "MainController#products", "products");
$router->map("GET", "/register", "MainController#register", "register");

// Retourne l'objet router
return $router;

?>
