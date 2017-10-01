<?php

$app->get('/', function () use ($app) {

	//$sth = $app['pdo']->query("SELECT * FROM categories");
	$newsModel = new SatNews\models\newsModel($app['pdo']);

	$twigvars['cats'] = $newsModel->kategorileriAl();

	return $app['twig']->render('minimal-content.html', $twigvars);

});

$app->get('/haber/{id}', function (Silex\Application $app, $id) {

	//TODO $id parametresini filtrele

	$id = (int) $id;


	$newsModel = new SatNews\models\newsModel($app['pdo']);
	$twigvars['cats'] = $newsModel->kategorileriAl();
	$twigvars['news'] = $newsModel->HaberDetay($id);
	$twigvars['news_tags'] = $newsModel->HaberTags($id);


	return $app['twig']->render('news-detail.html', $twigvars);

});

$app->get('/test/', function () use ($app) {


	$sth = $app['pdo']->query("SELECT * FROM tags");
	$result = $sth->fetchAll();
	print_r($result);
	return "test sayfası ".APP_DIR;

});
