<?php

class Js
{
    private $path = '/devcat-framework/public/js/';

    public function __construct($pathFile){
        $this->path = $this->path . $pathFile;
    }

    public function __toString(){
        return $this->path;
    }
}