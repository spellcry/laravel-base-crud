@php
    $listLinks = [
        [
            'title' => 'DC comics',
            'links' => [
                'Characters',
                'Comics',
                'Movies',
                'Tv',
                'Games',
                'Videos',
                'News'
            ]
        ],
        [
            'title' => 'Shop',
            'links' => [
                'Shop DC',
                'Shop DC Collectibles'
            ]
        ],
        [
            'title' => 'Dc',
            'links' => [
                'Term of Use',
                'Privacy policy (New)',
                'Ad Choices',
                'Advertising',
                'Jobs',
                'Subscriptions',
                'Talent Workshops',
                'CPSC Certificates',
                'Ratings',
                'Shop Help',
                'Contact Us'
            ]
        ],
        [
            'title' => 'Sites',
            'links' => [
                'DC',
                'MAD Magazine',
                'DC Kids',
                'DC Universe',
                'DC Power Visa'
            ]
        ],
    ];
@endphp

<div class="footer__nav">
    <div class="container">
        @foreach ($listLinks as $links)
            @include('partials.footer_nav_list', ['links' => $links])
        @endforeach
    </div>
</div>