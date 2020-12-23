<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    
    public function index(){

    	return view('index');
    }

    public function home(){

    	return view('home');
    }

    public function contact(){

    	return view('contact');
    }
}
