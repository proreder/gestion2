<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioModel;

class LoginController extends Controller
{
   public function validar(){
    $login=Request()->only('usuario', 'clave');
    dump($login);
   }
    
}
