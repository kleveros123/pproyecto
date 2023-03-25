<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function saludar()
    {
        //echo "Hola pongame 10 .... y le ofresco gaseosas!!!";
        return view('hola');
    }
}
