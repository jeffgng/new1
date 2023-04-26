@extends('layouts.content')

@section('content')

<div>
    @include('partials._nav')
</div>
<form action="{{ url('update/'.$learning->id)}}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $learning->name}}">
    <label for="prenom">Prenom</label>
    <input type="text" name="prenom" value="{{ $learning->prenom}}">
    <label for="email">Email</label>
    <input type="email" name="email" value="{{ $learning->email}}">
    <label for="pays">Pays</label>
    <input type="text" name="pays" value="{{ $learning->pays}}">
    <label for="photo">Image</label>
    <input type="file" name="photo" value="{{ $learning->photo}}" accept=".png, .jpg, .jpeg"><br>
    <label for="pdf">Document PDF</label>
    <input type="file" name="pdf" value="{{ $learning->pdf}}" accept=".pdf"><br>
    <label for="word">Document WORD</label>
    <input type="file" name="word" value="{{ $learning->word}}" accept=".docx, .doc, .xml"><br>
    <button type="submit" value="update">Modifier</button>

</form>

<div>
@include('partials._footer')
</div>
@stop
