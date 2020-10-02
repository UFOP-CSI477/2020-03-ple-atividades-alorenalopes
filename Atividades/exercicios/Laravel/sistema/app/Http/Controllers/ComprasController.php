<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use App\Models\Produto;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Compras::orderBy('nome')->get();
        return view('compras.index', ['compras' => $compras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produtos = Produto::orderBy('nome')->get();
        return view('compras.create', ['produtos' => $produtos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Compras::create($request->all());
        session()->flash('mensagem', 'Compra cadastrada com sucesso!');
        return redirect()->route('compras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function show(Compras $compras)
    {
        return view('compras.show', ['compras' => $compras]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function edit(Compras $compras)
    {
        return view('compras.edit', ['compras' => $compras]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compras $compras)
    {
        $compras->fill($request->all());
        $compras->save();

        session()->flash('mensagem', 'Compra atualizada com sucesso!');
        return redirect()->route('compras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compras $compras)
    {

        $compras->delete();
        session()->flash('mensagem', 'Compra excluída com sucesso!');

        return redirect()->route('compras.index');
    }
}
