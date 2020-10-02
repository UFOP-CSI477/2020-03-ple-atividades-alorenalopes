<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipamentos = Equipamento::orderBy('nome')->get();
        return view('equipamentos.index', ['dados' => $equipamentos]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Equipamento::create($request->all());
        session()->flash('mensagem', 'Equipamento cadastrado com sucesso!');
        return redirect()->route('equipamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipamentos  $equipamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Equipamento $equipamento)
    {
        if (Auth::check()) {
            return view('equipamentos.show', ['dados' => $equipamento]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipamentos  $equipamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipamento $equipamento)
    {
        return view('equipamentos.edit', ['dados' => $equipamento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipamentos  $equipamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipamento $equipamento)
    {
        $equipamento->fill($request->all());
        $equipamento->save();

        session()->flash('mensagem', 'Equipamento atualizado com sucesso!');
        return redirect()->route('equipamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipamentos  $equipamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipamento $equipamento)
    {

        $equipamentos =  Equipamento::join('registros', $equipamento->id, '=', 'registros.equipamentos_id')
            ->get();
        if ($equipamentos->count() > 0) {
            session()->flash('mensagem', 'Exclusão não permitida, existem manutenções associadas!');
        } else {
            $equipamento->delete();
            session()->flash('mensagem', 'Equipamento excluído com sucesso!');
        }
        return redirect()->route('equipamentos.index');
    }
}
