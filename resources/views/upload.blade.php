


@extends('layouts.content')

@section('content')

<div>
    @include('partials._nav')
</div>

<div>
    <h1>upload</h1>
    <form action="upload" method="POST" enctype='multipart/form-data'>
        @csrf
        <input type="file" name="file">
        <button type="submit">upload</button>
    </form>
</div>

<!--a href="http://localhost:8000/generate-pdf"><button>Download</button></!--a-->
<div>
    @include('partials._footer')
</div>
@stop
