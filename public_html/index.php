<?php

// birkaç farklı yerde kullanılacak olan APP_DIR değişkeni.
// 
define('APP_DIR',dirname(__DIR__).DIRECTORY_SEPARATOR.'sat-news-app'.DIRECTORY_SEPARATOR);

// composer ile beraber gelen autoloader sistemini tanıtılması
require_once APP_DIR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';


$app = new Silex\Application();

// ön tanımlamalar
require_once APP_DIR.'registers.php';

// rota tanımları
require_once APP_DIR.'routes.php';


$app->run();