<?php

//use Fabfuel\Prophiler\Plugin\Manager\Phalcon;
use Phalcon\Di\FactoryDefault;
use Phalcon\Loader;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\View;
// use strict;

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
        $view->registerEngines([
            '.volt'=>'Phalcon\Mvc\View\Engine\Volt'
        ]);
        return $view;
    });

    // Deploy the App
    $app = new Application($di);
    echo $app->handle('uri')->getContent();

} catch(\Phalcon\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
    echo "<br> <h4>Try Documentation <a href='https://docs.phalcon.io/4.0/en/introduction'>Here</a><h/h4>";
}
