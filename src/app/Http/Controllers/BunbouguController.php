<?php

namespace App\Http\Controllers;

use App\Models\Bunbougu;
use Illuminate\Http\Request;

class BunbouguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bunbougus = Bunbougu::latest()->paginate(5);

        return view('index', compact('bunbougus'))
               ->with('i', (request()->input('page', 1) - 1) * 5);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bunbougu  $bunbougu
     * @return \Illuminate\Http\Response
     */
    public function show(Bunbougu $bunbougu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bunbougu  $bunbougu
     * @return \Illuminate\Http\Response
     */
    public function edit(Bunbougu $bunbougu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bunbougu  $bunbougu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bunbougu $bunbougu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bunbougu  $bunbougu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bunbougu $bunbougu)
    {
        //
    }
}
