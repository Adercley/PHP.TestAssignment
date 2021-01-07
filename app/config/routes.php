<?php

$router = new Phalcon\Mvc\Router();

$router->add('/songs/show', array(
    'controller' => 'songs',
    'action' => 'show'
));

$router->add('/songs/add/{song}', array(
    'controller' => 'songs',
    'action' => 'add'
));

$router->add('/songs/list', array(
    'controller' => 'songs',
    'action' => 'getSongsList'
));

$router->add('/songs/delete', array(
    'controller' => 'songs',
    'action' => 'deleteSong'
));

return $router;