@extends('layouts.content')

@section('content')

<div>
    @include('partials._nav')
</div>

<div>


    <form action="{{ route('pdf')}}" method="POST" enctype='multipart/form-data'>
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom">
        <label for="email">Email</label>
        <input type="text" name="email">
        <label for="pays">Pays</label>
        <input type="text" name="pays">
        <label for="pdf">PDF</label>
       <input type="file" name="pdf" accept=".pdf">
        <button type="submit">upload</button>
    </form>
</div>

<!--a href="http://localhost:8000/generate-pdf"><button>Download</button></!--a-->
<div>
    @include('partials._footer')
</div>
@stop
