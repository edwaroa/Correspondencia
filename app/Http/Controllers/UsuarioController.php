<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use App\Models\Dependencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Psy\CodeCleaner\UseStatementPass;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $usuarios = User::all();
        $roles=Rol::all();
        return view('usuarios.index')->with('usuarios',$usuarios)->with('roles',$roles);
    }

    public function create()
    {
        $dependencias=Dependencia::all(['id','nombre']);
        $roles=Rol::all(['id','nombre']);
        return view('usuarios.create')->with('roles',$roles)->with('dependencias',$dependencias);
    }

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
        $imagen= Image::make(public_path("storage/{$ruta_imagen}"))->fit(550,550);
        $imagen->save();
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
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->action([UsuarioController::class, 'index']);
    }

    public function show(User $user)
    {
        return view('usuarios.show', compact('user'));
    }

    public function edit(User $user)
    {
        if(Auth::user()->rol->nombre == 'Super Admin') {
            // Trayendo el id y el nombre de todos los roles
            $dependencias=Dependencia::all(['id','nombre']);
            $roles=Rol::all(['id','nombre']);
            return view('usuarios.edit',compact('roles','dependencias','user'));
        }else {
            return redirect()->action([UsuarioController::class, 'index']);
        }
    }


    public function update(Request $request, User $user)
    {
        $data=request()->validate([
            'tipo_documento'=>'required',
            'documento'=>'string|unique:users,documento,' .$user->id,
            'nombre'=>'required|string|max:50',
            'apellido'=>'required|string|max:50',
            'iniciales'=>'required|string|min:3|max:8',
            'rol'=>'required',
            'area'=>'required',
            'imagen'=>'image',
            'email'=>'required|string|email|max:255|unique:users,email,'.$user->id
        ]);

        $user->tipo_documento=$data['tipo_documento'];
        $user->documento=$data['documento'];
        $user->nombre=$data['nombre'];
        $user->apellido=$data['apellido'];
        $user->iniciales=$data['iniciales'];
        $user->rol_id=$data['rol'];
        $user->area=$data['area'];

        if(request('imagen')){
            $ruta_imagen= $request['imagen']->store('imagen-usuarios', 'public');
            //Ajustar tamaño
            $imagen= Image::make(public_path("storage/{$ruta_imagen}"))->fit(550,550);
            $imagen->save();

            $user->imagen=$ruta_imagen;
        }

        $user->save();
        return redirect()->action([UsuarioController::class, 'index']);
    }


    public function estado(Request $request,User $user)
    {
        //Autorizar para que pueda modificar
       // $this->authorize('update', $actividad);
        if($user->estado=='Desactivado'){
            //Leer el nuevo estado
            $user->estado='Activado';
            //$user->notify(new EstadoUsuario($user));
            $user->save();
        }
        else{
            $user->estado='Desactivado';
            //$user->notify(new DesactivarUsuario($user));
            $user->save();
        }
        return redirect()->action([UsuarioController::class, 'index']);
    }
}
