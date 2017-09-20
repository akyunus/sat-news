<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../twig-dosyalari',
));

$app->get('/', function () use ($app) {
		
	return $app['twig']->render('minimal-content.html', array());

});

$app->get('/test/', function () {
	
	return "test sayfası";

});



$app->run();