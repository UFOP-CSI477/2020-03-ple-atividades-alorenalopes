<?php

namespace App\Http\Controllers;

use App\Models\Exame;
use App\Models\Pasta;
use Illuminate\Http\Request;

class ExameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exames = Exame::orderBy('date')->get();
        return view('exames.index', ['dados' => $exames]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasta = Pasta::get();
        return view('exames.create', ['dados' => $pasta]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Exame::create($request->all());
        return redirect()->route('exames.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function show(Exame $exame)
    {
        return view('exames.show', ['dados' => $exame]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function edit(Exame $exame)
    {
        return view('exames.edit', ['dados' => $exame]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exame $exame)
    {
        $exame->fill($request->all());
        $exame->save();
        return redirect()->route('exames.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exame $exame)
    {
        $exame->delete();
        return redirect()->route('exames.index');
    }
}
