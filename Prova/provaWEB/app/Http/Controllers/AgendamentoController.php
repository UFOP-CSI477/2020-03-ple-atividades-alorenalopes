<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Coleta;
use Illuminate\Support\Facades\Auth;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendanome = Agendamento::orderBy(
            Pessoa::select('nome')
                ->whereColumn('id', 'agendamentos.pessoa_id')
                ->orderBy('nome')
        )->get();

        $agendadata = Agendamento::orderByDesc('data')->get();

        return view('agendamentos.index', ['dados' => $agendanome, 'data' => $agendadata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $pacientes = Pessoa::orderBy('nome')->get();
        $coletas = Coleta::orderBy('nome')->get();
        return view('agendamentos.create', ['pacientes' => $pacientes, 'coletas' => $coletas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Agendamento::create($request->all());
        session()->flash('mensagem', 'Agendamento cadastrado com sucesso!');
        return redirect()->route('agendamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function show(Agendamento $agendamento)
    {
        if (Auth::check()) {
            return view('agendamentos.show', ['dados' => $agendamento]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Agendamento $agendamento)
    {
        $pacientes = Pessoa::orderBy('nome')->get();
        $coletas = Coleta::orderBy('nome')->get();
        return view('agendamentos.edit', ['dados' => $agendamento, 'pacientes' => $pacientes, 'coletas' => $coletas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agendamento $agendamento)
    {
        $agendamento->fill($request->all());
        $agendamento->save();

        session()->flash('mensagem', 'Agendamento atualizado com sucesso!');
        return redirect()->route('agendamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agendamento $agendamento)
    {
        $agendamento->delete();
        session()->flash('mensagem', 'Agendamento excluído com sucesso!');
        return redirect()->route('agendamentos.index');
    }
}
