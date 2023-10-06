<?php session_start()?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test végétarien</title>
    <style>
        body{
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

    </style>
</head>
<body>
<h2>Testez votre capacité à devenir végétarien</h2>
<?php
require_once("includes/data.inc.php");


//Creation formulaire
echo "<form action='index.php' method='post'><br>";




//Section départ, formulaire Prénom
if (!array_key_exists('startSubmit', $_POST) && !array_key_exists('submit', $_POST)){
    echo "Prénom ";
    echo "<input type='text' name='prenom'><br>";
    echo "<input type='submit' name='startSubmit' value='Débuter le test'>";
}



//Section de la fin du questionnaire
elseif (array_key_exists('vegi', $_SESSION) && $_SESSION['vegi']['num_question'] == 8){



    //parti Calcul
    //------------


    $lastReponse = 0;

    foreach ($_SESSION['vegi']['reponses'] AS $responsesKey => $reponse){
        if ($reponse > $lastReponse){
            $lastReponse = $reponse;
            $resultKey = $responsesKey;
        }
    }



    //parti affichage
    //---------------


    echo "<h2>Résultat du test</h2><br>";
    echo "Vous avez obtenu un maximum de ".$resultKey;

    echo "<h1>".$tab['resultat'][$resultKey]['titre']."</h1>";

    echo $tab['resultat'][$resultKey]['details'];
    session_destroy();
}



//Section du Questionnaire
else{

    //parti d'inisialisation de $_SESSION (executer une seul fois)
    //------------------------------------------------------------



    if(array_key_exists('prenom', $_POST) && !array_key_exists('vegi', $_SESSION)){
        $_SESSION['vegi']['prenom'] = $_POST['prenom'];
        $_SESSION['vegi']['num_question'] = 0;
        $_SESSION['vegi']['reponses']['A'] = 0;
        $_SESSION['vegi']['reponses']['B'] = 0;
        $_SESSION['vegi']['reponses']['C'] = 0;
    }

    //parti récoltation réponse entré
    //-------------------------------


    if(array_key_exists('reponse', $_POST)){
        if($_POST['reponse'] == 'rep_1'){
            $_SESSION['vegi']['reponses']['A']++;
        }
        else if($_POST['reponse'] == 'rep_2'){
            $_SESSION['vegi']['reponses']['B']++;
        }
        else if($_POST['reponse'] == 'rep_3'){
            $_SESSION['vegi']['reponses']['C']++;
        }

        $_SESSION['vegi']['num_question']++;
    }




//Parti Affichage
//-------------------------


    //Write the Question NB
    echo "<h2>Question ";
    echo $_SESSION['vegi']['num_question'] + 1;
    echo "</h2>";

    //Write the question
    echo $tab['question'][$_SESSION['vegi']['num_question']]['texte']."<br><br>";



    //Generate the answers

    foreach ($tab['question'][$_SESSION['vegi']['num_question']] AS $questionKey => $reponse){
        if($questionKey != 'texte'){

            echo "<input type='radio' value='$questionKey' name='reponse'>".$reponse."<br>";

        }
    }

    echo "<input type='submit' name='submit' value='question suivante'>";

}

echo "</form>";

echo "<h2>Contenu de la session</h2>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
<a href="destroy.php">Destroy</a>
</body>
</html>