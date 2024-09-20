<?php

namespace App\Http\Controllers;
use App\Models\Music;


class MusicController extends Controller
{
    public function index(){
        
        $musics = Music::all();
        return view('music.index',compact('musics'));
        

    }
    public function create(){
        return view('music.create');
    }
    public function store(){
        $data = request()->validate([
            'artist' => 'string',
            'genre' => 'string',
            'followers' => 'string',
            'image' => 'string'
        ]);
        Music::create($data);
        return redirect()->route('music.index');

    }
    public function show(Music $music){
        
        return view('music.show',compact('music'));
    }

    public function edit(Music $music){
        return view('music.edit',compact('music'));
    }
    public function update(Music $music){
        
        $data = request()->validate([
            'artist' => 'string',
            'genre' => 'string',
            'followers' => 'string',
            'image' => 'string'
        ]);
        $music->update($data);
        return redirect()->route('music.show',$music->id);
    }
    public function destroy(Music $music){
        $music->delete();
        return redirect()->route('music.index');

    }
}