@php
$menu = [
['name' => 'Characters', 'link' => '/characters', 'status' => false],
['name' => 'Comics', 'link' => '/', 'status' => true],
['name' => 'Movies', 'link' => '/movies', 'status' => false],
['name' => 'Tv', 'link' => '/tv', 'status' => false],
['name' => 'Games', 'link' => '/games', 'status' => false],
['name' => 'Collectibles', 'link' => '/collectibles', 'status' => false],
['name' => 'Videos', 'link' => '/videos', 'status' => false],
['name' => 'Fans', 'link' => '/fans', 'status' => false],
['name' => 'News', 'link' => '/news', 'status' => false],
['name' => 'Shop', 'link' => '/shop', 'status' => false],
];
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