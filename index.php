<html>
<head>
<meta charset="="utf-8">
</head>
<body>
<img src="captcha_1.png">
<form method="POST">
<input type="text" name="captcha">
<p> Saisissez le code de sécurité </p>
<input type="submit" name="valider">

                    
<?php
$_SESSION ['code']
/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
* AFFICHER UNE IMAGE GÉNÉRÉE EN PHP */

echo "<img src='script-captchas.php' alt='captchas' />";
if(isset($_POST{=0 {ECHO "Code de sécurité doit contenir une valeur !";}
 if(isset($_POST['ref=1']){echo "Code de sécurité n'est pas validé !"}
 if(isset($_POST['ref']) && S_POST['ref'] ==1){echo "Code valide" !;}
 
?>
