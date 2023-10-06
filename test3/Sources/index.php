<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice</title>
</head>
<body>
<pre>
<?php


$operations = 0;
if(!isset($_SESSION['operations'])) {
    $_SESSION['operations'] = array();
}
// création du résultat
foreach ($_POST AS $key){

        if ($_POST['operator'] == '+') {
           $resulutat =   $_POST['chiffre_1'] + $_POST['chiffre_2'];


        } elseif ($_POST['operator'] == '-') {

            $resulutat = $_POST['chiffre_1'] - $_POST['chiffre_2'];
        }


}
// création de la key résultat
    if(!isset($_POST['resultat'])){
    $_POST['resultat'] = $resulutat;
    }
    // pour réinitialiser mes valeurs;
if($_POST['reset']){
    $_POST['chiffre_1'] =  0;
    $_POST['chiffre_2'] =  0;
}

$calcul = $_POST['chiffre_1']." ".$_POST['operator']." ".$_POST['chiffre_2']." = ".$resulutat;

print_r($_POST);
?>
    </pre>
<table>
    <tr>
        <td><?php echo$calcul?></td>
    </tr>
</table>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="submit" name="reset" value="réinitialiser">
</form>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <input type="number" name="chiffre_1" value="">

    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
    </select>

    <input type="number" name="chiffre_2">
    <input type="submit" value="=">
</form>
<pre>

</pre>
</body>
</html>