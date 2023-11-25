<?php

$BASE_PATH = "";

$router = new Router();

$router->addRoute("$BASE_PATH/", function () {
  view("home");
});

$router->addRoute("$BASE_PATH/about", function () {
  view("about");
});

$router->addRoute("$BASE_PATH/contacts", function () {
  view("contacts");
});

$router->addRoute("$BASE_PATH/faq", function () {
  view("faq");
});

$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->handleRequest($currentPath);