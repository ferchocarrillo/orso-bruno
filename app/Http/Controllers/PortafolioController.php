<?php

namespace App\Http\Controllers;

use App\portafolio;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portafolio.index');
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
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function show(portafolio $portafolio)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function edit(portafolio $portafolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateportafolioRequest  $request
     * @param  \App\Models\portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, portafolio $portafolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(portafolio $portafolio)
    {
        //
    }
}
