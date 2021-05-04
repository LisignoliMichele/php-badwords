<?php
// variabile
$badword = $_GET["badword"];
$frase = 'Il corso boolean é una figata pazzesaca';
$cleanVersion = str_replace($badword , "f***ata", $frase);
$fraselength = strlen($cleanVersion);
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
      <?php if($badword === "figata") { ?>
      <p> <?php echo $cleanVersion ?> </p> 
      <p> <?php echo 'Questa frase é lunga ' . $fraselength ." caratteri"?></p>
      <?php } else { ?>
      <p>Copy and ADD this in the URL "?badword=figata"</p>
      <?php }; ?>
   </body>
</html>