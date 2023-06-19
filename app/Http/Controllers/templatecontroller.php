<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class templatecontroller extends Controller
{
    public function index()
    {
        return view('tugas10.index');
    }
}
