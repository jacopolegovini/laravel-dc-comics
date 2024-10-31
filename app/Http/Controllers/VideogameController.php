<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideogameRequest;
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
    public function store(StoreVideogameRequest $request)
    {
        // $validatedData = $request->validate([
        //     'title' => 'required|min:3',
        //     'releaseYearJP' => 'required|numeric|min:4|max:4',
        //     'releaseYearWW' => 'required|numeric|min:4|max:4',
        //     'console' => 'required|min:2',
        //     'coverImage' => 'required|url',
        // ]);

        $validated = $request->validated();
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
        $videogames = Videogame::findOrFail($id);
        return view('pages.edit', compact('videogames'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:3',
            'releaseYearJP' => 'required|numeric|min:3|max:4',
            'releaseYearWW' => 'required|numeric|min:3|max:4',
            'console' => 'required|min:2',
            'coverImage' => 'required|url',
        ]);

        $data = $request->all();
        $videogame = Videogame::findOrFail($id);

        $videogame->title = $data['title'];
        $videogame->releaseYearJP = $data['releaseYearJP'];
        $videogame->releaseYearWW = $data['releaseYearWW'];
        $videogame->console = $data['console'];
        $videogame->coverImage = $data['coverImage'];
        $videogame->update();

        return redirect()->route('videogame.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $videogame = Videogame::findOrFail($id);
        $videogame->delete();

        return redirect()->route('videogame.index');
    }
}
