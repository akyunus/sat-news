<?php

// birka� farkl� yerde kullan�lacak olan APP_DIR de�i�keni.
// 
define('APP_DIR',dirname(__DIR__).DIRECTORY_SEPARATOR.'sat-news-app'.DIRECTORY_SEPARATOR);

// composer ile beraber gelen autoloader sistemini tan�t�lmas�
require_once APP_DIR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';


$app = new Silex\Application();

// �n tan�mlamalar
require_once APP_DIR.'registers.php';

// rota tan�mlar�
require_once APP_DIR.'routes.php';


$app->run();