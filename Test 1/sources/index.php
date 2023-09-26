
<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pellicano</title>
</head>
<body>
<?php
echo "<form action='result.php' method ='post'>";
require_once("data.inc.php");
foreach ($tab_options AS $options){
    echo "$options <input type=checkbox name='$options' value='$options'>"."<br>";
}
echo "<input type='submit' name ='send'>"."<br>";
echo "</form>";

?>



</body>
</html>