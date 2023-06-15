## Creiamo una welcome page in cui abbiamo le card film
## Creiamo una pagina about-us in cui abbiamo le card dello staff


## Welcome Page, About Us

1. Creiamo la rotta
2. modifichiamo la vista welcome page inserendo lo starter template di bootstrap
3. creare un array di dati all'iterno della funzione della rotta
4. passare l'array di dati alla vista
5. ciclare l'array dentro la vista
6. avere una card per ogni elemento dell'array



# Rotte Nominali

Si tratta di assegnare un nome ad una rotta nel file routes/web.php in modo che essa sia riconoscibile e richiamabile all'interno della nostra applicazione

Ad esempio: 

<a class="nav-link" href="{{ route('aboutus') }}">Chi siamo</a>

Con la funzione route all'interno dei file blade richiamo la rotta che ha come attributo ->name esattamente 
il nome che specifico come parametro dentro alla funzione route. In questo caso aboutus

Nel file routes/web.php la rotta che ha come nome aboutus corrisponde alla rotta di tipo get con uri /chisiamo


# Rotte Parametriche

- Passiamo un parametro alla rotta. Useremo quel parametro come dato per individuare il movie che dobbiamo passare alla vista

- Il nome che uso per il parametro deve essere lo stesso che viene usato all'interno della rotta

Se richiamo dalla vista una rotta con parametro che si chiama id
{{ route('movie.show', ['id' => $movie['id']]) }}

nella rotta dovrò usare lo stesso nome:
Route::get('/movie/{id}', function ($id) { ... }



# Controller

è una classe che si occupa di implementare le funzioni che in questo momento stiamo sviluppando all'interno delle route

Per creare un nuovo controller: 

php artisan make:controller PublicController

ROTTA -> CONTROLLER -> VISTA