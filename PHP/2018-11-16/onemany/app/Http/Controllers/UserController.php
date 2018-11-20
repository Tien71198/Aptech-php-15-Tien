<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoties;
use App\posts;

class UserController extends Controller
{
    public function index()
    {
        $posts = posts::with('category')->get()->toArray();
        dd($posts);
        return view('users.index', ['posts' => $posts]);
    }

    public function passportIndex()
    {
        $categories = categories::with('post')->get()->toArray();
       // dd($passports);
        return view('users.index', ['posts' => $posts]);
    }
}
