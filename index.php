<?php

session_start();

require './vendor/autoload.php';

date_default_timezone_set('Europe/Paris');

spl_autoload_register(function ($className) {
    require './classes/' . $className . '.php';
});

require_once './functions/autoLoadFunction.php';
require_once './includes/head.php';
require_once './includes/main.php';
require_once './includes/footer.php';
