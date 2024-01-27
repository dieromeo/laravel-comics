<?php
$title = 'dc';
            $contents = [
                [ 'name' => 'Terms of Use', 'link' => '#' ],
                [ 'name' => 'Privacy Policy (New)', 'link' => '#' ],
                [ 'name' => 'Ad Choising', 'link' => '#' ],
                [ 'name' => 'Advertising', 'link' => '#' ],
                [ 'name' => 'Jobs', 'link' => '#' ],
                [ 'name' => 'Subscriptions', 'link' => '#' ],
                [ 'name' => 'Talent Workshops', 'link' => '#' ],
                [ 'name' => 'CPSC Certificates', 'link' => '#' ],
                [ 'name' => 'Ratings', 'link' => '#' ],
                [ 'name' => 'Shop Help', 'link' => '#' ],
                [ 'name' => 'Contact Us', 'link' => '#' ],

            ]

?>

<h2>{{ strtoupper($title) }}</h2>
<ul class="p-0">
    @foreach ($contents as $content)
    <li class="m-0">
        <a href={{$content['link']}}>{{$content['name']}}</a>
    </li>
    @endforeach
</ul>