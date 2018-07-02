<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
  protected $redirectTo ='/';
  
  protected function create(array $data)
  {
      return User::create([
          echo $data;
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => $data['password'],
      ]);
  }

}
