<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use Illuminate\Http\Request;

class ComputadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computers = Computadora::all();
        return view('computers.index', compact('computers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $computers = request()->except('_token');
        Computadora::insert($computers);
        return redirect()->to(url('/computadoras'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function show(Computadora $computadora)
    {
        return view('computers.show', compact('computadora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function edit(Computadora $computadora)
    {
        return view('computers.edit', compact('computadora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Computadora $computadora)
    {
        $data =request()->except('_token');
        $computadora ->update($data);
        return redirect()->to(url('/computadoras'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Computadora $computadora)
    {
        $computadora->delete();
        return redirect()->to(url('/computadoras'));
    }
}
