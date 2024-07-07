<?php

namespace App\Http\Controllers;

use App\Models\Dakoku;
use Illuminate\Http\Request;
use App\Http\Requests\DakokuRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
    return view('login');
    }

    public function attendance()
    {
        $dakoku = Dakoku::all();
        return view('attendance', ['dakoku' => $dakoku]);
    }

    public function register()
    {
    return view('register');
    }
}
