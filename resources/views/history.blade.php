@extends('layouts.main')
@section("titulo", "Historia")
@section("content")
<div>
<h1>Historia del club</h1>

    @foreach ($somos as $somo )
    
    <x-history.somos.index :somo = "$somo"/>

    @endforeach
    <x-history.somos.index/>
@endsection

</div>
