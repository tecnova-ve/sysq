<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{

    public function __construct()
    {
         $this->middleware('auth');
    }

   public function index(){

       return view('administrador.manejarTaquilla');
   }

   public function turno(){
   	
   		return view('turno.TurnoEspera');
   }
}
