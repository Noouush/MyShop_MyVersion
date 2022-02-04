<?php 

/* CONNEXION A LA BDD */
/* Attention ! ce Fichier est un env exemple, veuillez remplir avec vos infos et le renommer env.php */

function connect_bdd(){

    $host = '';
    $db = '';
    $username = '';
    $password = '';

try
{
	
    $bdd = new PDO('mysql:host=' . $host . ';charset=utf8mb4;dbname=' . $db, $username, $password);
    /* pour les versions antérieures à PHP 5.3.6 */
    // $bdd->exec('SET NAMES "UTF8"');
}
catch (PDOException $e)
{
    $error_message = "PDO ERROR: " . $e->getmessage() . "\n";
    echo $error_message;
    return false;
};
return $bdd;
};