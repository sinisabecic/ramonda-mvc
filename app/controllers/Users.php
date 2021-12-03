<?php


class Users extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        // Session::checkSession();
    }


    public function index()
    {
        $users = $this->userModel->getUsers();
        $data = [
            'title' => 'Users | MVC Unico',
            'users' => $users,
        ];

        $this->view('users/users', $data);
    }


    public function register()
    {
        // Pri ucitavanju da se nista ne prikazuje u $data['...']
        $data = [
            'title' => 'Sign up',
            'username' => '',
            'email' => '',
            'password' => '',
            'confirmPassword' => '',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => '',
            'alert' => '',
        ];


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //* Da u action tag forme bude url a ne naziv fajla
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => 'Sign up',
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => '',
                'alert' => '',
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
            } else {
                //Check if email exists.
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['emailError'] = 'Email is already taken.';
                }
            }

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
                empty($data['passwordError']) && empty($data['confirmPasswordError'])
            ) {
                //? Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //? Register user from model function
                if ($this->userModel->register($data)) {
                    // Redirect to the login page
                    header('Location: ' . ROOT . '/users/login');
                    // $data['alert'] = "Registration success!";
                } else {
                    // $data['alert'] = "Greska!";
                    die('Something went wrong.');
                }
            }
        }

        $this->view('users/register', $data);
    }


    public function login()
    {
        $data = [
            'title' => 'Login page | MVC Unico',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => '',
            'alert' => '',
        ];


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => 'Login page | MVC Unico',
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
                'alert' => '',
            ];

            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                if ($loggedInUser)
                    $this->createUserSession($loggedInUser);
                else {
                    $data['passwordError'] = "Password is incorrect. Please try again.";

                    $this->view('users/login', $data);
                }
            }
        } else {
            $data = [
                'title' => 'Login page | MVC Unico',
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => '',
                'alert' => '',
            ];
        }
        $this->view('users/login', $data);
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['email'] = $user->email;
        $_SESSION['login'] = true;
        header('location:' . ROOT . '/index');
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['login']);
        header("Location: " . ROOT . "/users/login");
    }
}