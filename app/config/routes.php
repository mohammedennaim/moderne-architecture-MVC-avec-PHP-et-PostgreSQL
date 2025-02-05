<?php

$router->addRoute('', 'HomeController', 'index');
$router->addRoute('article', 'ArticleController', 'show');
$router->addRoute('section', 'DashboardController', 'show');
