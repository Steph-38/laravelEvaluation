@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Page d'ajout d'une Race</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulaire d'ajout d'une race -->
        <form action="{{ route('storeRace') }}" method="POST">
            @csrf
            <fieldset>
                <div class="form-group">
                    <label for="raceName">Nom</label>
                    <input type="text" class="form-control" id="raceName" name="name" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="classification">Sexe</label>
                    <input type="text" class="form-control" id="classification" name="classification" placeholder="classification">
                </div>
                <div class="form-group">
                    <label for="longevite">Longévité (années)</label>
                    <input type="number" class="form-control" id="longevite" name="longevite" placeholder="durée de vie" min="1" max="20">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </fieldset>
        </form>

    </div>
@endsection