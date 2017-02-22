<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrontController extends Controller
{
    public function index()
    {
      return view('landing');
    }

    public function siset()
    {
    	return view('siset');
    }
}
