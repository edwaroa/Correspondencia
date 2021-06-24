<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Planilla;
use App\Models\TipoEnvio;
use App\Models\Dependencia;
use App\Models\TipoDestino;
use App\Models\TipoPlanilla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PlanillaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $planillas=Planilla::all();
        return view('planillas.index', compact('planillas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios=User::all(['id','nombre','apellido']);
        $dependencias=Dependencia::all(['id','nombre']);
        $tipoplanillas=TipoPlanilla::all(['id','nombre']);
        $tipodestinos=TipoDestino::all(['id','nombre']);
        $tipoenvios=TipoEnvio::all(['id','nombre']);
        $fecha_actual=Carbon::now()->format('d-m-Y');
        return view('planillas.create',compact('dependencias','usuarios','fecha_actual','tipoplanillas','tipoenvios','tipodestinos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->validate([
            'numero_planilla'=>'required|unique:planilla,numero_planilla',
            'id_dependencia'=>'required',
            'tipo_envio'=>'required',
            'tipo_planilla'=>'required',
            'tipo_destino'=>'required',
            'autoridad_destino'=>'required|string|min:3|max:50',
            'contenido_destino'=>'required|string|min:3',
            'direccion'=>'required|string',
            'ciudad'=>'required|string',
            'departamento'=>'required|string',
            'peso'=>'required',
            'cantidad'=>'required',
            'valor_declarado'=>'required',
            'seguro'=>'required',
            'valor_total'=>'required',
            'usuario_entrega'=>'required',
            'fecha_entrega'=>'required',
            'usuario_recibe'=>'required',
            'fecha_recibe'=>'required'
        ]);

        DB::table('planillas')->insert([
            'numero_planilla'=>$data['numero_planilla'],
            'id_dependencia'=>$data['id_dependencia'],
            'tipo_envio'=>$data['tipo_envio'],
            'tipo_planilla'=>$data['tipo_planilla'],
            'tipo_destino'=>$data['tipo_destino'],
            'autoridad_destino'=>$data['autoridad_destino'],
            'contenido_destino'=>$data['contenido_destino'],
            'direccion' => $data['direccion'],
            'ciudad' => $data['ciudad'],
            'departamento' => $data['departamento'],
            'peso' => $data['peso'],
            'cantidad' => $data['cantidad'],
            'valor_declarado' => $data['valor_declarado'],
            'seguro' => $data['seguro'],
            'valor_total' => $data['valor_total'],
            'numero_planilla'=>$data['numero_planilla'],
            'usuario_entrega' => $data['usuario_entrega'],
            'fecha_entrega' => $data['fecha_entrega'],
            'usuario_recibe' => $data['usuario_recibe'],
            'fecha_recibe' => $data['fecha_recibe'],
            'recibido'=>'Si',
            'liquidado' =>'Si',
            'impreso'=>'Si',
            'fecha_impreso'=>Carbon::now()
        ]);
        return redirect()->action([PlanillaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Planilla  $planilla
     * @return \Illuminate\Http\Response
     */
    public function show(Planilla $planilla)
    {
        return view('planillas.show', compact('planilla'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Planilla  $planilla
     * @return \Illuminate\Http\Response
     */
    public function edit(Planilla $planilla)
    {
        if(Auth::user()->rol->nombre == 'Super Admin') {
            // Trayendo el id y el nombre de todos los roles
            $dependencias=Dependencia::all(['id','nombre']);
            $usuarios=User::all(['id','nombre','apellido']);
            $dependencias=Dependencia::all(['id','nombre']);
            $tipoplanillas=TipoPlanilla::all(['id','nombre']);
            $tipodestinos=TipoDestino::all(['id','nombre']);
            $tipoenvios=TipoEnvio::all(['id','nombre']);
            $fecha_actual=Carbon::now()->format('d-m-Y');
            return view('planillas.edit',compact('planilla','dependencias','usuarios','fecha_actual','tipoplanillas','tipoenvios','tipodestinos'));
        }else {
            return redirect()->action([UsuarioController::class, 'index']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Planilla  $planilla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planilla $planilla)
    {
        //
    }

    public function estado(Request $request,Planilla $planilla)
    {
        //Autorizar para que pueda modificar
       // $this->authorize('update', $actividad);
        if($planilla->estado=='Desactivada'){
            //Leer el nuevo estado
            $planilla->estado='Activada';
            $planilla->save();
        }
        else{
            $planilla->estado='Desactivada';
            $planilla->save();
        }
        return redirect()->action([PlanillaController::class, 'index']);
    }
}
