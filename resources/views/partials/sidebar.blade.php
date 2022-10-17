<?php
$sidebarWidgets = [
    [
        'imageSrc' => 'img/buy-comics-digital-comics.png',
        'text' => 'Digital Comics',
        'href' => '#'
    ],
    [
        'imageSrc' => 'img/buy-comics-merchandise.png',
        'text' => 'Dc Merchandise',
        'href' => '#'
    ],
    [
        'imageSrc' => 'img/buy-comics-subscriptions.png',
        'text' => 'Subscription',
        'href' => '#'
    ],
    [
        'imageSrc' => 'img/buy-comics-shop-locator.png',
        'text' => 'Comic Shop Locator',
        'href' => '#'
    ],
    [
        'imageSrc' => 'img/buy-dc-power-visa.svg',
        'text' => 'Dc Power Visa',
        'href' => '#'
    ]
];
?>

<aside class="main-sidebar">
    <div class="container">
        <ul class="aside__list">
            @foreach ($sidebarWidgets as $widget)
                <li class="list__item">
                    @include('partials.sidebar_widget', $widget)
                </li>
            @endforeach               
        </ul>
    </div>
</aside>