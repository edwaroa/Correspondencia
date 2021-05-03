<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $roles=Rol::all(['id','nombre']);
        return view('usuarios.create')->with('roles',$roles);
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
        // $imagen= Image::make(public_path("storage/{$ruta_imagen}"))->fit(1200,550);
        // $imagen->save();
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
        //
    }


    public function update(Request $request, User $user)
    {
        //
    }


    public function destroy(User $user)
    {
        //
    }
}
