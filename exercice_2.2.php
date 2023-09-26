<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>
<?php
$tab=array();
for ($chiffre = 1; $chiffre<=12; $chiffre++){
    $tab[$chiffre] = ($chiffre*7);
echo "$chiffre * 7 =$tab[$chiffre]
    <br>";}


?>
</body>
</html>

