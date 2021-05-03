<?php

namespace App\Http\Controllers;

use App\Models\TipoEnvio;
use Illuminate\Http\Request;

class TipoEnvioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
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
     * @param  \App\Models\TipoEnvio  $tipoEnvio
     * @return \Illuminate\Http\Response
     */
    public function show(TipoEnvio $tipoEnvio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoEnvio  $tipoEnvio
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoEnvio $tipoEnvio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoEnvio  $tipoEnvio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoEnvio $tipoEnvio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoEnvio  $tipoEnvio
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoEnvio $tipoEnvio)
    {
        //
    }
}
