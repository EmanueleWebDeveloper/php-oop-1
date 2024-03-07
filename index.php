<?php
// Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
// - è definita una classe ‘Movie’
//   => all'interno della classe sono dichiarate delle variabili d'istanza
//   => all'interno della classe è definito un costruttore
//   => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
class Movie {
    public $titolo;
    public $autore;
    public $genere;

    public function __construct($titolo, $autore, $genere) {
        $this->titolo = $titolo;
        $this->autore = $autore;
        $this->genere = $genere;
    }

    // Metodo per stampare le informazioni del film
    public function stampaInformazioni() {
        echo "Titolo: " . $this->titolo . "<br>";
        echo "Autore: " . $this->autore . "<br>";
        echo "Genere: " . $this->genere . "<br>";
    }
}


$pinocchio = new Movie("Pinocchio 2", "Carlo Collodi", "Azione");
$cenerentola = new Movie("cenerentola 2", "mario rizzo", "fantasy");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $pinocchio->stampaInformazioni();
     $cenerentola->stampaInformazioni();
    ?>
</body>
</html>