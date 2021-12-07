<?php

class Admin extends Controller
{

    public function __construct()
    {
        checkSession();
        $this->userModel = $this->model('User');
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

    //* 
    public function register()
    {
        $data = [
            'title-tab' => 'Registration | Ramonda',
            'username' => '',
            'name' => '',
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
            'address' => '',
            'is_admin' => '',
            'alert' => '',
            'submit-value' => 'Register user',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //* Da u action tag forme bude url a ne naziv fajla
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title-tab' => 'Registration | Ramonda',
                'username' => trim($_POST['username']),
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'usernameError' => '',
                'emailError' => '',
                'nameError' => '',
                'passwordError' => '',
                'confirmPasswordError' => '',
                'country' => trim($_POST['country']),
                'city' => trim($_POST['city']),
                'zip' => trim($_POST['zip']),
                'phone' => trim($_POST['phone']),
                'address' => trim($_POST['address']),
                'is_admin' => trim($_POST['is_admin']),
                'alert' => '',
                'submit-value' => 'Register user'
            ];

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //* Validacija korisnickog imena
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter username.';
            } elseif (!preg_match($nameValidation, $data['username'])) {
                $data['usernameError'] = 'Name can only contain letters and numbers.';
            }

            //* Validacija mejla
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email address.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            }

            if (empty($data['name']))
                $data['nameError'] = 'Please enter name.';

            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password';
            } elseif (strlen($data['password']) < 6) {
                $data['passwordError'] = 'Password must be at least 8 characters';
            } elseif (preg_match($passwordValidation, $data['password'])) {
                $data['passwordError'] = 'Password must have at least one numeric value';
            }

            // Validacija konfirmacijske lozinke
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter a password';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }

            //* Make sure that errors are empty
            if (
                empty($data['usernameError']) && empty($data['emailError']) &&
                empty($data['passwordError']) && empty($data['confirmPasswordError']) &&
                empty($data['nameError'])
            ) {
                //? Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //? Register user from model function
                if ($this->userModel->registerFromAdmin($data)) {
                    header('Location: ' . ROOT . '/admin/users');
                    // $data['alert'] = "Registration success!";
                } else {
                    // $data['alert'] = "Greska!";
                    die('Something went wrong.');
                }
            }
        }

        $this->view('admin/register', $data);
    }



    public function sessions()
    {
        $data = [
            'sessions' => $_SESSION
        ];

        $this->view('admin/sessions', $data);
    }
}