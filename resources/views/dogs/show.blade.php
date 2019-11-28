@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Page d'affichage des Toutous</h2>


        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

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
                    @auth
                        @if(Auth::user()->name == 'admin')
                        <th style="text-align:center" scope="col">Action</th>
                        @endif
                    @endauth
                </tr>
            </thead>      
            @foreach ($dogs as $dog)
                <tr class="table-secondary">
                    <td>{{ $dog->nom }}</td>
                    <td>{{ $dog->description }}</td>
                    <td>{{ $dog->sexe }}</td>
                    <td>{{ $dog->age }}</td>
                    <td>{{ $dog->poids }}</td>
                    <td>{{ $dog->taille }}</td>
                    <td>{{ $dog->race->name }}</td>
                    @auth
                        @if(Auth::user()->name == 'admin')
                        <td style="display:flex">
                            <form style="width:100px" action="">
                                <a class="btn btn-outline-success" href="{{ route('editDog', $dog->id) }}" role="button">Modifier</a>
                            </form>
                            <form style="width:100px" action="{{ route('deleteDog', $dog->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-outline-danger">Supprimer</button>
                            </form>
                        </td>
                        @endif
                    @endauth
                    <!-- <td style="max-width:150px!important;display:flex">

                    </td> -->
                </tr>
            @endforeach
        </table>
    </div>
@endsection