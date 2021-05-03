<?php
// variabili
$frase = "Il corso boolean é una figata pazzesaca";
$cleanVersion = str_replace("figata", "f***ata", $frase);
?>

<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>BadWords</title>
   </head>
   <body>
   <p><?php echo $cleanVersion ?></p> 
   </body>
</html>