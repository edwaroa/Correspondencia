<?php

namespace App\Http\Controllers;

use App\Models\TipoPlanilla;
use Illuminate\Http\Request;

class TipoPlanillaController extends Controller
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
     * @param  \App\Models\TipoPlanilla  $tipoPlanilla
     * @return \Illuminate\Http\Response
     */
    public function show(TipoPlanilla $tipoPlanilla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoPlanilla  $tipoPlanilla
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoPlanilla $tipoPlanilla)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoPlanilla  $tipoPlanilla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoPlanilla $tipoPlanilla)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoPlanilla  $tipoPlanilla
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoPlanilla $tipoPlanilla)
    {
        //
    }
}
