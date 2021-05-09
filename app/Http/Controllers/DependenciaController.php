<?php

namespace App\Http\Controllers;

use App\Models\Dependencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DependenciaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dependencias= Dependencia::all();
        return view('dependencias.index', compact('dependencias'));
    }

    public function create()
    {
        return view('dependencias.create');
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Dependencia $dependencia)
    {
        return view('dependencias.show', compact('dependencia'));
    }


    public function edit(Dependencia $dependencia)
    {
        if(Auth::user()->rol->nombre == 'Super Admin') {
            // Trayendo el id y el nombre de todos los roles
            $dependencias=Dependencia::all(['id','nombre']);
            return view('dependencias.edit',compact('dependencias'));
        }else {
            return redirect()->action([DependenciaController::class, 'index']);
        }
    }


    public function update(Request $request, Dependencia $dependencia)
    {
        //
    }

    public function destroy(Dependencia $dependencia)
    {
        //
    }
    public function estado(Request $request,Dependencia $dependencia)
    {
        //Autorizar para que pueda modificar
       // $this->authorize('update', $actividad);
        if($dependencia->estado=='Desactivada'){
            //Leer el nuevo estado
            $dependencia->estado='Activada';
            //$user->notify(new EstadoUsuario($user));
            $dependencia->save();
        }
        else{
            $dependencia->estado='Desactivada';
            //$user->notify(new DesactivarUsuario($user));
            $dependencia->save();
        }
        return redirect()->action([DependenciaController::class, 'index']);
    }
}
