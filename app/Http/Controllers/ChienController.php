<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chien;
use App\Race;
use Auth;

class ChienController extends Controller
{
        // Affichage de la liste des Chiens
        public function show()
        {
            $dogs = Chien::All();
            // dd($dogs->name);
    
            return view('dogs.show', compact('dogs'));
        }

        // Affichage de la page d'ajout d'un chien
        public function create()
        {
            $races = Race::All();
            return view('dogs.create', compact('races'));
        }

        // Affichage de la page de modifcation d'un chien
        public function edit($id)
        {
            $dog = Chien::find($id);
            $races = Race::All();
            return view('dogs.edit', compact('dog','races'));
        }

        // Supression d'un chien dans la db
        public function delete($id)
        {
            $dog = Chien::find($id);
            $dog->delete();
    
            return redirect('chiens')->with('status', 'Toutou supprimé');
    
        }

        // Ajout d'un chien dans la db
        public function store(Request $request)
        {
            // dd($request);
            $request->validate([
                'nom' => 'required|string|max:255',
                'description' => 'required|string',
                'sexe' => 'required|string',
                'age' => 'required|int',
                'poids' => 'required|int',
                'taille' => 'required|string',
                'race_id' => 'required|int',
            ]);
            
            $dog = new Chien;
            $dog->nom = $request->nom;
            $dog->description = $request->description;
            $dog->sexe = $request->sexe;
            $dog->age = $request->age;
            $dog->poids = $request->poids;
            $dog->taille = $request->taille;
            $dog->race_id = $request->race_id;
    
            $dog->save();
            // return redirect()->route('admin.index');
            return redirect('chiens')->with('status', 'un toutou de plus dans la base');
        }

        // Modification d'un chien de la db
        public function update(Request $request, $id)
        {
            $request->validate([
                'nom' => 'required|string|max:255',
                'description' => 'required|string',
                'sexe' => 'required|string',
                'age' => 'required|int',
                'poids' => 'required|int',
                'taille' => 'required|string',
                'race_id' => 'required|int',
            ]);

            $dog = Chien::find($id);
    
            $dog->nom = $request->nom;
            $dog->description = $request->description;
            $dog->sexe = $request->sexe;
            $dog->age = $request->age;
            $dog->poids = $request->poids;
            $dog->taille = $request->taille;
            $dog->race_id = $request->race_id;
    
            $dog->save();
    
            return redirect('chiens')->with('status', "'Le toutou n'est plus le même");
        }
}
