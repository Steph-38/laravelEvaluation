@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Page d'ajout d'un Toutou</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulaire d'ajout d'un toutou -->
        <form action="{{ route('storeDog') }}" method="POST">
            @csrf
            <fieldset>
                <div class="form-group">
                    <label for="dogName">Nom</label>
                    <input type="text" class="form-control" id="dogName" name="nom" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="sexe">Sexe</label>
                    <input type="text" class="form-control" id="sexe" name="sexe" placeholder="Sexe">
                </div>
                <div class="form-group">
                    <label for="age">Age (mois)</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="Age" min="1" max="240">
                </div>
                <div class="form-group">
                    <label for="poids">Poids (kg)</label>
                    <input type="number" class="form-control" id="poids" name="poids" placeholder="Poids" min="1" max="100">
                </div>
                <div class="form-group">
                    <label for="taille">Taille</label>
                    <input type="text" class="form-control" id="taille" name="taille" placeholder="Taille">
                </div>
                <div class="form-group">
                    <label for="race">Race</label>
                    <select name="race_id" class="form-control" id="race">
                        @foreach ($races as $race)
                            <option value="{{ $race->id }}">{{ $race->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </fieldset>
        </form>

    </div>
@endsection