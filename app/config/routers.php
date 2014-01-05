<?php

$router = new Phalcon\Mvc\Router();

$router->add('/confirm/{code}/{email}', array(
        'controller' => 'session',
        'action' => 'confirmEmail'
));
return $router;