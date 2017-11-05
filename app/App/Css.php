<?php

class Css
{
    private $path = '/devcat-framework/public/css/';

    public function __construct($pathFile){
        $this->path = $this->path . $pathFile;
    }

    public function __toString(){
        return $this->path;
    }
}