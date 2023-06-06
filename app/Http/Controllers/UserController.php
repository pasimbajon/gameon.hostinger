<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $users = User::all();
        return view ('pages.adminuser')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        User::create($input);
        return redirect('/admin/users')->with('flash_message', 'User Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $users = User::find($id);
        return view('admin.users.show')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $users = User::find($id);
        return view('admin.users.edit')->with('users', $users);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $users = User::find($id);
        $input = $request->all();
        $users->update($input);
        return redirect('/admin/users')->with('flash_message', 'User Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        User::destroy($id);
        return redirect('/admin/users')->with('flash_message', 'User deleted!');
    }
}
