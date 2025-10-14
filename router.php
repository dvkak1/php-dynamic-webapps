<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// if ($uri === '/') {
//     require 'controllers/index.php';    
// } else if ($uri === '/about') {
//     require 'controllers/about.php';
// } else if ($uri === '/contact') {
//     require 'controllers/contact.php';
// }


//^Above code is not wrong but below here is a better way to express our routing. 
$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];



function routeToController($uri, $routes) {

    if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
    } else { 
    abort(404);
    }
}

function abort ($code = 404) {
    http_response_code($code);

    require "views/${code}.php";

    die();
}


routeToController($uri, $routes);


?>