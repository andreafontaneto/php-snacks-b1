<?php 
/*
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/

$paragrafo = 'C’era una volta una bambina di nome Gracy, figlia di una strega. Aveva gli occhi blu notte. I capelli viola con labbra rosso sangue. Non era cattiva';

// $nuovo_paragrafo = explode(".", $paragrafo);
// var_dump($nuovo_paragrafo);

$nuovo_paragrafo = strtok($paragrafo, ".");

while ($nuovo_paragrafo !== false){
  echo "$nuovo_paragrafo<br>";
  $nuovo_paragrafo = strtok(".");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Snack 5</title>
</head>
<body>

  <!-- non funziona la stampa in pagina -->
  <p><?php echo $nuovo_paragrafo ?></p>
  
</body>
</html>