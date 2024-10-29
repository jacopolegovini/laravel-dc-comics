<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videogame;

class VideogameController extends Controller
{
    public function index()
    {
        $videogames = Videogame::all();
        return view('pages.videogame', compact('videogames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newVideogame = new Videogame;
        $newVideogame->title = $data['title'];
        $newVideogame->releaseYearJP = $data['releaseYearJP'];
        $newVideogame->releaseYearWW = $data['releaseYearWW'];
        $newVideogame->console = $data['console'];
        $newVideogame->coverImage = $data['coverImage'];
        $newVideogame->save();

        return redirect()->route('videogame.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $videogames = Videogame::findOrFail($id);
        return view("pages.videogame_show", compact("videogames"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
