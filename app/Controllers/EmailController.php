<?php

namespace App\Controllers;

class EmailController extends Controller
{
    static public function sendContact(): void
    {
        dd($_POST);
    }    
}