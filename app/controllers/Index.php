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
            'title-tab' => 'Login | Ramonda',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
        ];
        $this->view('users/login', $data);
        // $this->view('includes/header');
        // $this->view('includes/navigation');
        // $this->view('includes/footer');
    }


    public function register()
    {
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