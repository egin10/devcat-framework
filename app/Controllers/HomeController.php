<?php

class HomeController extends Controller
{
    public function index()
    {
        return $this->view('welcome');
    }

    public function greeting()
    {
        $user = $this->model('User');
        return $this->view('user', ['name' => $user->name, 'age' => $user->age]);
    }
}