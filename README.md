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
				   
//* script-captchas.php *//               
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

<meta-charset="utf-8">
<?php
/****************************************************************
* CAPTCHA GENERATEUR IMAGE EN PHP
* /!\ PAS DE RETOUR D'ERREUR SUR LA GÉNÉRATION
* SCRIPT ALLEGÉ SANS OPTIMISATION POUR LA COMPRÉHENSION
*****************************************************************/
/****************************************************************
* 1. PARAMETRAGE DES ATTRIBUTS VARIABLES
*****************************************************************/
/* CHAINE DE CARACTÈRE PARAMÈTRABLE
* SUPPRESSION DE 1 & I POUR ÉVITER LA CONFUSION DE LECTURE */
$chaine = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';
/* CREATION de l'image par defaut en background */
$image = imagecreatefrompng('Images/captcha_1.png');
/* COULEUR DES CARACTERES */
$color = imagecolorallocate($image, 140, 0, 140);
/* POLICE DES CARACTERES TRUETYPE */
$font = 'Fonts/Cartoon.ttf';
/****************************************************************
* 2. FONCTIONS ET PROCEDURES
*****************************************************************/
/* NOMBRE DE DIGIT & CHAINE PARAMETRABLES */
function getCode($length, $chars) {
	$code = null;
	for ( $i=0; $i < $length; $i++ )
		{
		$code .= $chars { mt_rand( 0, strlen($chars) - 1 ) };
		}
	return $code;
	};
/****************************************************************
* 3. PROCEDURES DE GENERATION DYNAMIQUE DE L'IMAGE
*****************************************************************/
/* APPEL DE LA FONCTION POUR RECUPERER UNE CHAINE ALEATOIRE */
$code = getCode(5, $chaine);
SESSION_START ['code']
/* RETOURNE UN A UN LES SEGMENTS DE LA CHAINE */
$char1 = substr($code,0,1);
$char2 = substr($code,1,1);
$char3 = substr($code,2,1);
$char4 = substr($code,3,1);
$char5 = substr($code,4,1);
/* DESSINE UN TEXTE AVEC UNE POLICE TRUETYPE
* PARAMS : IMAGE / TAILLE / ANGLE / POSX / POSY / COULEUR/ POLICE / CARACTERE */
imagettftext($image, 28, -10, 0, 37, $color, $font, $char1);
imagettftext($image, 28, 20, 37, 37, $color, $font, $char2);
imagettftext($image, 28, -35, 55, 37, $color, $font, $char3);
imagettftext($image, 28, 25, 100, 37, $color, $font, $char4);
imagettftext($image, 28, -15, 120, 37, $color, $font, $char5);
/****************************************************************
* 4. PROCEDURES DE GENERATION DYNAMIQUE DE L'IMAGE
*****************************************************************/
/* ENTETE HTTP A RENVOYER POUR LA GENERATION DE L'iMAGE */
header('Content-Type: image/png');
/* ENVOI DE L'IMAGE PNG GENERÉE AU NAVIGATEUR */
imagepng($image);
/* DESTRUCTION DE L'IMAGE LIBÉRATION DE MÉMOIRE */
imagedestroy($image);
?>
