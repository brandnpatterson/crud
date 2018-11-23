<?php

if (!isset($_SERVER['REDIRECT_URL'])) {
    $_SERVER['REDIRECT_URL'] = '';
}

$request = $_SERVER['REDIRECT_URL'];

switch ($request) {
    case '/' :
        require './public/home.php';
        break;
    case '' :
        require './public/home.php';
        break;
    case '/signup' :
        require './public/signup.php';
        break;
    case '/signin' :
        require './public/signin.php';
        break;
    default: 
        require './public/404.php';
        break;
}
