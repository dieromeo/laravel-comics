
<header>
    <div class="header-top-bar d-flex  align-items-center">
        <div class="container d-flex justify-content-end">
            <p class="text-uppercase text-light m-0">dc power&TRADE; visa&reg;</p>
            <p class="text-uppercase text-light mb-0 additional-sites">additional dc sites<i class="fa-solid fa-caret-down"></i></p>
        </div>
    </div>
    <div class="container d-flex justify-content-between align-items-center">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo dc" class="dc-logo">
        <ul class="d-flex align-items-center gap-4 list-unstyled dc-menu mb-0">
            @foreach ($menu as $voce_menu)
            <li><a class="text-black text-decoration-none" href={{ $voce_menu['link'] }}>{{strtoupper( $voce_menu['name']) }}</a></li>
            @endforeach
        </ul>
    </div>
</header>