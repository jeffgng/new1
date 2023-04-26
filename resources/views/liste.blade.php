@extends('layouts.content')

@section('content')

<div>
    @include('partials._nav')
</div>

<div>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Pays</th>
            <th>Photo</th>
            <th>Pdf</th>
            <th>Word</th>
        </tr>
        @foreach($learning as $learning)
        <tr>
            <td>{{$learning->name}}</td>
            <td>{{$learning->prenom}}</td>
            <td>{{$learning->email}}</td>
            <td>{{$learning->pays}}</td>
            <td>{{$learning->photo}}</td>
            <td>{{$learning->pdf}}</td>
            <td>{{$learning->word}}</td>

        </tr>

        @endforeach
    </table>
    <a href="edit/{{$learning->id}}">edit</a>
    <a href="delete/{{$learning->id}}">supprimer</a>
</div>

<div>
    @include('partials._footer')
</div>
@stop
