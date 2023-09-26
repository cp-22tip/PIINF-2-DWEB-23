<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>

<form action="result.php" method="post">
    Nom d'utilisateur <input type="text" name="nom">
    <br>
    e-mail <input type="e-mail" name="e-mail">
    <br>
    <select name="note">
        <option value="insuf">Insuffisant</option>
        <option value="Suf">Suffisant</option>
        <option value="Bien">Bien</option>
        <option value="Très">Très bien</option>
    </select><br>
    <input type="radio" name="genre" value="Homme">Homme<br>
    <input type="radio" name="genre" value="Femme">Femme<br>