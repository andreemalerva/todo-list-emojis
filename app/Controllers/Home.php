<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data["titulo"] = "home otro asdas";
        $data["js"] = "home asda";
        //return view('welcome_message');
        return view('prueba', $data);
    }
}
