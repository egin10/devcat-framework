<?php

class Js
{
    private $path = '/router-admin/public/js/';
    public $file;

    public function __construct($pathFile){
        $this->file = $this->path . $pathFile;
    }

    public function __toString(){
        return $this->file;
    }
}