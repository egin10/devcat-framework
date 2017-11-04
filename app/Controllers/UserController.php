<?php

class UserController extends Controller
{
    public function index()
    {
        return $this->view('user');
    }

    public function show(){
        $model = $this->model('User')->index();
        var_dump($model);
    }
}