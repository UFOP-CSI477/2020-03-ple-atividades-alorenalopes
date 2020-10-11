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
        return redirect()->route('pastas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function show(Exame $exame)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function edit(Exame $exame)
    {
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exame $exame)
    {
        
    }
}
