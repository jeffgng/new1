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
            <td><img src="{{ asset($learning->photo)}}" alt="" width="60" height="60"></td>
            <td>{{$learning->pdf}}</td>
            <td>{{$learning->word}}</td>
            <td>
                <a href="edit/{{$learning->id}}">edit</a>

                <a href="delete/{{$learning->id}}">supprimer</a>


            </td>

        </tr>

        @endforeach
    </table>


</div>

<div>
    @include('partials._footer')
</div>
@stop
