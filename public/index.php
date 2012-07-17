<?php

error_reporting(E_ALL);

try {
    require __DIR__.'/../app/config/config.php';
    require __DIR__.'/../app/config/routes.php';
    require __DIR__.'/../vendor/loader.php';

    Phalcon\Session::start();

    $front = Phalcon\Controller\Front::getInstance();

    $front->setRouter($router);
    $front->setConfig($config);

    echo $front->dispatchLoop()->getContent();

} catch (Phalcon\Exception $e) {
    echo "PhalconException: ", $e->getMessage();
}
