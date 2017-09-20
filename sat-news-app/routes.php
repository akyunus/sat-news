<?php

$app->get('/', function () use ($app) {
		
	return $app['twig']->render('minimal-content.html', array());

});

$app->get('/test/', function () {
	
	return "test sayfası ".APP_DIR;

});