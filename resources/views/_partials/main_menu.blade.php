<?php

$logos = [
    [
        'img' => 'resources/img/buy-comics-digital-comics.png',
        'name' => 'digital comics'
],
    [
        'img' => 'resources/img/buy-comics-merchandise.png',
        'name' => 'dc merchandise'
],
    [
        'img' => 'resources/img/buy-comics-subscriptions.png',
        'name' => 'subscription'
],
    [
        'img' => 'resources/img/buy-comics-shop-locator.png',
        'name' => 'comic shop locator'
],
    [
        'img' => 'resources/img/buy-dc-power-visa.svg',
        'name' => 'dc power visa'
],
]
 ?>

<section id="main-menu">
    <div class="container">
        <ul class="d-flex list-unstyled justify-content-between">
            @foreach ($logos as $logo)
            <li> <div class="prodotto d-flex align-items-center">
                    <img src={{ Vite::asset($logo['img']) }} alt={{$logo['name']}}>
                    <a href="#" class="text-decoration-none">
                     <h4 id="menu-title" class="text-uppercase">{{$logo['name']}}</h4>
                    </a>
                </div>
            </li> 
            @endforeach
</section>