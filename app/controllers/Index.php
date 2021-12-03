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
            'title' => 'Home | MVC Unico'
        ];
        $this->view('pages/index', $data);
        // $this->view('includes/header');
        // $this->view('includes/navigation');
        // $this->view('includes/footer');
    }
}