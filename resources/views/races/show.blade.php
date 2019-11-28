@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Page d'affichage des Races</h2>


        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <table class="table table-hover">
            <thead>
                <tr class="table-primary">
                    <th scope="col">nom</th>
                    <th scope="col">classification</th>
                    <th scope="col">longevite</th>
                    @auth
                        @if(Auth::user()->name == 'admin')
                        <th style="text-align:center" scope="col">Action</th>
                        @endif
                    @endauth
                </tr>
            </thead>      
            @foreach ($races as $race)
                <tr class="table-secondary">
                    <td>{{ $race->name }}</td>
                    <td>{{ $race->classification }}</td>
                    <td>{{ $race->longevite }}</td>
                    @auth
                        @if(Auth::user()->name == 'admin')
                        <td style="display:flex">
                            <form style="width:100px" action="">
                                <a class="btn btn-outline-success" href="{{ route('editRace', $race->id) }}" role="button">Modifier</a>
                            </form>
                            <form style="width:100px" action="{{ route('deleteRace', $race->id) }}" method="POST">
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