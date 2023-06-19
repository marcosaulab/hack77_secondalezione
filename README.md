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





# Components

I componenti sono dei blocchi di codice riutilizzabili che possono essere inclusi all'iterno di altre viste

1. devo obbligatoriamente creare dentro resources/views una cartella components (deve chiamarsi per forza components)
2. dentro alla cartella components creare il file che intendo riusare nelle mie viste
3. Vado a richiamare il componente all'interno della vista con la sintassi: <x-nome_componente />

con la x Laravel ci dice che andrà a cercare all'interno della cartella resources/views/components un file che ha come nome quello che abbiamo specificato dopo "x-"



## come passiamo parametri ad un componente?

1. Lo tratto com un attributo html: <x-nomecard movieTitle="{{ $movie['title'] }}" ... /> // per ora usiamo questo!

2. Lo tratto come una varibile php: <x-nomecard :movieTitle="$movie['title']" ... />



## Operatore ternario

espressione ? se vera faccio questo che sta a sinistra dei due punti : se falsa faccio questo che sta a destra dei due punti

E' la stessa cosa di un if else:

Questo codice
if(Str::lower($movie['genre']) == Str::lower($genre)) {
    array_push($movieByGenre, $movie);
}

si può riscrivere così

(Str::lower($movie['genre']) == Str::lower($genre)) ? array_push($movieByGenre, $movie) : ;

e significano esattamente la stessa cosa


## Layout

Il layout è la cornice per le nostre viste blade.

1. creare un file dentro resources/views/components che si chiama layout
2. inseriamo la "parte di sopra": header, title, ecc... e la "parte di sotto": footer, script, chisura /html ecc...
3. in mezzo inseriamo un "buco" ovvero uno slot: {{ $slot }} (deve chiamarsi obbligatoriamente $slot)
4. inglobiamo all'interno dei tag <x-layout></x-layout> il contenuto variabile delle nostre viste:

<x-layout>
.....
</x-layout>


# Building  degli asset

1. Prendiamo tutte le risorse css e le assembleremo in un unico file app.css
2. Prendiamo tutte le risorse js e le assembleremo in un unico file app.js
3. Poi prenderemo questi 2 file e li renderemo disponibili in /public

Qual è il componente di Laravel che si occupa di fare tutto questo? Vite

Composer -> dependency manager di PHP
Npm -> dependency manager di Javascript -> è una libreria node.js -> libreria di javascript

Vite è una libreria Javascript che permette a Laravel di gestire il building degli asset: ovvero di comporli tra loro, assemblarli e ottimizzarli per le prestazioni.

Node.Js bisogna installarlo a livello di macchina, computer

Per ogni nostro progetto Laravel (all'interno della cartella del nostro progetto):

1. npm install -> scarica e installa tutte le dipendenze Js nel nostro progetto (all'interno di una cartella node_modules)
2. npm i bootstrap -> installiamo la dipendenza bootstrap e andremo a usare il suo codice internamente non più tramite CDN
    Faccio riferimento ai file appena installati all'interno del mio progetto:
    - dentro app.css: importare i file CSS di bootstrap di cui il mio progetto ha bisogno
    -  dentro app.js: importare i file JS di bootstrap di cui il mio progetto ha bisogno
3. Ora dobbiamo rendere disponibili i nostri file asset (css, js) al nostro frontend. Come Facciamo?
    - 1. vado ad usare la direttava blade @vite

4. npm run dev: 
    - controlla se sono presenti i file di configurazione e dipendenze
    - avvia il processo di building degli assett assemblando e minificando i vari file
    - rimane in ascolto dei cambiamenti al frontend



## Clonare un progetto Laravel

1. git clone ...indirizzo repo
2. composer install / composer update
3. clonare il file .env.example e rinominarlo in .env
4. php artisan key:generate
5. npm install
6. npm run dev