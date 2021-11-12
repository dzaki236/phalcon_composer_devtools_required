<?php

use Phalcon\Di\FactoryDefault;
use Phalcon\Loader;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\View;

try {
    // Autoloader
    $loader = new Loader;
    $loader->registerDirs([
        '../app/controllers/',
        '../app/models/'
    ]);
    $loader->register();

    // Dependency Injection
    $di = new FactoryDefault;
    $di->set('view', function() {
        $view = new View();
        $view->setViewsDir('../app/views');
        return $view;
    });

    // Deploy the App
    $app = new Application($di);
    echo $app->handle('uri')->getContent();

} catch(\Phalcon\Exception $e) {
    echo $e->getMessage();
}