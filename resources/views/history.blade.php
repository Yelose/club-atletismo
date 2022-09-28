@extends('layouts.main')
@section("title", "Historia")
@section("content")
<h1>Historia del Club</h1>

@foreach ($somoss as $ somos )
<p>
    {{somos->}}
</p>
    
@endforeach
@endsection
