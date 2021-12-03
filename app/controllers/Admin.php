<?php

class Admin extends Controller
{
    public function __construct()
    {
    }


    public function index()
    {
        $data = [
            'title-tab' => 'Administration | Ramonda'
        ];
        $this->view('admin/admin', $data);
        // $this->view('includes/header');
        // $this->view('includes/navigation');
        // $this->view('includes/footer');
    }
}