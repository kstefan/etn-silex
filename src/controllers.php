<?php

$app->get('/', function () use ($app) {
    return 'Hello world!';
})->bind('index');
