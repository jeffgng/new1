@extends('layouts.content')

@section('content')

<form action="{{ url('update/'.$learning->id)}}" method="POST">
    @csrf

    <input type="text" name="name" value="{{ $learning->name}}">
    <input type="text" name="prenom" value="{{ $learning->prenom}}">
    <input type="email" name="email" value="{{ $learning->email}}">
    <input type="text" name="pays" value="{{ $learning->pays}}">
    <input type="file" name="photo" value="{{ $learning->photo}}" accept=".png, .jpg, .jpeg">>
    <input type="file" name="pdf" value="{{ $learning->pdf}}" accept=".pdf">
    <input type="file" name="word" value="{{ $learning->word}}" accept=".docx, .doc, .xml">
    <button type="submit" value="update">Modifier</button>

</form>

<div>
@include('partials._footer')
</div>
@stop
