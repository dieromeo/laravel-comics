@extends('layouts.main')

@section('titolo_pagina')
Homepage
@endsection

@section('main')
<div class="jumbo">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
</div>
@endsection