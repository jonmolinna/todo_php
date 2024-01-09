<?php

    require_once('./autoload/Autoload.php');
    $autoload = new Autoload();

    $route = isset($_GET['r']) ? $_GET['r'] : 'login';

    $router = new Router($route);