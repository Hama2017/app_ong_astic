<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Region;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function index()
    {
        $departements = Departement::all();
        return view('departements.index', compact('departements'));
    }

    public function create()
    {
        $regions = Region::all();
        return view('departements.create', compact('regions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'nom' => 'required',
            'id_region' => 'required',
        ]);

        Departement::create($request->all());

        return redirect()->route('departements.index')
            ->with('success', 'Département créé avec succès');
    }

    public function edit(Departement $departement)
    {
        $regions = Region::all();
        return view('departements.edit', compact('departement', 'regions'));
    }

    public function update(Request $request, Departement $departement)
    {
        $request->validate([
            'code' => 'required',
            'nom' => 'required',
            'id_region' => 'required',
        ]);

        $departement->update($request->all());

        return redirect()->route('departements.index')
            ->with('success', 'Département mis à jour avec succès');
    }

    public function destroy(Departement $departement)
    {
        $departement->delete();

        return redirect()->route('departements.index')
            ->with('success', 'Département supprimé avec succès');
    }
}
