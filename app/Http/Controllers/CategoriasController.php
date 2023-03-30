<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\User;

class CategoriasController extends Controller
{   
    
    private static function getCategorias(){
        return [
            ['id' => '1', 'nome' => 'Mike','idade' => '21', 'email' => 'mike@gmail.com'],
            ['id' => '2', 'nome' => 'Joao','idade' => '24', 'email' => 'joao@gmail.com'],
            ['id' => '3', 'nome' => 'Bruna','idade' => '31', 'email' => 'bruna@gmail.com'],
            ['id' => '4', 'nome' => 'Ana','idade' => '18', 'email' => 'ana@gmail.com'],
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // GET
        return view('categorias.index', [
            'usuarios' => User::all(),
            'categorias' => Categorias::all(),
            'categoriaInput' => '<scipt>alert("Fala men")</script>',
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->validate([
            'input_categoria' => ['required', 'string'],
        ]);

        // POST
        $categoria = new Categorias();

        $categoria->nome = strip_tags($request->input('input_categoria'));
        $categoria->save();

        return redirect()->route('categorias.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $categoria)
    {

        return view('categorias.show', [
            'categoria' => Categorias::findOrFail($categoria),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $categoria)
    {
        // GET
        return view('categorias.edit', [
            'categoria' => Categorias::findOrFail($categoria),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $categoria)
    {
        // POST
        $request->validate([
            'input_categoria' => ['required', 'string'],
        ]);

        // POST
        $record = Categorias::findOrFail($categoria);

        $record->nome = strip_tags($request->input('input_categoria'));
        $record->save();

        return redirect()->route('categorias.show', $categoria);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // DELETE
    }
}
