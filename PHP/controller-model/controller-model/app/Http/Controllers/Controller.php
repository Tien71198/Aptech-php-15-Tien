<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\css;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

public function index()
{
    $users = DB::table('users') -> get();
    return view('welcome',['users'=> $users]);
}

public function show()
{
    $users = DB::table('users') -> get();
   
    $results = DB::select('select * from users where id = :id', ['id' => 1]);
    return view('show',['users'=> $users]);
}
public function delete()
{
    $users = DB::table('users')-> get();
    return view('delete',['users'=> $users]);
    $user = DB::table('delete')->where('name', 'John')->first();

    echo $user->name;
}
}
