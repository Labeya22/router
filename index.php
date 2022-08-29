<?php

use Routes\Router;


require __DIR__ . '/Routes/Router.php';

// on initialise le router
$route = new Router($_SERVER['REQUEST_URI']);

$route->get('/', function () {
    echo 'je suis la page d\'accueil';
}, 'home');

$route->get('/contact', function () {
    echo 'je suis la page de contact';
}, 'contact');

// avec des paramètres
$route->get('/blog/show-:id', function ($id) {
    echo 'afficher le blog ' . $id;
}, 'blog.show');

// on execute les routes
$route->run();

/**
 *  Vous pouvez faire un refactory en remplaçant le closure par un module
 * 
 *  $route->get('/blog', [new BlogModule(), 'index'], 'blog');
 * 
 * L'index 0 sera la classe a appelé et l'index 1 la methode a executé 
 * 
 * 
 */
