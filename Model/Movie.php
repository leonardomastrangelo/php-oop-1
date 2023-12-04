<?php
//* definisco la classe movie
class Movie
{
    # definisco gli attributi della classe Movie
    public int $id;
    public string $poster_path;
    public string $title;
    public string $overview;
    public string $original_language;
    public string $release_date;
    public float $vote_average;

    # passo come argomenti alla funzione construct i parametri che riceverà quando creeremo ISTANZE
    public function __construct($id, $poster_path, $title, $overview, $original_language, $release_date, $vote_average)
    {
        $this->id = $id;
        $this->poster_path = $poster_path;
        $this->title = $title;
        $this->overview = $overview;
        $this->original_language = $original_language;
        $this->release_date = $release_date;
        $this->vote_average = $vote_average;
    }
}
# catturo in una stringa il contenuto di movie_db.json
$movieString = file_get_contents(__DIR__ . "/movie_db.json");
# decodifico il file json in formato php
$movieList = json_decode($movieString, true);
# creo un array vuoto dove inserire i miei movies
$movies = [];
# ciclo la MovieList per generare ISTANZE di film da pushare in $movies
foreach ($movieList as $key => $movie) {
    $movies[] = new Movie($movie["id"], $movie["poster_path"], $movie["title"], $movie["overview"], $movie["original_language"], $movie["release_date"], $movie["vote_average"]);
}
# controllo che le ISTANZE siano state create correttamente
var_dump($movies[0]);
var_dump($movies[1])

    ?>