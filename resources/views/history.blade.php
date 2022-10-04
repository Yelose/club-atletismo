@extends('layouts.main')
@section("titulo", "Historia")
@section("content")
<h1>Historia del Club</h1>

<div class="history.container">

<h1>{{ $quiens->titulo}}</h1>
<hr>
<h2>{{ $quiens->image}}</h2>
</div>
<hr>
<h3>{{ $quiens->resumen}}</h3>

</div>
@endsection


