@php

@endphp

<header>
    <div class="container d-flex justify-content-between align-items-center">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo dc" class="dc-logo">
        <ul class="d-flex align-items-center gap-4 list-unstyled dc-menu">
            @foreach ($menu as $voce_menu)
            <li><a class="text-black" href={{ $voce_menu['link'] }}>{{strtoupper( $voce_menu['name']) }}</a></li>
            @endforeach
        </ul>
    </div>
</header>