@extends('layouts.main')
@section("titulo", "Historia")
@section("content")
<div>
<h1>Historia del club</h1>

    @foreach ($quiens as $quien )
    <x-history.quien.index :quien = "$quien"/>
    @endforeach
    <x-history.somos.index/>
</div>
@endsection


