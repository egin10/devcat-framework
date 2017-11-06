<?php

class Redirect
{
    public function __construct($url){
        return header('Location:'. new Url($url));
    }
}