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

$newMov2 = new Movie('The lord of the rings', 'fantasy', 'english');

$newMov3 = new Movie('Troy', 'war', 'english');



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
    <div>
        <h3> <?php echo $newMov1->name ?> </h3>
        <span> <?php echo $newMov1->genre ?> </span>
        <span> <?php echo $newMov1->language ?> </span>
        <span> <?php echo $newMov1->rating ?> </span>
    </div>
    <div>
        <h3> <?php echo $newMov2->name ?> </h3>
        <span> <?php echo $newMov2->genre ?> </span>
        <span> <?php echo $newMov2->language ?> </span>
        <span> <?php echo $newMov2->rating ?> </span>
    </div>
    <div>
        <h3> <?php echo $newMov3->name ?> </h3>
        <span> <?php echo $newMov3->genre ?> </span>
        <span> <?php echo $newMov3->language ?> </span>
        <span> <?php echo $newMov3->rating ?> </span>
    </div>

    
</body>
</html>