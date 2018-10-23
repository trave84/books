<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateController extends Controller
{   
    public function __construct()       // One Layer of MIddleware here
    {
        $this->middleware('auth')->only('index');
    }

    public function index()
    {
     return 'This is private';   
    }

    public function show()
    {
     return 'This is private show';   
    }

}
