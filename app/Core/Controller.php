<?php

class Controller
{
    public function view($files, $data = [])
    {
        if(strpos($files, '.')){
            $file = str_replace('.','/',$files);
            require_once '../app/Views/'.$file.'.blade.php';
        }else{
            require_once '../app/Views/'.$files.'.blade.php';
        }
    }

    public function model($file)
    {
        require_once '../app/Models/'.$file.'.php';
        return new $file();
    }
}