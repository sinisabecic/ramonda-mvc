<?php

class Controller
{

    public function __construct()
    {
    }

    public function view($filename, $data = [])
    {
        if (file_exists('../app/views/' . $filename . '.php')) {
            require_once('../app/views/' . $filename . '.php');
        } else {
            die("ERROR: View $filename not found!");
        }
    }


    public function model($modelname)
    {
        if (file_exists('../app/models/' . $modelname . '.php')) {
            require_once '../app/models/' . $modelname . '.php';
            return new $modelname();
        } else
            return null;
    }
}