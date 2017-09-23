<?php

$app->get('/', function () use ($app) {

	$sth = $app['pdo']->query("SELECT * FROM categories");
	$twigvars['cats'] = $sth->fetchAll();
	return $app['twig']->render('minimal-content.html', $twigvars);

});

$app->get('/test/', function () use ($app) {


	$sth = $app['pdo']->query("SELECT * FROM tags");
	$result = $sth->fetchAll();
	print_r($result);
	return "test sayfası ".APP_DIR;

});
