<?php
use App\Controllers\HomeController;

$router->map( 'GET', '/', function(){

    $homeController = new HomeController;
    $homeController->showHomePage();
},'home' );



