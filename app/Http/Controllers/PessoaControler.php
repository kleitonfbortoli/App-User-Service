<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaControler extends Controller
{
    public function index()
    {
        return Pessoa::all();
    }

    public function show(Pessoa $pessoa)
    {
        return $pessoa;
    }

    public function store(Request $request)
    {
        $pessoa =  Pessoa::create($request->all());

        return response()->json($pessoa, 201);
    }
    
    public function update(Request $request, Pessoa $pessoa)
    {
        var_dump($request->all());
        $pessoa->update($request->all());

        return response()->json($pessoa, 200);
    }

    public function delete(Pessoa $pessoa)
    {
        $pessoa->delete();

        return response()->json(null, 204);
    }
}
