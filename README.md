# TP5
//* INDEX.PHP *//
Simple and easy to add captchas on your php project
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
SESSION_START();
/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
* AFFICHER UNE IMAGE GÉNÉRÉE EN PHP */
echo "<img src='script-captchas.php' alt='captchas' />";
if(!isset($_POST['code']))
	
{echo "Code de sécurité doit contenir une valeur !";}
 if(!isset[$POST['code']($_POST['code'])
	 
 {echo "Code de sécurité n'est pas validé !"}
 if(!isset($SESSION['code']))
 {echo "Code valide"!;}
