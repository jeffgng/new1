@extends('layouts.content')

@section('content')

<div>
    @include('partials._nav')
</div>


<form action="{{ route('gallerie')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name">
    <label for="prenom">Prenom</label>
    <input type="text" name="prenom">
    <label for="email">Email</label>
    <input type="text" name="email">
    <label for="pays">Pays</label>
    <input type="text" name="pays">
    <label for="photo">Photo</label>
    <input type="file" name="photo"accept=".png, .jpg, .jpeg">

    <button type="submit">sauvegarder</button>
</form>

<div>
    @include('partials._footer')
</div>
@stop
