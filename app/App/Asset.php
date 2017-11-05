<?php

class Asset
{
    private $path = '/devcat-framework/public/assets/';

    public function __construct($pathFile){
        $this->path = $this->path . $pathFile;
    }

    public function __toString(){
        return $this->path;
    }
}