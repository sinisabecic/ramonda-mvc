<?php

class Admin extends Controller
{

    public function __construct()
    {
        checkSession();
        $this->userModel = $this->model('User');
        $this->sessionModel = $this->model('Session');
    }


    public function index()
    {
        $users = $this->userModel->getUsers();
        $sessions = $this->sessionModel->getSessionsByMonth();
        $data = [
            'title-tab' => 'CMS | Ramonda',
            'users' => $users,
            'page' => 'Users',
            'table-name' => 'Users',
            'sessions' => $sessions,
            'usernameError' => '',
            'nameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => '',
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
            'page' => 'Users',
            'usernameError' => '',
            'nameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => '',
        ];

        $this->view('admin/users', $data);
    }

    //* JS funkcija u functions.js
    public function products($vendor)
    {
        if ($vendor == 'comtrade') :

            $users = $this->userModel->getUsers();
            $data = [
                'title-tab' => 'Users | Ramonda',
                'page' => 'Comtrade',
                'users' => $users,
            ];

            $this->view('admin/products/comtrade', $data);
        else :
            header("Location: " . ROOT . '/admin');
        endif;
    }


    public function sessions()
    {
        $sessionsAll = $this->sessionModel->getSessions();
        $sessions = $this->sessionModel->getSessionsByMonth();
        $lastActivity = $this->sessionModel->lastActivity();

        $data = [
            'title-tab' => 'Sessions | Ramonda',
            'page' => 'Sessions',
            'jsonData' => $_SESSION,
            'sessions' => $sessions,
            'sessionsAll' => $sessionsAll,
            'lastActivity' => $lastActivity,
        ];

        if (isset($_GET['type']) && $_GET['type'] == 'json') :
            var_dump($data['sessions']);
        else :
            $this->view('admin/sessions', $data);
        endif;
    }


    public function activity()
    {
        $lastActivity = $this->sessionModel->lastActivity();
        $sessions = $this->sessionModel->getSessionsByMonth();

        $data = [
            'title-tab' => 'Activity | Ramonda',
            'page' => 'Sessions',
            'sessions' => $sessions,
            'lastActivity' => $lastActivity,
        ];

        $this->view('admin/activity', $data);
    }

    //* 
    public function register()
    {
        $data = [
            'title-tab' => 'Registration | Ramonda',
            'username' => '',
            'page' => 'Users',
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
        ];


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


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
                if ($this->userModel->registerFromAdmin($data, $_FILES)) {
                    header("Location:" . ROOT . '/admin/users?success');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('admin/register', $data);
    }
}