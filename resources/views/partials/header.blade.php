@php
$links = [
    [
        'text' => 'Characters',
        'routeName' => 'home'
    ],
    [
        'text' => 'Comics',
        'routeName' => 'comics.index'
    ],
    [
        'text' => 'Movies',
        'routeName' => 'home'
    ],
    [
        'text' => 'Tv',
        'routeName' => 'home'
    ],
    [
        'text' => 'Games',
        'routeName' => 'home'
    ],
    [
        'text' => 'Collectibles',
        'routeName' => 'home'
    ],
    [
        'text' => 'Videos',
        'routeName' => 'home'
    ],
    [
        'text' => 'Fans',
        'routeName' => 'home'
    ],
    [
        'text' => 'News',
        'routeName' => 'home'
    ],
    [
        'text' => 'Shop',
        'routeName' => 'home'
    ],
]; 
@endphp

<header class="main-header">
    <div class="container">
        <div class="logo">
            <img src="{{ asset('img/dc-logo.png') }}" alt="">
        </div>
        <nav class="nav">
            <ul class="nav__list">
                @foreach ($links as $link)
                    <li class="{{ Request::route()->getName() === $link['routeName'] ? 'active' : '' }} list__item">                        
                        <a href="{{ isset($link['routeName']) ? route($link['routeName']) : '/' }}">{{ $link['text'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>