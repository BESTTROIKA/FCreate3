<?php

namespace App\Http\Controllers;

use App\Models\Dinosaur;
use Illuminate\Http\Request;

class DinosaurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dinosaurs = Dinosaur::all();
        return view('dinosaurs.index', compact('dinosaurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dinosaurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dinosaurs = request()->except('_token');
        Dinosaur::insert($dinosaurs);
        return redirect()->to(url('/dinosaurs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dinosaur  $dinosaur
     * @return \Illuminate\Http\Response
     */
    public function show(Dinosaur $dinosaur)
    {
        return view('dinosaurs.show', compact('dinosaur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dinosaur  $dinosaur
     * @return \Illuminate\Http\Response
     */
    public function edit(Dinosaur $dinosaur)
    {
        return view('dinosaurs.edit', compact('dinosaur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dinosaur  $dinosaur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dinosaur $dinosaur)
    {
        $data =request()->except('_token');
        $dinosaur ->update($data);
        return redirect()->to(url('/dinosaurs'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dinosaur  $dinosaur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dinosaur $dinosaur)
    {
        $dinosaur->delete();
        return \redirect()->to(url('/dinosaurs'));
    }
}
