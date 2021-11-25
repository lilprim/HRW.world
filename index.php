<?php
require_once('header.php');
// $sql="select * from user";
// $result=$ovh->query($sql);
//  $data=$result->fetch(PDO::FETCH_OBJ);
//comm: requete, connexion et recuperation des resultats  de la BDD
// $sql="insert into user(login, email) VALUES('primael', 'pronoprim@gmail.com')"; ajout d'un utilisateur(inserer les champs voulu)
$sql="update user set email='primaelp@gmail.com' where id=1";
$result=$ovh->query($sql);
require_once('footer.php');
?>