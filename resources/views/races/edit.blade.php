@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Page de modfication d'une race</h2>

        <table class="table table-hover">
            <thead>
                <tr class="table-primary">
                    <th scope="col">nom</th>
                    <th scope="col">classification</th>
                    <th scope="col">longevite</th>
                </tr>
            </thead>      
                <tr class="table-secondary">
                    <td>{{ $race->name }}</td>
                    <td>{{ $race->classification }}</td>
                    <td>{{ $race->longevite }}</td>
                </tr>
        </table>

        <!-- Formulaire de modification d'un chien -->
        <form action="{{ route('updateRace',$race->id) }}" method="POST">
            @csrf
            <fieldset>
                <div class="form-group">
                    <label for="raceName">Nom</label>
                    <input type="text" class="form-control" id="raceName" name="name" value="{{ $race->name }}">
                </div>
                <div class="form-group">
                    <label for="raceName">Classification</label>
                    <input type="text" class="form-control" id="raceName" name="classification" value="{{ $race->classification }}">
                </div>
                <div class="form-group">
                    <label for="poids">Longévité (années)</label>
                    <input type="number" class="form-control" id="poids" name="longevite" min="1" max="20" value="{{ $race->longevite }}">
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </fieldset>
        </form>

    </div>
@endsection