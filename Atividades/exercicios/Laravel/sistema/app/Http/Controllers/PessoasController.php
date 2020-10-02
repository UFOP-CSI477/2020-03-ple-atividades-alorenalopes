<?php

namespace App\Http\Controllers;

use App\Models\Pessoas;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoas::orderBy('nome')->get();
        return view('pessoas.index', ['pessoas' => $pessoas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pessoas::create($request->all());
        session()->flash('mensagem', 'Pessoa cadastrada com sucesso!');
        return redirect()->route('pessoas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pessoas  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoas $pessoas)
    {
        return view('pessoas.show', ['pessoas' => $pessoas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pessoas  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoas $pessoas)
    {
        return view('pessoas.edit', ['pessoas' => $pessoas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pessoas  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoas $pessoas)
    {
        $pessoas->fill($request->all());
        $pessoas->save();

        session()->flash('mensagem', 'Pessoa atualizada com sucesso!');
        return redirect()->route('pessoas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pessoas  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoas $pessoas)
    {

        $pessoas->delete();
        session()->flash('mensagem', 'Pessoa excluída com sucesso!');

        return redirect()->route('pessoas.index');
    }
}
