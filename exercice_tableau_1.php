<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>
<?php
$jour= date("w");
$tab = array("lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche");
echo "nous somme ".$tab[$jour-1];

?>
</body>
</html>
