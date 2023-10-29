<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            'name' => 'Muhammad Andrean Saputra',
            'email' => 'andreannsaputra@gmail.com',
            'title' => 'About'
        ]);
    }
}
