<?php

class Controller
{

    public function __construct()
    {
    }

    public function view($filename, $data = [])
    {
        // extract($data);

        if (file_exists('../app/views/' . $filename . '.php')) {
            require_once('../app/views/' . $filename . '.php');
        } else {
            require_once("../app/views/includes/404.php");
        }
    }


    public function model($modelname)
    {
        if (file_exists('../app/models/' . ucfirst($modelname) . '.php')) {
            require_once '../app/models/' . ucfirst($modelname) . '.php';
            return new $modelname();
        } else
            return false;
    }

    public function redirect($link)
    {
        header("Location: " . ROOT . "/" . trim($link, "/"));
        die;
    }
}
