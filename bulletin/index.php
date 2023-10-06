<?php session_start()?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title> HariShop </title>
    <style>
        #panier{
            position:absolute;
            top:20px;
            right:20px;
            border:3px solid gray;
        }
        form{
            display:inline;
        }
    </style>
</head>
<body>
<?php
//Timéo



require_once("articles.php");

if(($_POST)){

    if(!array_key_exists("panier", $_SESSION)){
        $_SESSION['panier'] = array();
    }

    foreach ($_POST AS $key => $article){
        if($key =="id"){
            if(!array_key_exists($article, $_SESSION['panier'])){
                $_SESSION['panier'][$article] = 0;
            }
            if(array_key_exists("plus", $_POST) && $key == "id") {
                $_SESSION['panier'][$article]++;

            }
            elseif(array_key_exists("moins", $_POST) && $key == "id" && $_SESSION['panier'][$article] > 0) {
                $_SESSION['panier'][$article]--;
            }
        }
    }
}






echo "<div id=\"panier\">";

echo "<h2>Votre panier contient : </h2>";


$total
}

echo "</div>";


echo "\n<table border=\"2\">";

foreach($articles AS $id => $article) {
    echo "\n\t<tr>";

    echo "\n\t\t<td rowspan=\"3\">\n\t\t\t<img src=\"./img/".$id.".jpg\" height=\"100px\">\n\t\t</td>";
    echo "\n\t\t<td>".$article['nom']."</td>";
    echo "\n\t</tr>";
    echo "\n\t<tr>";
    echo "\n\t\t<td>CHF ".$article['prix']."</td>";
    echo "\n\t</tr>";
    echo "\n\t<tr>";
    echo "\n\t\t<td>\n\t\t\t<form method=\"post\" action=\"".$_SERVER['PHP_SELF']."\">";
    echo "\n\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"".$id."\"/>";
    echo "\n\t\t\t\t<input type=\"submit\" name=\"plus\" value=\"+\"/>";
    echo "\n\t\t\t</form>";
    echo "\n\t\t\t<form method=\"post\" action=\"".$_SERVER['PHP_SELF']."\">";
    echo "\n\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"".$id."\"/>";
    echo "\n\t\t\t\t<input type=\"submit\" name=\"moins\" value=\"-\"/>";
    echo "\n\t\t\t</form>\n\t\t</td>";

    echo "\n\t</tr>";
}

echo "</table>";
?>


</body>
</html>
