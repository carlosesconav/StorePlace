<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use App\Http\Requests\Request;
use Inertia\Inertia;

class SongsController extends Controller
{

    

    public function index()
    {
        $songs = Songs::all();
        return Inertia::render('Songs/Index',['songs' => $songs]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       $request->validate([
        'titulo' => 'required',
        'autor' => 'required',
        'album' => 'required'
       ]);

       $song = new Songs($request->input());
       $song->save();
       
       return redirect()->route('songs.index');
    }

    public function show(Songs $songs)
    {
        //
    }

    public function edit(Songs $songs)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $song = Songs::find($id);
        $song->fill($request->input())->saveOrFail();

        return redirect()->route('songs.index');
    }

    public function destroy($id)
    {
        $song = Songs::find($id);
        $song->delete();

        return redirect()->route('songs.index');
    }
}