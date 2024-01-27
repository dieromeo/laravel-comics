@extends('layouts.main')

@section('titolo_pagina')
Homepage
@endsection

@section('main')
<section id="jumbotron">
<div class="jumbo">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
</div>
<div class="container position-relative">
    <div class="current">current series</div>
</div>
</section>

<section id="cards">
    <div class="container">
        <div class="row py-5">
            @foreach ($comics as $comic)
            <div class="col-2 gy-4">
                <div class="comic">
                    <div class="comic-image">
                        <a href="#"><img src={{$comic['thumb']}} alt=""></a>
                    </div>
                    <div class="comic-title">
                        <h4>{{$comic['title']}}</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="more text-center">
            <button class="more-button"> Load more </button>
        </div>
    </div>
</section>
@include('_partials.main_menu')
@endsection