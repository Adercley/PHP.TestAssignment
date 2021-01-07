<?php
define('APP_PATH', dirname(__DIR__) . '/app');

$loader = new \Phalcon\Loader();

$loader->registerDirs(
    [
        APP_PATH . "/controllers/",
        APP_PATH . "/models/",
        APP_PATH . "/services/",
    ]
);

$loader->registerNamespaces(
  [
    'Linkfire\Assignment'               => APP_PATH,
    //'Linkfire\Assignment\Services'      => APP_PATH . '/services/',
    'Linkfire\Assignment\Controllers'   => APP_PATH . '/controllers/',
    'Linkfire\Assignment\Models'        => APP_PATH . '/models/',
  ]
);

$loader->register();