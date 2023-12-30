<?php

namespace App\Http\Controllers;

use App\Models\EtablissementScolaire;
use App\Models\InspectionAcademy;
use App\Models\Departement;
use Illuminate\Http\Request;

class EtablissementScolaireController extends Controller
{
    public function index()
    {
        $etablissementsScolaires = EtablissementScolaire::all();
        return view('etablissement_scolaires.index', compact('etablissementsScolaires'));
    }

    public function create()
    {
        $inspectionAcademies = InspectionAcademy::all();
        $departements = Departement::all();
        return view('etablissement_scolaires.create', compact('inspectionAcademies', 'departements'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'nom' => 'required',
            'localisation' => 'required',
            'id_ia' => 'required',
            'id_departement' => 'required',
        ]);

        EtablissementScolaire::create($request->all());

        return redirect()->route('etablissement_scolaires.index')
            ->with('success', 'Établissement Scolaire créé avec succès');
    }

    public function edit(EtablissementScolaire $etablissementScolaire)
    {
        $inspectionAcademies = InspectionAcademy::all();
        $departements = Departement::all();
        return view('etablissement_scolaires.edit', compact('etablissementScolaire', 'inspectionAcademies', 'departements'));
    }

    public function update(Request $request, EtablissementScolaire $etablissementScolaire)
    {
        $request->validate([
            'code' => 'required',
            'nom' => 'required',
            'localisation' => 'required',
            'id_ia' => 'required',
            'id_departement' => 'required',
        ]);

        $etablissementScolaire->update($request->all());

        return redirect()->route('etablissement_scolaires.index')
            ->with('success', 'Établissement Scolaire mis à jour avec succès');
    }

    public function destroy(EtablissementScolaire $etablissementScolaire)
    {
        $etablissementScolaire->delete();

        return redirect()->route('etablissement_scolaires.index')
            ->with('success', 'Établissement Scolaire supprimé avec succès');
    }
}
