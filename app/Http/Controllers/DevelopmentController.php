<?php

namespace App\Http\Controllers;

use App\Development;
use Illuminate\Http\Request;

class DevelopmentController extends Controller
{
    public function index()
    {
        return view('development/development_index');
    }
}
