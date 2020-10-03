<?php

namespace App\Http\Controllers;

use App\Models\Agendamentos;
use Illuminate\Http\Request;

class AgendamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendamentos = Agendamentos::orderBy('data', 'desc')->orderBy('nome','asc')->get();
        return view('agendamentos.index', ['dados' => $agendamentos]);
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
     * @param  \App\Models\Agendamentos  $agendamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Agendamentos $agendamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agendamentos  $agendamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Agendamentos $agendamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agendamentos  $agendamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agendamentos $agendamentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agendamentos  $agendamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agendamentos $agendamentos)
    {
        //
    }
}
