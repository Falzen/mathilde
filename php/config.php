<?php
try {
	$db = new PDO('mysql:host=localhost;dbname=mathilde', 'root', '');
	$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER); // always lower case.
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // errors will trigger exceptions.
	$db->exec("SET NAMES 'utf8';"); // accents and stuff allowed.
}
catch(Exception $e){
	echo 'Une erreur est survenue.';
	die();
}
?>