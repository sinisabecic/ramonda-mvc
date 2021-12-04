<?php

class Admin extends Controller
{

    public function __construct()
    {
        $this->checkSession();
        $this->userModel = $this->model('User');
    }


    public function checkSession()
    {
        if (!isLoggedIn())
            header("Location: " . ROOT . "/login");
    }


    public function index()
    {
        $data = [
            'title-tab' => 'CMS | Ramonda'
        ];

        $this->view('admin/admin', $data);
        // $this->view('includes/header');
        // $this->view('includes/navigation');
        // $this->view('includes/footer');
    }


    public function users()
    {
        $users = $this->userModel->getUsers();
        $data = [
            'title-tab' => 'Users | Ramonda',
            'users' => $users,
        ];

        $this->view('admin/users', $data);
    }
}