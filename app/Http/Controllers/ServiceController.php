<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services', compact('services'));
    }

    public function show($NumService)
    {
        $service = Service::with('personnels')->findOrFail($NumService);
        
    
        return view('personnels', compact('service'));
    }

    public function create()
{
    $services = Service::all(); 
    return view('service_create', compact('services'));
}


    public function store(Request $request)
    {
        $request->validate([
            'NumService' => 'required|unique:services',
            'NomS' => 'required|max:15',
            'NumBloc' => ['required', 'regex:/^Bloc\d{3}$/']
        ]);

        Service::create($request->all());
        return redirect()->route('services.index');
    }

    public function edit($NumService)
    {
        $service = Service::findOrFail($NumService);
        return view('service_edit', compact('service'));
    }

    public function update(Request $request, $NumService)
    {
        $request->validate([
            'NomS' => 'required|max:15',
            'NumBloc' => ['required', 'regex:/^Bloc\d{3}$/']
        ]);

        $service = Service::findOrFail($NumService);
        $service->update($request->all());

        return redirect()->route('services.index');
    }

    public function destroy($NumService)
    {
        Service::destroy($NumService);
        return redirect()->route('services.index')->with('success','Client supprimé avec succès.');
    }
}
