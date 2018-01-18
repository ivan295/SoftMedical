<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TipoPersonas;





class TipoPersonaController extends Controller
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
        return view('adminlte::persona.CreateTypePerson', compact('tipoPersona'));



    }

    public function store(Request $request)
    {
        $this->validate($request, ['tipoPersona' => 'required|alpha']);
        $TipoPersona = new TipoPersonas;
        $TipoPersona->tipo = $request->tipoPersona;
        $TipoPersona->save();
        return redirect('admin/tipoPersona/create');
    }

    public function search(Request $request){
         $tipoPersona = TipoPersonas::where('tipo','like','%'.$request->tipo.'%')->get();
          return view('adminlte::persona.CreateTypePerson', compact('tipoPersona'));

    }

}
