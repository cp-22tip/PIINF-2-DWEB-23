<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <style>
        img.center{
            display: block;
            margin-left: 100px;
            width: auto;
        }
        input.center{
            border: lightgray 2px solid;
            margin-left: 200px;
            display:block;
        }


    </style>
</head>
<body>
<?php
echo "<img src='logo-swiss-2x.png' alt='logo swiss air' class='center'>";
if(array_key_exists('vols', $_SESSION)){
    echo "<h2>Réservez votre vol retour</h2>";
} else {
    echo "<h2>Réservez votre vol aller</h2>";
}



//invocations du tableau aeroports
require_once("aeroport.php");
require_once("category.php");


echo "<form action='result.php' method ='post'>";

//création d'une constante par défaut (Genève)
define("pardefaut", $airport["GVA"]);

// importation du tableau en haut dans le champ select
echo "De <select class='gr' name='decolage'>";
foreach($airport AS $key => $dest){
    echo "<option value=\"".$key."\">".$dest."</option>";
}

//faire une autoselection de notre constante Genève
echo "<option selected>".pardefaut."</option>";
echo "</select>";

echo " À <select class='gr' name='arrivé'>";
foreach($airport AS $key => $arr){
    echo "<option value=\"".$key."\">".$arr."</option>";
}
echo "</select>"."<br>";


$date = date("d.m.Y");
echo "Date "."<input type='date' name='date_depart' value=$date>";
echo "<br>"."<br>";


echo $category['Adultes']."<input type='number' name='cat_1' value='1' min='1' max='4'>"."<br>";
echo $category['Enfants']."<input type='number' name='cat_2' value='0' min='0' max='4'>"."<br>";
echo $category['Bébés']."<input class='bebe' type='number' name='cat_3' value='0' min='0' max='4'>"."<br><br>";


echo "<input type='checkbox' name='reserver_siège' value='1'>"."Réserver votre siège ?"."<br>"."<br>";


echo "<input type='submit' name='Recherche' value='Rechercher votre vol' class='center'>";

echo "</form>";
?>
</body>
</html>