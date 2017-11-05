<?php

class AuthController extends Controller
{
    public function index(){
        return $this->view('Auth.login');
    }

    public function register(){
        return $this->view('Auth.register');
    }
}