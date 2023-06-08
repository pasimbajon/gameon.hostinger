<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $games = Game::all();
        return view ('pages.adminproducts')->with('games', $games);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.games.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'img_cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        Game::create($input);
        
        return redirect('/admin/games')->with('flash_message', 'Game Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $games = Game::find($id);
        return view('admin.games.show')->with('games', $games);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $games = Game::find($id);
        return view('admin.games.edit')->with('games', $games);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $games = Game::find($id);
        $input = $request->all();
        $games->update($input);
        return redirect('/admin/games')->with('flash_message', 'Game Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Game::destroy($id);
        return redirect('/admin/games')->with('flash_message', 'Game deleted!');
    }
}
