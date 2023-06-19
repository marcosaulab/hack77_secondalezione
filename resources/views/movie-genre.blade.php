<x-layout>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Film per genere: <span class="text-success">{{ $genre }}</span></h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row  my-5">
            @foreach ($movies as $movie)
                <div class="col-12 col-md-3">
                    <x-moviecard 

                        movieImg="{{ $movie['img'] }}"
                        movieTitle="{{ $movie['title'] }}"
                        movieDirector="{{ $movie['director'] }}"
                        movieGenre="{{ $movie['genre'] }}"
                        movieId="{{ $movie['id'] }}"
                        movieReleasedat="{{ $movie['released_at'] }}"
                        pageIs="altro"
                      
                    />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
