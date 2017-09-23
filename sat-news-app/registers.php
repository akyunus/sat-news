<?php

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => APP_DIR.'twig-dosyalari',
));


$app['pdo'] = new PDO("mysql:host=localhost;dbname=sat-news", "root", "",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
