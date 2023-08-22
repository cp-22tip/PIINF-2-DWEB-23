<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>
<?php
$mois = date("m");
switch($mois){
    case 1:
        echo " janvier";
        break;
    case 2:
        echo "février";
        break;
    case 3:
        echo "mars";
        break;
    case 4:
        echo "avril";
        break;
    case 5:
        echo "mai";
        break;
    case 6:
        echo "juin";
        break;
    case 7:
        echo "juillet";
        break;
    case 8:
        echo "août";
        break;
    case 9:
        echo "septembre";
        break;
    case 10:
        echo "octobre";
        break;
    case 11:
        echo "novembre";
        break;
    case 12:
        echo " décembre";
        break;
}
?>
</body>
</html>