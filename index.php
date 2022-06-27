<?php
    require_once __DIR__ . '/classes/movie.php';
    
    $movies = [
        new Movie('Joker','Todd Phillips','Azione', 10, '2019', 121),
        new Movie('Interstellar','Christopher Nolan','Fantascenza', 12,'2014', 169),
        new Movie('Slender Man', 'Sylvain White', 'Horror',7, '2018', 93),
        new Movie('Una notte da leoni', 'Todd Phillips','Commedia', 9, '2009', 99)
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>My Movies</h1>
    <ul>
        <?php foreach($movies as $movie){ ?>
            <li>
                <h2><?php echo $movie->title ?></h2>
                <h3>Genere: <?php echo $movie->genre ?></h3>
                <h4>Produttore: <?php echo $movie->producer ?></h4>
                <h5>Anno: <?php echo $movie->relase_year ?></h5>
                <small>Prezzo: <?php echo $movie->price ?> €</small>
                <?php 
                    $discount = $movie->movieDiscount();
                    if($discount){
                        ?><br><small>Prezzo scontato: <?php echo $discount ?> €</small>
                    <?php } ?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>