<?php
class Movie {
    public $name;
    public $genre;
    public $language;
    public $rating;

    public function __construct($name_passato, $genre_passato, $language_passato)
    {
        $this->name = $name_passato;
        $this->genre = $genre_passato;
        $this->language = $language_passato;
        $this->setRating();
    }
    public function setRating() {
        if($this->genre === 'fantasy' ) {
            $this->rating = 'Eccezionale';
        } else if ($this->genre === 'war') {
            $this->rating = 'Good';
        } else {
            $this->rating = 'Meh';
        }
    }
}

$newMov1 = new Movie('pippo', 'Cartoon', 'english');
var_dump($newMov1);

$newMov2 = new Movie('The lord of the rings', 'fantasy', 'english');
var_dump($newMov2);

$newMov3 = new Movie('Troy', 'war', 'english');
var_dump($newMov3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php $newMov1->name ?> </h1>
    
</body>
</html>