
<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-with">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
       td, table{
            border: 1px solid black;
           text-align: center;
        }
       td { padding-left: 7px;
       padding-right: 7px;
       }
    </style>
</head>
<body>
<?php
echo "<table>";
for ($valeur1=1; $valeur1<=12; $valeur1++){
    echo "<tr>";
    for($multi=1;$multi<=12;$multi++) {

        echo "<td>".$valeur1*$multi."</td>";
    }
    echo "</tr>";}
echo "</table>";
?>
</body>
</html>