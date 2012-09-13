<?php

$config = new Phalcon\Config(array(
    'database' => array(
        'adapter' => 'mysql',
        'host' => 'localhost',
        'username' => 'root',
        'password' => 'hea101',
        'name' => 'php_site'
    ),
    'phalcon' => array(
        'controllersDir' => '/../app/controllers/',
        'modelsDir' => '/../app/models/',
        'libraryDir' => '/../app/library/',
        'viewsDir' => '/../app/views/',
        'baseUri' => '/php-site/'
    ),
    'models' => array(
        'metadata' => array(
            'adapter' => 'Apc',
    		'lifetime' => 86400
        )
    )
));
