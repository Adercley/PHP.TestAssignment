<?php
use Phalcon\Di;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Router;
use Phalcon\Http\Request;
use Phalcon\Http\Response;
use Phalcon\Mvc\Dispatcher;
use Linkfire\Assignment\Models\Songs;

define('APP_PATH', dirname(__DIR__) . '/app');

// Autoloading classes - separate file to make it cleaner :)
require APP_PATH . '/config/loader.php';

$di = new Di();

// ****************************************** TASK 3: Add routing and controller actions to support different url structures. *****
require APP_PATH . '/config/routes.php';

// Registering a router
$di->set("router", $router);
// ********************************************************************************************************************************


// Registering a dispatcher
$di->set(
    'dispatcher',
    function () {
        $dispatcher = new Dispatcher();

        $dispatcher->setDefaultNamespace(
            'Linkfire\Assignment\Controllers'
        );

        return $dispatcher;
    }
);

// Registering a Http\Response
$di->set("response", Response::class);
// Registering a Http\Request
$di->set("request", Request::class);

// ****************************************** TASK 1: set a service to return the model Songs *****
$di->set('modelsManager', function() {
    return new \Phalcon\Mvc\Model\Manager();
});

$di->set('songService', function () {
    return new Songs();
});
// *************************************************************************************************


// Registering the view component
$di->set(
    "view",
    function () {
        $view = new View();
        $view->setViewsDir("../app/views/"); // fixed this
        return $view;
    }
);

try {
     // Loading Configs - database will be nice put credentials in here :D
    $config = APP_PATH . '/config/config.php';

    //print_r( $di->get("songService"));

    $application = new Application($di);
    $response = $application->handle();
    $response->send();
} catch (Exception $e) {
    echo $e->getMessage();
}