@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Page de modfication du Toutou</h2>

        <table class="table table-hover">
            <thead>
                <tr class="table-primary">
                <th scope="col">nom</th>
                    <th scope="col">description</th>
                    <th scope="col">sexe</th>
                    <th scope="col">age</th>
                    <th scope="col">poids</th>
                    <th scope="col">taille</th>
                    <th scope="col">race</th>
                </tr>
            </thead>      
                <tr class="table-secondary">
                    <td>{{ $dog->nom }}</td>
                    <td>{{ $dog->description }}</td>
                    <td>{{ $dog->sexe }}</td>
                    <td>{{ $dog->age }}</td>
                    <td>{{ $dog->poids }}</td>
                    <td>{{ $dog->taille }}</td>
                    <td>{{ $dog->race->name }}</td>
                </tr>
        </table>

        <!-- Formulaire de modification d'un chien -->
        <form action="{{ route('updateDog',$dog->id) }}" method="POST">
            @csrf
            <fieldset>
                <div class="form-group">
                    <label for="dogName">Nom</label>
                    <input type="text" class="form-control" id="dogName" name="nom" value="{{ $dog->nom }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="{{ $dog->description }}"></textarea>
                </div>
                <div class="form-group">
                    <label for="sexe">Sexe</label>
                    <input type="text" class="form-control" id="sexe" name="sexe" value="{{ $dog->sexe }}">
                </div>
                <div class="form-group">
                    <label for="age">Age (mois)</label>
                    <input type="number" class="form-control" id="age" name="age" min="1" max="240" value="{{ $dog->age }}">
                </div>
                <div class="form-group">
                    <label for="poids">Poids (kg)</label>
                    <input type="number" class="form-control" id="poids" name="poids" min="1" max="100" value="{{ $dog->poids }}">
                </div>
                <div class="form-group">
                    <label for="taille">Taille</label>
                    <input type="text" class="form-control" id="taille" name="taille" value="{{ $dog->taille }}">
                </div>
                <div class="form-group">
                    <label for="race">Race</label>
                    <select name="race_id" class="form-control" id="race">
                        @foreach ($races as $race)
                            <option value="{{ $race->id }}">{{ $race->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </fieldset>
        </form>

    </div>
@endsection