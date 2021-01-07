<?php

return new \Phalcon\Config(
    [
        /*
        'database' => [
            'adapter' => 'Postgresql',
            'host' => 'localhost',
            'port' => '',
            'username' => 'ader',
            'password' => 'aderpass',
            'dbname' => 'linkfire',
        ],
        */
        'application' => [
            'controllersDir' => "app/controllers/",
            'modelsDir' => "app/models/",
            'baseUri' => "/",
        ],
    ]
);