<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view ('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create')->with('status','Nuovo fumetto aggiunto alla lista');
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
            'thumb' => 'required|url',
            'title' => 'required|min:5',
            'price' => 'required|numeric|min:0',
            'series' => 'required|min:5',
            'sale_date' => 'required|date',
            'type' => 'required|min:5',
            'description' => 'required|min:20'
        ]);

        $data = $request->all();
        $fumetto = new Comic();
        $fumetto-> fill($data);
        $fumetto->save();

        return redirect()->route('comic.show', ['comic'=> $fumetto->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'thumb' => 'required|url',
            'title' => 'required|min:5',
            'price' => 'required|numeric|min:0',
            'series' => 'required|min:5',
            'sale_date' => 'required|date',
            'type' => 'required|min:5',
            'description' => 'required|min:20'
        ]);
        
        $data = $request->all();
        $comic->update($data);
        $comic->save();

        return redirect()->route('comic.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comic.index')->with('status','Fumetto correttamente rimosso dalla lista');
    }
}
