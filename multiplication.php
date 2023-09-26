
<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-with">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
       th,td,table{
            border: 1px solid black;
           text-align: center;
        }
       th, td{ width: 30px;}
       th{background-color:lightgray;}
    </style>
</head>
<body>
<?php
echo "<table>";
for ($valeur1=1; $valeur1<=12; $valeur1++){
    echo "<tr>";
    if($valeur1 == 1){
        echo "<th>";
        echo "</th>";
    }
    else{
        echo "<th>$valeur1";
        echo "</th>";
    }

    for($multi=1;$multi<=12;$multi++) {
        if($valeur1 == 1){
            echo "<th>".$valeur1 * $multi;
            echo "</th>";
        }
        else {
            echo "<td>" . $valeur1 * $multi . "</td>";
        }
    }
    echo "</tr>";}
echo "</table>";
?>
</body>
</html>
