<?php

class Url
{
    private $url = '/devcat-framework/public/';

    public function __construct($url){
        $this->url = $this->url . $url;
    }

    public function __toString(){
        return $this->url;
    }
}