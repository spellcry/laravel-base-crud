<div class="list-wrapper">
    <h4 class="title">{{ $links['title'] }}</h4>
    <ul class="nav__list">
        @foreach ($links['links'] as $link)
            <li class="list__item"><a href="#">{{ $link }}</a></li>
        @endforeach
    </ul>
</div>