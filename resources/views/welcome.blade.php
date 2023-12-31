<x-layout>

    <x-slot name="titlePage">
            Home Page
    </x-slot>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Welcome Page</h1>
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
                        pageIs="welcome"

                    />
                </div>
            @endforeach
        </div>
    </div>

</x-layout>


