<?php

spl_autoload_register(function($class){
    require_once 'App/'.$class.'.php';

    //Eloquent
    require_once "../vendor/autoload.php";

    //Database
    require_once "App/Database.php";
});