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
        if (isLoggedIn())
            header("Location: " . ROOT . "/admin");

        $data = [
            'title-tab' => 'Login | Ramonda',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
        ];
        $this->view('login/login', $data);
        // $this->view('includes/header');
        // $this->view('includes/navigation');
        // $this->view('includes/footer');
    }

    public function register()
    {
        if (isLoggedIn())
            header("Location: " . ROOT . "/admin");

        $data = [
            'title-tab' => 'Registration | Ramonda',
            'username' => '',
            'name' => 'name',
            'email' => '',
            'password' => '',
            'confirmPassword' => '',
            'usernameError' => '',
            'nameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => '',
            'country' => '',
            'city' => '',
            'zip' => '',
            'phone' => '',
            'alert' => '',
        ];
        $this->view('users/register', $data);
    }
}