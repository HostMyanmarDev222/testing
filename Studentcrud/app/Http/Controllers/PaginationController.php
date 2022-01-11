<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PaginationController extends Controller
{
    public function getAllUser(){
        $users = User::paginate(20);  //default 10
        return view('users',compact('users'));
    }
    
}
