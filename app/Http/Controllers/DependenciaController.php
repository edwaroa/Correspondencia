<?php

namespace App\Http\Controllers;

use App\Models\Dependencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $data=request()->validate([
            'codigo'=>'required|string|max:10',
            'nombre'=>'required|string|max:50',
            'descripcion'=>'required|string|max:255'
        ]);

        DB::table('dependencias')->insert([
            'codigo'=>$data['codigo'],
            'nombre'=>$data['nombre'],
            'descripcion'=>$data['descripcion']
        ]);
        return redirect()->action([DependenciaController::class, 'index']);
    }

    public function show(Dependencia $dependencia)
    {
        return view('dependencias.show', compact('dependencia'));
    }


    public function edit(Dependencia $dependencia)
    {
        if(Auth::user()->rol->nombre == 'Super Admin') {
            return view('dependencias.edit',compact('dependencia'));
        }else {
            return redirect()->action([DependenciaController::class, 'index']);
        }
    }


    public function update(Request $request, Dependencia $dependencia)
    {
        $data=request()->validate([
            'codigo'=>'required|string|max:10',
            'nombre'=>'required|string|max:50',
            'descripcion'=>'required|string|max:255'
        ]);

        $dependencia->codigo=$data['codigo'];
        $dependencia->nombre=$data['nombre'];
        $dependencia->descripcion=$data['descripcion'];
        $dependencia->save();
        return redirect()->action([DependenciaController::class, 'index']);
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
