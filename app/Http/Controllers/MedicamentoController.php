<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Medicamento;

class MedicamentoController extends Controller
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
        $tipoPersona = DB::table('medicamentos')
                      ->orderBy('id','desc')
                      ->paginate(10);
         return view('adminlte::medicamento.NuevoMedicamento', compact('tipoPersona'));

     }

     public function store(Request $request)
     {
         $this->validate($request, ['NuevaMedicina' => 'required|alpha']);
         $NuevoMedicamento = new Medicamento;
         $NuevoMedicamento->descripcion= $request->NuevaMedicina;
         $NuevoMedicamento->unidad= $request->NuevaMedicina;
         $NuevoMedicamento->peso= $request->NuevaMedicina;
         $NuevoMedicamento->cantidad= $request->NuevaMedicina;
         $NuevoMedicamento->fecha_ingreso= $request->NuevaMedicina;
         $NuevoMedicamento->fecha_vencimiento= $request->NuevaMedicina;
         $NuevoMedicamento->idtipoMedicina= $request->NuevaMedicina;
         $NuevoMedicamento->save();
         return redirect('admin/NuevoMedicamento/create');
     }

}
