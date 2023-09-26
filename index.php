<?php

ob_start();

session_start();

require __DIR__ . "/vendor/autoload.php";
use CoffeeCode\Router\Router;

$route = new Router(CONF_URL_BASE, ":");

/**
 * Web Routes
 */

$route->namespace("Source\App");

/**
 * App Routs
 */

$route->group("/"); // agrupa em /app
$route->get("/","App:home");
$route->get("/entrar","App:login");
$route->post("/entrar","App:login");
$route->get("/cadastrar","App:register");
$route->post("/cadastrar","App:register");
$route->get("/perfil","App:profile");

$route->group(null); // desagrupo do /app

/*
 * Erros Routes
 */

$route->group("error")->namespace("Source\App");
$route->get("/{errcode}", "Web:error");

$route->dispatch();

/*
 * Error Redirect
 */

if ($route->error()) {
    $route->redirect("/error/{$route->error()}");
}

ob_end_flush();