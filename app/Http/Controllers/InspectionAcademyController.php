<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InspectionAcademy;
use App\Models\Region;

class InspectionAcademyController extends Controller
{
    public function index()
    {
        $inspectionAcademies = InspectionAcademy::all();
        return view('inspection_academies.index', compact('inspectionAcademies'));
    }

    public function create()
    {
        $regions = Region::all();
        return view('inspection_academies.create', compact('regions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'nom' => 'required',
            'id_region' => 'required',
        ]);

        InspectionAcademy::create($request->all());

        return redirect()->route('inspection_academies.index')
            ->with('success', 'Inspection Academy créée avec succès');
    }

    public function edit(InspectionAcademy $inspectionAcademy)
    {
        $regions = Region::all();
        return view('inspection_academies.edit', compact('inspectionAcademy', 'regions'));
    }

    public function update(Request $request, InspectionAcademy $inspectionAcademy)
    {
        $request->validate([
            'code' => 'required',
            'nom' => 'required',
            'id_region' => 'required',
        ]);

        $inspectionAcademy->update($request->all());

        return redirect()->route('inspection_academies.index')
            ->with('success', 'Inspection Academy mise à jour avec succès');
    }

    public function destroy(InspectionAcademy $inspectionAcademy)
    {
        $inspectionAcademy->delete();

        return redirect()->route('inspection_academies.index')
            ->with('success', 'Inspection Academy supprimée avec succès');
    }
}
