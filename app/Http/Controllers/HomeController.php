<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $title = "Trang chủ blog PHP";
        return view('home', ['title' => $title]);
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function user($name)
    {
        return view('user', ['name' => $name]);
    }
}
