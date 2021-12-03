<?php

session_start();

function isLoggedIn()
{
    if (isset($_SESSION['login']))
        return true;
    else
        return false;
}