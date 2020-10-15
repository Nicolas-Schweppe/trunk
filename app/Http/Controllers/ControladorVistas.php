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
      $vista=4;
      return view('inicio')->with('vista', $vista);
      //$usuario = $request->session()->get('id');
      
      //return $request->session()->all();
    }
    public function categorias(){
      $vista= 4;
      return view('categorias')->with('vista', $vista);
    }

}
