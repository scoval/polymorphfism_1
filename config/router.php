<?php
 
use Illuminate\Events\Dispatcher;

$request = \Illuminate\Http\Request::createFromGlobals();
function request() {
    global $request;

    return $request;
}

$dispatcher = new Dispatcher();
$container = new \Illuminate\Container\Container();
$router = new \Illuminate\Routing\Router($dispatcher, $container);

function router() {
    global $router;

    return $router;
}
$router->get( '/', [\Hillel\Controllers\CategoryController::class, 'index']);
$router->get( '/categories', [\Hillel\Controllers\CategoryController::class, 'categories']);
$router->get( '/categories/{id}', [\Hillel\Controllers\CategoryController::class, 'category']);


// Request -> Application -> Response
// HTTP Request -> Server -> HTTP Response

//