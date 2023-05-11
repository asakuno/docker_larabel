<?php

namespace App\Http\Controllers;

use App\Models\Bunbougu;
use App\Models\Kind;
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
        $bunbougus = Bunbougu::select([
            'b.id',
            'b.name',
            'b.price',
            'b.description',
            'k.name as kind',
        ])
        ->from('bunbougus as b')
        ->join('kinds as k', function($join){
            $join->on('b.kind', '=', 'k.id');
        })
        ->orderBy('b.id', 'DESC')
        ->paginate(5);


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
        $kinds = Kind::all();
        return view('create')
            ->with('kinds', $kinds);
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
            'name' => 'required|max:20',
            'price' => 'required|integer',
            'kind' => 'required|integer',
            'description' => 'required|max:140',
        ]);

        $bunbougu = new Bunbougu;
        $bunbougu->name = $request->input(["name"]);
        $bunbougu->price = $request->input(["price"]);
        $bunbougu->kind = $request->input(["kind"]);
        $bunbougu->description = $request->input(["description"]);
        $bunbougu->save();

        return redirect()->route('bunbougus.index');
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
        $kinds = Kind::all();
        return view('edit', compact('bunbougu'))
            ->with('kinds', $kinds);
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
        $request->validate([
            'name' => 'required|max:20',
            'price' => 'required|integer',
            'kind' => 'required|integer',
            'description' => 'required|max:140',
        ]);

        $bunbougu->name = $request->input(["name"]);
        $bunbougu->price = $request->input(["price"]);
        $bunbougu->kind = $request->input(["kind"]);
        $bunbougu->description = $request->input(["description"]);
        $bunbougu->save();

        return redirect()->route('bunbougus.index');
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
