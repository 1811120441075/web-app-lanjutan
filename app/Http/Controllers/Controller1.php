<?php

namespace App\Http\Controllers;

class Controller1 extends Controller
{
    public function satu()
    {
        return view("okta-1");
    }

    public function dua()
    {
        return view("okta-2");
    }

    public function tiga()
    {
        return view("okta-3");
    }
}