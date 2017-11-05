<?php

class Controller
{
    public function view($file, $data = [])
    {
        require_once '../app/Views/'.$file.'.blade.php';
    }

    public function model($file)
    {
        require_once '../app/Models/'.$file.'.php';
        return new $file();
    }
}