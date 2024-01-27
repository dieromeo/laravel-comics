<?php
$title = 'dc comics';
$contents= [
    [ 'name' => 'Characters', 'link' => '#' ],
    [ 'name' => 'Comics', 'link' => '#' ],
    [ 'name' => 'Movies', 'link' => '#' ],
    [ 'name' => 'Tv', 'link' => '#' ],
    [ 'name' => 'Games', 'link' => '#' ],
    [ 'name' => 'Videos', 'link' => '#' ],
    [ 'name' => 'News', 'link' => '#' ],
]
?>

<h2>{{ strtoupper($title) }}</h2>
<ul class="ps-0">
    @foreach ($contents as $content)
    <li class="m-0">
        <a href="{{$content['link']}}">{{ $content['name'] }}</a>
    </li>
    @endforeach
</ul>