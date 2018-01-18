<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TipoPersonas;

class PersonaController extends Controller
{
  /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth');
   }

   /**
    * Show the application dashboard.
    *
    * @return Response
   */

   public function create()
   {
      $tipoPersona = DB::table('tipopersonas')
                    ->orderBy('id','desc')
                    ->paginate(10);
       return view('adminlte::persona.nueva', compact('tipoPersona'));



   }

}
