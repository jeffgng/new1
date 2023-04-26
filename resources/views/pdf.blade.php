@extends('layouts.content')

@section('content')

<div>
    @include('partials._nav')
</div>

<div>

    <h1>Document PDF</h1>
    <form action="{{ route('pdf')}}" method="POST" enctype='multipart/form-data'>
        @csrf
        <input type="text" name="name">
        <input type="text" name="prenom">
        <input type="text" name="email">
        <input type="text" name="pays">
       <input type="file" name="pdf" accept=".pdf">
        <button type="submit">upload</button>
    </form>
</div>

<!--a href="http://localhost:8000/generate-pdf"><button>Download</button></!--a-->
<div>
    @include('partials._footer')
</div>
@stop
