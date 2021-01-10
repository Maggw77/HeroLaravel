<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();

        return view('admin.Heroes.index', ['heroes' => $heroes]);
    }

    public function create()
    {
        return view('admin.Heroes.create');
    }


    public function store(Request $request)
    {
        saveHero($request);

        return redirect()->route('admin.Heroes');
    }

    public function edit($id){
        $hero = Hero::find($id);

        return view('admin.Heroes.edit', ['hero' => $hero]);
    }

    public function saveHero(Request $request){
        $hero = new Hero();
        $hero->name = $request->input('name');
        $hero->hp = $request->input('hp');
        $hero->atq = $request->input('atq');
        $hero->def = $request->input('def');
        $hero->luck = $request->input('luck');
        $hero->coins = $request->input('coins');
        $hero->xp = 0;
        $hero->level_id = 1;
        $hero->save();

    }

    public function update($id) {
        $hero =Hero::find($id);


    }

}
