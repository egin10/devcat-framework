<?php

class Asset
{
    private $path = '/router-admin/public/assets/';
    public $file;

    public function __construct($pathFile){
        $this->file = $this->path . $pathFile;
    }

    public function __toString(){
        return $this->file;
    }
}