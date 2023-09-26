
<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pellicano</title>
</head>
<body>
<?php
require_once("data.inc.php");
print_r($_POST);

echo "<h1>Mes options</h1>";
$nbOptions = 0;
foreach ($_POST AS $key => $nom){

    echo $nom."<br>";

$nbOptions++;
}
if($nbOptions-1 >0){
    echo "Nombre d'options sélectionnées : ".($nbOptions -1);
}

else{
     echo "Aucune option sélectionnée";
}

?>

</body>
</html>