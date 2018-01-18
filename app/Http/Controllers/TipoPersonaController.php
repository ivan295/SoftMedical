<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TipoPersonas;
use Response;




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
        return redirect('admin/personas/create');
    }

    public function destroy(Request $request, $id) 
    {
        $tipoPersona = DB::table('TipoPersonas')
                     ->where('id', $id)
                     ->update(['estado' => 0]);
        }
        return redirect('admin/personas/create');
    }
           
}
