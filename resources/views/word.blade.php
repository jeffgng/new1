@extends('layouts.content')

@section('content')

<div>
    @include('partials._nav')
</div>

<div>

    <h1>Document WORD</h1>
    <form action="{{ route('word')}}" method="POST" enctype='multipart/form-data'>
        @csrf
        <input type="text" name="name">
        <input type="text" name="prenom">
        <input type="text" name="email">
        <input type="text" name="pays">
        <input type="file" name="word" accept=".docx, .doc, .xml">
        <button type="submit">save</button>
    </form>
</div>

<!--a href="http://localhost:8000/generate-pdf"><button>Download</button></!--a-->
<div>
    @include('partials._footer')
</div>
@stop
