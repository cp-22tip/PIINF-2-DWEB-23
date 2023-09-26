<?php
session_start()
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>

<?php
//invocations du tableau aeroport
require_once("aeroport.php");
require_once("category.php");
$vol = 0;
$_SESSION['vols'][0] = $_POST;
echo "<h3>Informations concernant votre vol </h3>";
echo "Depart : ".$airport[$_SESSION['vols'][$vol]['decolage']]."(".$_SESSION['vols'][0]['decolage'].")"."<br>";
echo " Arrivé : ".$airport[$_SESSION['vols'][$vol]['arrivé']]."(".$_SESSION['vols'][0]['arrivé'].")"."<br>";
echo " Date de départ : ".$_SESSION['vols'][$vol]['date_depart']."<br>";
echo "Passagers : ".($_SESSION['vols'][$vol]['cat_1'] + $_SESSION['vols'][0]['cat_2'] + $_SESSION['vols'][0]['cat_3'])." (".$_SESSION['vols'][0]['cat_1'].
    " Adulte(s), ".$_SESSION['vols'][$vol]['cat_2']." Enfant(s), ".$_SESSION['vols'][0]['cat_3']." Bébé(s))"."<br>";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
//session_destroy();
if(count($_SESSION['vols'] )>= 2){
    session_destroy();
}
?>
<a href="Swiss.php">Réserver un vol retour</a>
<br>
<a href="Swiss.php">Autre vol</a>
</body>
</html>

