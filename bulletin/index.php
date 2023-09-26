<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Moyenne CFC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <style>
        table{
            border: solid black 1px;
        }
.cle, .tr{
    border: solid black 1px;
        }
h1{
    text-align: center;

}
        body{
            background-color: aliceblue;
        }
        .insuf{
            background-color: red;
            border: solid black 1px;
        }
        .bon2{
            background-color: forestgreen;
            border: solid black 1px;
        }
        .bonBack{
            background-color: lightgreen;
            border:  solid black 1px;
        }
        .echecBack{
            background-color: red;
            border:  solid black 1px;
        }
        .moyen{
            background-color: rgb(255, 131, 0);
        border: solid black 1px;
        }
.nul{
    border: solid black 1px;
}
    </style>
</head>
<body>
<?php
echo "<h1>Moyenne de mon apprentisage</h1>";

include("./notes.inc.php");
echo "<pre>";
//print_r($tab_notes);

echo "<table>";
echo "<td>Echelle de mesure</td>";
echo "<td class='insuf'>Insuffisant</td>";
echo "<td class='moyen'>Suffisant</td>";
echo "<td class='bonBack'>Bon</td>";
echo "<td class ='bon2'>Très bon</td>";
echo "</table>";
echo "<i>Copyright cp-22alw</i>";
echo "<br>";
echo "<table>";

foreach ($tab_notes AS $nomDomaine =>$domaine){
    $so_note = 0;
    $nbNote= 0;
    echo "<tr>";
    echo "<th colspan='4' class ='CI'>".$domaine['desc']."</th>";
    echo "</tr>";
    foreach ($domaine['modules'] AS $key => $module){
       echo "<tr class = 'tr'>";
        echo "<td class = 'cle'>".$key."</td>";
        echo "<td class = 'cle'>".$module['desc']."</td>";
        echo "<td class = 'cle'>".$module['date']."</td>";

        if($module['note'] == Null ){
            echo "<td class='nul'>X</td>";

        }elseif ($module['note'] >= 4.75){

            echo "<td class = 'bon2'>".$module['note']."</td>";
            $nbNote ++;
            $so_note += $module['note'];
        }elseif ($module['note'] == 4){

            echo "<td class = 'moyen'>".$module['note']."</td>";
            $nbNote ++;
            $so_note += $module['note'];
        }elseif ($module['note'] <= 3.75){
            echo "<td class = 'insuf'>".$module['note']."</td>";
            $nbNote ++;
            $so_note += $module['note'];
        }
    elseif ($module['note'] = 4.5){

            echo "<td class = 'bonBack'>".$module['note']."</td>";
            $nbNote ++;
            $so_note += $module['note'];
        }


    }
    $moyenne = round(($so_note/$nbNote)*2)/2;


    $tab_notes[$nomDomaine]['moyenne'] = $moyenne;
    echo "<tr>";
    echo "<td colspan='3' class ='cle'>Moyenne</td>";
    if($moyenne < 3.75){
        echo "<td class = 'insuf'>".$moyenne."</td>";

    }elseif ($moyenne == 4){

        echo "<td class = 'moyen'>".$moyenne."</td>";
    }
    elseif ($moyenne == 4.5){

        echo "<td class = 'bonBack'>".$moyenne."</td>";
    }
    elseif ($moyenne > 4.5){

        echo "<td class = 'bon2'>".$moyenne."</td>";
    }
    $tab_notes[$nomDomaine]['moyenne'] = $moyenne;
    echo "</tr>";


    //print_r($module);

    // print_r($domaine['modules']);
}
echo "</<table>";
echo "<table>";
echo "<br>";
$moyenneCompInfo= ($tab_notes['ci']['moyenne'] * $tab_notes['ci']['ponderation'] + $tab_notes['cie']['moyenne'] * $tab_notes['cie']['ponderation'])/100;
echo "<tr>";
echo "<th>Moyenne compétence informatique</th>";
if($moyenneCompInfo<3.75){
    echo "<td class = 'echecBack'>".$moyenneCompInfo."

</td>";

}elseif ($moyenneCompInfo > 3.75){

    echo "<td class = 'bonBack'>".$moyenneCompInfo."</td>";
}
$tab_notes[$nomDomaine]['moyenne'] = $moyenneCompInfo;
echo "</tr>";
echo "</tr>";

foreach ($tab_notes AS $domaine) {
    echo "<tr>";
    if($domaine['ponderation'] == Null){
        continue;
    }elseif($domaine['ponderation'] =! Null){
    echo "<tr>";
    echo "<td class = 'cle'>" . $domaine['desc'] . "</td>";
    echo "<td class = 'cle'>" . $domaine['moyenne'] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo"<table>";
echo "<br>";
foreach ($TPI AS $nomDomaine =>$domaineTPI) {

    echo "<tr>";
    echo "<th colspan='4' class ='CI'>TPI</th>";
    echo "</tr>";
    echo "<tr class = 'tr'>";
    echo "<td class = 'cle'>" . $domaineTPI['desc'] . "</td>";
    echo "<td class = 'cle'>" . $domaineTPI['note'] . " </td>";
}
echo"</table>";
echo"<table>";
echo "<br>";
echo "<th>Moyenne CFC</th>";
if(($moyenneCompInfo+$domaineTPI['note'])/2 < 3.75){
    echo "<th class = 'echecBack'>".($moyenneCompInfo+$domaineTPI['note'])/2 ." Echec</th>";
}elseif (($moyenneCompInfo+$domaineTPI['note'])/2 > 3.75){

    echo "<th class = 'bonBack'>".($moyenneCompInfo+$domaineTPI['note'])/2 ." Réussi</th>";
}
echo "<tr>";
echo "<td class = 'cle'>Moyenne compétence informatique</td>";
echo "<td class = 'cle'>" . $moyenneCompInfo. "</td>";
echo "</tr>";
echo "<tr class = 'tr'>";
echo "<td class = 'cle'>".$domaineTPI['desc']."</td>";
echo "<td class = 'cle'>".$domaineTPI['note']." </td>";
echo "</tr>";
echo"</table>";

echo "</pre>";
?>