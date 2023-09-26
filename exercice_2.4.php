<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>
<?php
$tab = array("nom" => "Pellicano","prenom" => "Timéo", "adresse"=>"Rue de la gare 139", "npa" => "2746", "ville" => "Crémines", "email" => "Timeo.Pellicano@gmail.com" );
echo "<table>";
foreach($tab as $key => $val){
   echo "<tr> ";
    echo"<td>".$key."</td>";
    echo"<td>".$val."</td>";
    echo "</tr>";
    echo "<br>";}
echo "</table>";
?>