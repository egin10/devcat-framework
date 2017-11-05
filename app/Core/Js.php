<?php

class Js
{
    private $path = '/router-admin/public/js/';

    public function __construct($pathFile){
        $this->path = $this->path . $pathFile;
    }

    public function __toString(){
        return $this->path;
    }
}