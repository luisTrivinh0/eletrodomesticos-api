<?php

namespace App\Http\Controllers;

use App\Models\Eletrodomestico;
use Illuminate\Http\Request;

class EletrodomesticoController extends Controller
{
    public function index()
    {
        $eletrodomesticos = Eletrodomestico::all();
        return response()->json($eletrodomesticos);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'tensao' => 'required',
            'marca' => 'required',
        ]);

        $eletrodomestico = Eletrodomestico::create($request->all());

        return response()->json($eletrodomestico, 201);
    }

    public function show($id)
    {
        $eletrodomestico = Eletrodomestico::findOrFail($id);
        return response()->json($eletrodomestico);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'tensao' => 'required',
            'marca' => 'required',
        ]);

        $eletrodomestico = Eletrodomestico::findOrFail($id);
        $eletrodomestico->update($request->all());

        return response()->json($eletrodomestico);
    }

    public function destroy($id)
    {
        $eletrodomestico = Eletrodomestico::findOrFail($id);
        $eletrodomestico->delete();

        return response()->json(null, 204);
    }
}