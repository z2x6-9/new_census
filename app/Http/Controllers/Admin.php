<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    public function index(){
        $Type = auth()->user()->Type;
        $password = auth()->user()->password;
        if(auth()->user()->id){
            if($Type == 'admin'){

            }else{
                return view('famile');
            }
        }
    }
}
