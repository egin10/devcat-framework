<?php

class Css
{
    private $path = '/router-admin/public/css/';

    public function __construct($pathFile){
        $this->path = $this->path . $pathFile;
    }

    public function __toString(){
        return $this->path;
    }
}