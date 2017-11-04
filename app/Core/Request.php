<?php

class Request
{
    //GET
    public static function get($key){
        if(isset($_GET[$key])){
            return $_GET[$key];
        }
    }

    //POST
    public static function post($key){
        if(isset($_POST[$key])){
            return $_POST[$key];
        }
    }
}