<?php 
require_once __DIR__ . "/partial/movie.php";

$room1 = new Movie('La grande bellezza', 8.50 , 2013);
$room2 = new Movie ('La grande fuga', 5.00 , 1963);

//carico tipo Oscar con setOscar() se ha vinto, altirmenti non carico neinte
$room1->setOscar('Miglior film straniero');
//se carico anche Nomination, aggiunge al conteggi countOscar
//$room2->setOscar('Nomination Miglior montaggio');

//carco se ci sono eventuali note
$room2->note = 'Note: film in bianco e nero.';

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
  <h1>Film proiettati al Cinema</h1>

  <!-- per ogli filmi una scheda -->
  <h2><?php echo $room1->name  ?> <?php echo "(".$room1->year.")" ?></h2>
  <p>Prezzo biglietto: €<?php echo $room1->price ?>. <?php echo $room1->note ?></p>
  <p>Oscar: <?php echo $room1->oscar ?></p>

  <!-- per ogli filmi una scheda -->
  <h2><?php echo $room2->name  ?> <?php echo "(".$room2->year.")" ?></h2>
  <p>Prezzo biglietto: €<?php echo $room2->price ?> . <?php echo $room2->note ?></p>
  <p>Oscar: <?php echo $room2->oscar ?></p>

  <!-- Dati generali -->
  <h5>Film con Oscar: <?php echo Movie::getCountOscar() ?>.</h5>
  <h5>Prezzo medio: €<?php echo Movie::getMedPrice() ?>.</h5>

</body>
</html>