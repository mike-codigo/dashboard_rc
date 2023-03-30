<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\User;

class UsersController extends Controller
{   

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // GET
        return view('users.index', [
            'users' => User::all(),
            'userInput' => '<scipt>alert("Fala men")</script>',
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categorias::all();

        return view('users.create', [
            'categorias' => $categorias,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'input_name' => ['required', 'string'],
            'input_email' => ['required', 'string'],
            'input_password' => ['required', 'string'],
        ]);


        // POST
        $user = new User();

        $user->name = strip_tags($request->input('input_name'));
        $user->email = strip_tags($request->input('input_email'));
        $user->password = strip_tags($request->input('input_password'));
        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $user)
    {
        // GET
        return view('users.edit', [
            'user' => User::findOrFail($user),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $user)
    {
        // GET
        return view('users.edit', [
            'user' => User::findOrFail($user),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $user)
    {
        // POST
        $request->validate([
            'input_name' => ['required', 'string'],
            'input_email' => ['required', 'string'],
            'input_password' => ['required', 'string'],
            'input_categoria_users' => ['required', 'integer'],
        ]);


        // POST
        $record = User::findOrFail($user);
        $categoria_obj = Categorias::find($request->input('input_categoria_user'));

        $record->name = strip_tags($request->input('input_name'));
        $record->email = strip_tags($request->input('input_email'));
        $record->password = strip_tags($request->input('input_password'));
        $record->categoria()->associate($categoria_obj);
        $record->save();

        return redirect()->route('users.show', $user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // DELETE
    }
}
