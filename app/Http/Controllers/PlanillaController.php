<?php

namespace App\Http\Controllers;

use App\Models\Planilla;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
