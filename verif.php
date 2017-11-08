<?php 
$email  = htmlspecialchars(($_POST['email']));
$text   = htmlspecialchars(($_POST['text']));
$nom    = htmlspecialchars(($_POST['nom']));
$prenom = htmlspecialchars(($_POST['prenom']));
$objet  = htmlspecialchars(($_POST['objet']));

if (!empty($email) && !empty($nom) && !empty($prenom) && !empty($text) && !empty($objet)) {

	if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i',$email)){
		$headers = 'From:'.$email . "\r\n" .
		'Reply-To:'.$email . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();
		
		mail('s.guillon@aformac-vichy.fr', $objet, $text,$headers);
		$retour = 'message envoyé';
	}
	else{
		$retour = "veuillez entrer une adresse mail vailde ";
	}
}
echo json_encode($retour);

 ?>