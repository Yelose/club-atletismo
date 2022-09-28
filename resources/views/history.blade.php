@extends('layouts.main')
@section("title", "Historia")
@section("content")
<h1>Historia del club</h1>

    @foreach ($somos as $somo )
    <x-history.somos.index :somo = "$somo"/>
    @endforeach
    <x-history.somos.index/>
@endsection
