@extends('layouts.content')

@section('content')

<div>
    @include('partials._nav')
</div>

<h1>Ma gallerie</h1>
<form action="{{ route('gallerie')}}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name">
    <input type="text" name="prenom">
    <input type="text" name="email">
    <input type="text" name="pays">
    <input type="file" name="photo"accept=".png, .jpg, .jpeg">
    <input type="file" name="pdf" accept=".pdf">
    <input type="file" name="word" accept=".docx, .doc, .xml">
    <button type="submit">sauvegarder</button>
</form>

<div>
    @include('partials._footer')
</div>
@stop
