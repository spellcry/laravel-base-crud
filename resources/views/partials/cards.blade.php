<div class="cards">
    <div class="current-series">
        Current Series
    </div>
    <ul class="cards__list">
        @foreach ($comics as $comic)
            <li class="list__item">
                <a href="{{ route('comics.show', $comic)}}">
                    @include('partials.card', ['comic' => $comic])
                </a>
            </li>
        @endforeach
    </ul>
</div>