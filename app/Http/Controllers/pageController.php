<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function getHome(){
      return view('home');
    }

    public function getAbout(){
      return view('about');
    }

    public function getContact(){
      return view('contact');
    }

    public function getUsers(){
      return view('users.index');
    }

    public function getRoles(){
      return view('roles.index');
    }
}
