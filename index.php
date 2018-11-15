<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP</title>
</head>
<body>
<?php
$name = "mickael";
$firstName = "rut";
$age = 32;
settype($name, "string");
settype($firstName, "string");
settype($age, "integer");
 echo "Bonjour" . " " . $name .  " " . $firstname .",". " " . "tu as" . " " . $age . " " ."ans";
 ?>
</body>
</html>
