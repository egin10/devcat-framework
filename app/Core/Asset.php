<?php

class Asset
{
    private $path = '/router-admin/public/assets/';

    public function __construct($pathFile){
        $this->path = $this->path . $pathFile;
    }

    public function __toString(){
        return $this->path;
    }
}