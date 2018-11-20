<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use App\categories;
use App\ct_posts;

class UserCOntroller extends Controller
{
    public function Index()
    {
        $posts = posts::with('category')->get()->toArray();
        dd($posts);
        return view('users.index', ['posts' => $posts]);
    }
    public function categoriesIndex()
    {
        $categories = categories::with('post')->get()->toArray();
        dd($categories);
        return view('users.index', ['posts' => $posts]);
    }
}
