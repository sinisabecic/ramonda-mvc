<?php

class Index extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        // Session::checkSession();
    }

    public function index()
    {
        $data = [
            'title-tab' => 'Login | Ramonda'
        ];
        $this->view('login/login', $data);
        // $this->view('includes/header');
        // $this->view('includes/navigation');
        // $this->view('includes/footer');
    }
}