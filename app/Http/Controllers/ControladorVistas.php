<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{

    public function index(){
      return view('welcome');
    }

    public function login(){
      return view('login');
    }

    public function inicio(){
      return view('inicio');
    }

}
