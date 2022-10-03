@extends('layouts.main')
@section("titulo", "Historia")
@section("content")
<div class="history-container">
    @foreach ($quiens as $quien )
    <x-history.quien.index :quien = "$quien"/>
    @endforeach

</div>

@endsection


