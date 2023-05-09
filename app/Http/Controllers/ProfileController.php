<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;

class ProfileController extends Controller
{
    //
    public function showCheck(){
        $users = DB::select('select * from passenger');
        return view('profile',['users'=>$users]);
        }
}
