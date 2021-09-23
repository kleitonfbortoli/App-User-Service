<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Symfony\Component\HttpFoundation\Request;

class PessoaControler extends Controller
{
    public $validations = [
        'nome' => 'string|required',
        'email' => 'email|required',
        'senha' => 'string|required',
    ];

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
        $request->validate($this->validations);

        $pessoa =  Pessoa::create($request->all());

        return response()->json($pessoa, 201);
    }

    public function update(Request $request, Pessoa $pessoa)
    {
        $pessoa->update($request->all());

        return response()->json($pessoa, 200);
    }

    public function delete(Pessoa $pessoa)
    {
        $pessoa->delete();

        return response()->json(null, 204);
    }
}
