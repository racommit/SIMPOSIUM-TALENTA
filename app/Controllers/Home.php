<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function live(): string
    {
        return view('tables');
    }
    public function comingsoon(): string
    {
        return view('tables-coming');
    }
    public function profile(): string
    {
        return view('profile');
    }
    // public function dashboard(): string
    // {
    //     return view('index');
    // }
}
