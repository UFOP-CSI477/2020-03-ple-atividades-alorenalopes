<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\Registro;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro = Registro::orderBy('datalimite')
        ->join('equipamentos', 'registros.equipamentos_id', '=', 'equipamentos.id')
        ->join('users', 'registros.user_id', '=', 'users.id')
        ->select('users.name', 'equipamentos.nome','registros.*')
        ->get();
        return view('registros.index', ['dados' => $registro]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipamentos = Equipamento::orderBy('nome')->get();
        return view('registros.create', ['equipamentos' => $equipamentos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Registro::create($request->all());
        session()->flash('mensagem', 'Manutenção cadastrada com sucesso!');
        return redirect()->route('registros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        if(Auth::check()){
        $registros = 
        Registro::join('equipamentos', 'registros.equipamentos_id', '=', 'equipamentos.id')
        ->join('users', 'registros.user_id', '=', 'users.id')
        ->select('users.name', 'equipamentos.nome','registros.*')
        ->where('registros.id', '=', $registro->id)
        ->first();
        return view('registros.show', ['dados' => $registros]);
        }else{
            session()->flash('mensagem','Operação não permitida!');
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
            return view('registros.edit', ['dados' => $registro]);        
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        $registro->fill($request->all());
        $registro->save();

        session()->flash('mensagem', 'Manutenção atualizada com sucesso!');
        return redirect()->route('registros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        $registro->delete();
        session()->flash('mensagem', 'Equipamento excluído com sucesso!');
        return redirect()->route('registros.index');
    }
}
