<?php

use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;

$app = new Application();

$app->register(new UrlGeneratorServiceProvider());
$app->register(new TwigServiceProvider(), array(
    'twig.path'    => array(
        __DIR__ . '/../templates',
    ),
    'twig.options' => array(
        'cache' => __DIR__.'/../cache/twig',
    ),
));

return $app;
