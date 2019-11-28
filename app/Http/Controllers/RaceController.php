<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chien;
use App\Race;
use Auth;


class RaceController extends Controller
{

    // Affichage de la liste des Races
    public function show()
    {
        $races = Race::All();
        // dd($dogs->name);

        return view('races.show', compact('races'));
    }

    // Affichage de la page d'ajout d'une race
    public function create()
    {
        $races = Race::All();
        return view('races.create', compact('races'));
    }

    // Ajout d'une race dans la db
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'classification' => 'required|string',
            'longevite' => 'required|int',
        ]);
        
        $race = new Race;
        $race->name = $request->name;
        $race->classification = $request->classification;
        $race->longevite = $request->longevite;

        $race->save();
        // return redirect()->route('admin.index');
        return redirect('races')->with('status', 'une race de plus dans la base');
    }

    // Supression d'une race dans la db
    public function delete($id)
    {
        $race = Race::find($id);
        $race->delete();

        return redirect('races')->with('status', 'Race supprimé :(');
    }

    // Affichage de la page de modifcation d'une race
    public function edit($id)
    {
        $race = Race::find($id);
        return view('races.edit', compact('race'));
    }


    // Modification d'une race de la db
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'classification' => 'required|string',
            'longevite' => 'required|int',
        ]);

        $race = Race::find($id);

        $race->name = $request->name;
        $race->classification = $request->classification;
        $race->longevite = $request->longevite;

        $race->save();

        return redirect('races')->with('status', "Race modifié ...");
    }

}
