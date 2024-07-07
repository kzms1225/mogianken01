<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisteredUserCon extends Controller
{
    public function create()
        {
            return view('attendance');
        }
}
