<div class="card {{ $pageIs == 'welcome' ? 'text-center' : '' }} cardBorder cardText" style="width: 18rem;">
    <img src="/img/{{ $movieImg }}" class="card-img-top" alt="{{ $movieTitle }}">
    <div class="card-body">
        <h5 class="card-title">{{ $movieTitle }}</h5>
        <p class="card-text"> Regia: {{ $movieDirector }} </p>
        <p>Genre:
            <a href="{{ route('movie.genre', ['genre' => $movieGenre ]) }}">
                {{ $movieGenre }}
            </a>
        </p>
        <a href="{{ route('movie.show', ['id' => $movieId ]) }}" class="btn btn-primary">Dettaglio</a>
    </div>
    <div class="card-footer">
        <p>Anno: {{ $movieReleasedat }}</p>
    </div>
</div>