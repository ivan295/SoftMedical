<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TipoMedicina;


class TipoMedicamentoController extends Controller
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
      $tipomedicinas = DB::table('tipomedicinas')
                    ->orderBy('id','desc')
                    ->paginate(10);
       return view('adminlte::medicamento.CreateTypeMedicamento', compact('tipomedicinas'));

   }
   public function store(Request $request)
   {
       $this->validate($request, ['tipomedicina' => 'required|alpha']);
       $TipoMedicamento = new TipoMedicina;
       $TipoMedicamento->tipo = $request->tipomedicina;
      $TipoMedicamento->estado = 1;
       $TipoMedicamento->save();
       return redirect('admin/tipoMedicamento/create');
   }

}
