<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Planilla;
use App\Models\Dependencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $usuarios=User::all(['id','nombre']);
        $dependencias=Dependencia::all(['id','nombre']);
        $fecha_actual=Carbon::now()->format('d-m-Y');
        return view('planillas.create',compact('dependencias','usuarios','fecha_actual'));
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
            'tipo_documento'=>'required',
            'documento'=>'required|string|max:50',
            'nombre'=>'required|string|max:50',
            'apellido'=>'required|string|max:50',
            'iniciales'=>'required|string|min:3|max:8',
            'rol'=>'required',
            'area'=>'required',
            'imagen'=>'required|image',
            'email'=>'required|email|unique:users',
            'password'=>'required','min:8','max:12',
        ]);

        $ruta_imagen= $request['imagen']->store('imagen-usuarios', 'public');
        //Ajustar tamaño
        DB::table('users')->insert([
            'tipo_documento'=>$data['tipo_documento'],
            'documento'=>$data['documento'],
            'nombre'=>$data['nombre'],
            'apellido'=>$data['apellido'],
            'iniciales'=>$data['iniciales'],
            'rol_id'=>$data['rol'],
            'area'=>$data['area'],
            'imagen'=>$ruta_imagen,
            'email' => $data['email'],
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Planilla  $planilla
     * @return \Illuminate\Http\Response
     */
    public function edit(Planilla $planilla)
    {
        //
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
