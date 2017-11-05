<?php

class UserController extends Controller
{
    public function index()
    {
        return $this->view('user');
    }

    public function show(){
        $users = User::all();
        return $this->view('user', ['users' => $users]);
    }
}