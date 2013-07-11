<?php

$app->get('/', function () use ($app) {
    return $app['twig']->render('index.twig', array(
        'date' => date('Y/m/d'),
    ));
})->bind('index');
