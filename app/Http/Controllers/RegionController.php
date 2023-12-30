<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;

class RegionController extends Controller
{
    public function index()
    {
        $regions = Region::all();
        return view('regions.index', compact('regions'));
    }

    public function create()
    {
        return view('regions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'nom' => 'required',
        ]);

        Region::create($request->all());

        return redirect()->route('regions.index')
            ->with('success', 'Region créée avec succès');
    }

    public function edit(Region $region)
    {
        return view('regions.edit', compact('region'));
    }

    public function update(Request $request, Region $region)
    {
        $request->validate([
            'code' => 'required',
            'nom' => 'required',
        ]);

        $region->update($request->all());

        return redirect()->route('regions.index')
            ->with('success', 'Region mise à jour avec succès');
    }

    public function destroy(Region $region)
    {
        $region->delete();

        return redirect()->route('regions.index')
            ->with('success', 'Region supprimée avec succès');
    }
}
