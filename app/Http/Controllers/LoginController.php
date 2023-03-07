<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;

class LoginController extends Controller
{
   public function validar(){
    $login=Request();
    dump($login);
   }
    
}
