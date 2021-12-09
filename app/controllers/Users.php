<?php


class Users extends Controller
{

    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->sessionModel = $this->model('Session');
    }


    public function register()
    {
        // Pri ucitavanju da se nista ne prikazuje u $data['...']
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
                if ($this->userModel->register($data)) {
                    header('Location: ' . ROOT . '/login');
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
            'title-tab' => 'Login | Ramonda',
            'username' => '',
            'email' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => '',
            'emailError' => '',
            'alert' => '',
        ];


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title-tab' => 'Login | Ramonda',
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'email' => '',
                'usernameError' => '',
                'passwordError' => '',
                'emailError' => '',
                'alert' => '',
            ];

            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->userModel->loginUser($data['username'], $data['password']);

                if ($loggedInUser) :
                    $this->createUserSession($loggedInUser);
                    // Za tabelu tbl_session
                    $this->sessionModel->insertSessionData($loggedInUser->id);

                else :
                    $data['passwordError'] = "Password is incorrect. Please try again.";
                    $this->view('users/login', $data);
                endif;
            }
        } else {
            $data = [
                'title-tab' => 'Login | Ramonda',
                'username' => '',
                'password' => '',
                'email' => '',
                'usernameError' => '',
                'passwordError' => '',
                'emailError' => '',
                'alert' => '',
            ];
        }
        $this->view('login/login', $data);
    }


    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['name'] = $user->name;
        $_SESSION['username'] = $user->username;
        $_SESSION['email'] = $user->email;
        $_SESSION['is_admin'] = $user->is_admin;
        $_SESSION['login'] = true;

        if ($user->is_admin == 1)
            header('location:' . ROOT . '/admin');
        else
            header('location:' . ROOT . '/login');
    }


    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['login']);
        header("Location: " . ROOT . "/login");
    }


    public function delete()
    {
        $data = [
            // 'user_id' => $_GET['user_id'],
            'user_id' => $_POST['user_id'],
        ];

        if (isAdmin())
            $this->userModel->deleteUser($data['user_id']);
        else
            header("Location: " . ROOT . "/login");
    }


    public function edit()
    {
        //! Ovo je potrebno da vidim podatke o izabranom korisniku i u konzoli
        echo json_encode($this->userModel->getUserById($_POST['user_id']));
    }


    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'id' => trim($_POST['id']),
                'username' => trim($_POST['username']),
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                // 'password' => trim($_POST['password']),
                // 'confirmPassword' => trim($_POST['confirmPassword']),                
                'country' => trim($_POST['country']),
                'city' => trim($_POST['city']),
                'zip' => trim($_POST['zip']),
                'phone' => trim($_POST['phone']),
                'address' => trim($_POST['address']),
                'is_admin' => trim($_POST['is_admin']),

            ];

            if ($this->userModel->updateUser($data))
                header("Location: " . ROOT . "/admin/users");
            else
                die('Greska');
        }
    }
}