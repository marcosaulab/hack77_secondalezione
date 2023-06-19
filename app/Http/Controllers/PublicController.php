<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public $movies =
    [
        [
            'id' => 1,
            'title' => 'Titanic',
            'description' => 'Alla fine il portellone non ne riusciva a sostenere 2',
            'director' => 'James Cameron',
            'released_at' => 1998,
            'genre' => 'Romatico',
            'img' => 'titanic.jpg',
        ],
        [
            'id' => 2,
            'title' => 'Annabelle',
            'description' => 'Bambola horror bellissima',
            'director' => 'John R. Leonetti',
            'released_at' => 2014,
            'genre' => 'Horror',
            'img' => 'annabelle.jpg',
        ],
        [
            'id' => 3,
            'title' => 'Aladdin',
            'description' => 'Vorremmo tutti il genio come amico',
            'director' => 'Guy Ritchie',
            'released_at' => 2019,
            'genre' => 'Avventura',
            'img' => 'aladdin.jpg',
        ],
        [
            'id' => 4,
            'title' => 'The Transporter',
            'description' => 'Vorremmo tutti Jason come amico',
            'director' => 'Corey Yuen',
            'released_at' => 2002,
            'genre' => 'Azione',
            'img' => 'transporter.jpg',
        ],
        [
            'id' => 5,
            'title' => 'John Wick',
            'description' => 'Il leggendario assassino John Wick si è allontanato',
            'director' => 'Chad Stahelski',
            'released_at' => 2014,
            'genre' => 'Azione',
            'img' => 'johnwick.jpg',
        ],
    ];

    public $staff = [
        [
            'name' => 'Benedetto',
            'role' => 'Director',
        ],
        [
            'name' => 'Antonio',
            'role' => 'Fotografia',
        ],
        [
            'name' => 'Mariasilvia',
            'role' => 'Produzione',
        ],
    ];

    public function homepage() {

        // ! va a cercare all'interno di resources/views e controlla se esiste un file con nome welcome
        return view('welcome', ['movies' => $this->movies]);
        // ! crea una variabile all'interno della vista welcome che ha lo stesso nome della chiave e 
        // ! al suo interno ci mette il contenuto della variabile $movies che è definita dentro a questa funzione

    }

    public function chisiamo() {
        return view('aboutus', ['staff' => $this->staff]);
    }

    public function moviedetails($id) {

        foreach ($this->movies as $movie) {
            if($movie['id'] == $id) {
                return view('moviedetails', ['movie' => $movie]); 
            }
        }

        abort(404);


    }

    public function movieByGenre($genre) {

        // ? vogliamo controllare e ritornare tutti i film che hanno come attributo genre quello che gli passiamo

        $movieByGenre = [];

        foreach ($this->movies as $movie) {
            if(Str::lower($movie['genre']) == Str::lower($genre)) {
                array_push($movieByGenre, $movie);
            }
        }

        return view('movie-genre', ['movies' => $movieByGenre, 'genre' => $genre]);
    }
    
}
