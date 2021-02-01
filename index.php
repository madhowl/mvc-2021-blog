<?php
session_start();
@define('ABSPATH', str_replace('\\', '/', dirname(__FILE__)));
require_once ('./config/db.php');
require('vendor/autoload.php');

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', 'Controllers\BlogController@ShowAllArticles');
Macaw::get('/blog/(:num)', 'Controllers\BlogController@ShowSingleArticle');


Macaw::dispatch();