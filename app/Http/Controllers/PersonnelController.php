<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;
use App\Models\Service;

class PersonnelController extends Controller
{
    public function index()
    {
        $personnels = Personnel::with('service')->get();
        return view('personnels.index', compact('personnels'));
    }

    public function create()
    {
        $services = Service::all();
        return view('personnels.create', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nom' => 'required',
            'Salaire' => 'required|numeric|min:0',
            'DateEmbauche' => 'required|date',
            'Fonction' => 'required',
            'NumService' => 'required|exists:services,NumService',
        ]);

        Personnel::create($request->all());
        return redirect()->route('personnels.index')->with('success', 'Personnel ajouté avec succès');
    }

    public function edit($NumPersonnel)
    {
        $personnel = Personnel::findOrFail($NumPersonnel);
        $services = Service::all();
        return view('personnels.edit', compact('personnel', 'services'));
    }

    public function update(Request $request, $NumPersonnel)
    {
        $request->validate([
            'Nom' => 'required',
            'Salaire' => 'required|numeric|min:0',
            'DateEmbauche' => 'required|date',
            'Fonction' => 'required',
            'NumService' => 'required|exists:services,NumService',
        ]);

        $personnel = Personnel::findOrFail($NumPersonnel);
        $personnel->update($request->all());

        return redirect()->route('personnels.index')->with('success', 'Personnel modifié avec succès');
    }

    public function destroy($NumPersonnel)
    {
        Personnel::destroy($NumPersonnel);
        return redirect()->route('personnels.index')->with('success', 'Personnel supprimé');
    }
}

