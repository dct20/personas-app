<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use App\Models\Departamento;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function index()
    {
        $municipios = Municipio::with('departamento')->get();
        return view('municipio.index', compact('municipios'));
    }

    public function create()
    {
        $departamentos = Departamento::all();
        return view('municipio.new', compact('departamentos'));
    }

    public function store(Request $request)
    {
        $municipio = new Municipio();
        $municipio->muni_nomb = $request->muni_nomb;
        $municipio->depa_codi = $request->depa_codi;
        $municipio->save();

        return redirect()->route('municipios.index')->with('success', 'Municipio agregado correctamente.');
    }

    public function edit($id)
    {
        $municipio = Municipio::findOrFail($id);
        $departamentos = Departamento::all();
        return view('municipio.edit', compact('municipio', 'departamentos'));
    }

    public function update(Request $request, $id)
    {
        $municipio = Municipio::findOrFail($id);
        $municipio->muni_nomb = $request->muni_nomb;
        $municipio->depa_codi = $request->depa_codi;
        $municipio->save();

        return redirect()->route('municipios.index')->with('success', 'Municipio actualizado correctamente.');
    }

    public function destroy($id)
    {
        $municipio = Municipio::findOrFail($id);
        $municipio->delete();

        return redirect()->route('municipios.index')->with('success', 'Municipio eliminado correctamente.');
    }
}
