<?php


class Products extends Controller
{

    public function __construct()
    {
        checkSession();
        $this->postModel = $this->model('Product');
        $this->userModel = $this->model('User');
    }
}