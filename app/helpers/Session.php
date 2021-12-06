<?php



session_start();
ob_start();


function isLoggedIn()
{
    if (isset($_SESSION['login']))
        return true;
    else
        return false;
}

function isAdmin()
{
    if ($_SESSION['is_admin'] == 1)
        return true;
    else
        return false;
}

function getSession($value)
{
    if (isset($_SESSION[$value]))
        return $_SESSION[$value];
}

function checkLogin()
{
    if (!isLoggedIn())
        header("Location: " . ROOT . "/login");
}

function checkAdmin()
{
    if (!isAdmin())
        header("Location: " . ROOT . "/login");
}

function checkSession()
{
    checkLogin();
    checkAdmin();
}

function destroy()
{
    session_destroy();
    echo '<script type="text/javascript">
            window.location.href = "/";
            </script>';
}