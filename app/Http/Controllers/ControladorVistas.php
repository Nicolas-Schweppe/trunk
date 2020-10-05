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
      $vista= "1";
      return view('inicio')->with('vista', $vista);
    }
    public function categorias(){
      $vista= "2";
      return view('categorias')->with('vista', $vista);
    }

}
