<?php
$request = $_SERVER['REDIRECT_URL'];

switch ($request) {
    case '/' :
        require './src/home.php';
        break;
    case '' :
        require './src/home.php';
        break;
    case '/signup' :
        require './src/signup.php';
        break;
    case '/signin' :
        require './src/signin.php';
        break;
    default: 
        require './src/404.php';
        break;
}
