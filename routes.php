<?php

$routes = [
    '/contact' => 'contact',
    '/about' => 'about',
    '/' => 'index'
];

$loadRoute = function ($uri) use ($routes) {
    return array_key_exists($uri, $routes) ? 
        include "./controllers/$routes[$uri].php" 
        : include "./controllers/404.php";
};