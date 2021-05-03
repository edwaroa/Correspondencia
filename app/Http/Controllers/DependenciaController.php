<?php

namespace App\Http\Controllers;

use App\Models\dependencia;
use Illuminate\Http\Request;

class DependenciaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dependencias.index');
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
     * @param  \App\Models\dependencia  $dependencia
     * @return \Illuminate\Http\Response
     */
    public function show(dependencia $dependencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dependencia  $dependencia
     * @return \Illuminate\Http\Response
     */
    public function edit(dependencia $dependencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dependencia  $dependencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dependencia $dependencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dependencia  $dependencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(dependencia $dependencia)
    {
        //
    }
}
