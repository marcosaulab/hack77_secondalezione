<x-layout>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Pagina Dettaglio Film</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row  my-5">

            <div class="col-6">
                <img src="/img/{{ $movie['img'] }}" class="img-fluid w-50" alt="{{ $movie['title'] }}">
            </div>

            <div class="col-6">
                <h2>{{ $movie['title'] }}</h2>
                <p>{{ $movie['description'] }}</p>
                <p><b>{{ $movie['director'] }}</b></p>
                <p>
                    <span>
                       Anno: {{ $movie['released_at'] }} 
                    </span>
                    |
                    <span>
                       Genre: {{ $movie['genre'] }} 
                    </span>
                </p>
            </div>

        </div>
    </div>

</x-layout>