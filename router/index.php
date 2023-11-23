<?php

$BASE_PATH = "";

$router = new Router();

$router->addRoute("$BASE_PATH/", function () {
  view("home");
});

$router->addRoute("$BASE_PATH/about", function () {
  view("about");
});

$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->handleRequest($currentPath);