<?php
 $title = 'sites';
            $contents = [
                [ 'name' => 'DC', 'link' => '#' ],
                [ 'name' => 'MAD Magazines', 'link' => '#' ],
                [ 'name' => 'DC Kids', 'link' => '#' ],
                [ 'name' => 'DC Universe', 'link' => '#' ],
                [ 'name' => 'DC Power Visa', 'link' => '#' ],
            ]

?>

<h2>{{strtoupper($title)}}</h2>
<u class="p-0 list-unstyled">
    @foreach ($contents as $content)
    <li class="m-0">
        <a href={{$content['link']}} class="text-decoration-none">{{$content['name']}}</a>
    </li>
    @endforeach
</ul>