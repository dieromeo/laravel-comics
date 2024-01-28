@extends('layouts.main')

@section('titolo_pagina')
Homepage
@endsection

@section('main')
@include('_partials.jumbotron')

<section id="cards">
    <div class="container">
        <div class="row py-5">
            @foreach ($comics as $comic)
            <div class="col-2 gy-4">
                <div class="comic">
                    <div class="comic-image overflow-hidden">
                        <a href="#"><img class="d-block w-100" src={{$comic['thumb']}} alt=""></a>
                    </div>
                    <div class="comic-title">
                        <h4>{{strtoupper($comic['title'])}}</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="more text-center">
            <button class="more-button btn rounded-0 btn-primary text-uppercase fw-bold"> Load more </button>
        </div>
    </div>
</section>
@include('_partials.main_menu')
@endsection