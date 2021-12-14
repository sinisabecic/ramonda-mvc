<?php

class Api extends Controller
{

    public function __construct()
    {
    }

    public function comtrade()
    {
        $string = file_get_contents("http://localhost/ramonda/public/json/cjenovnik-comtrade.json");
        $json_a = $string;
        $data = [
            'prices' => $json_a,

        ];

        $this->view('api/comtrade', $data);
    }
}