<?php
session_start();
?>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>
<pre>
<?php
require_once("veg.inc.php");

    print_r($_SESSION);
?>
</pre>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <h2>Testez votre capacité à devenir végétarien</h2>
<?php
?>
