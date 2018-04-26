<?php

namespace App\Http\Controllers;

use App\marques;
use Illuminate\Http\Request;

class MarquesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('marques')
            ->with('marques',marques::all())
            ;
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
        $request->validate([
            'nom' => 'required|unique:marques|max:30',
        ]);

        marques::create(request()->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\marques  $marques
     * @return \Illuminate\Http\Response
     */
    public function show(marques $marques)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\marques  $marques
     * @return \Illuminate\Http\Response
     */
    public function edit(marques $marques)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\marques  $marques
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, marques $marques)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\marques  $marques
     * @return \Illuminate\Http\Response
     */
    public function destroy(marques $marques)
    {
        //
    }
}
