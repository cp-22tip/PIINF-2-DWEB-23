<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>
<?php
$seconde = date("s");
if($seconde%2){
    echo "$seconde est impaire";
}
else{
    echo "$seconde est paire";
}
?>
</body>
</html>