<?php

class Css
{
    private $path = '/router-admin/public/css/';
    public $file;

    public function __construct($pathFile){
        $this->file = $this->path . $pathFile;
    }

    public function __toString(){
        return $this->file;
    }
}