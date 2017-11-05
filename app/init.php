<?php

spl_autoload_register(function($class){
    require_once 'Core/'.$class.'.php';
});

//Eloquent
require_once "../vendor/autoload.php";

//Database
require_once "Core/Database.php";