<?php
session_start();
require_once "../connect.php";
$ovh=F_CONNECT::getConnexionOVH();
print_r($_POST);
$sql="insert into user(login, email, password) VALUES('".$_POST["login"]."', '".$_POST["email"]."','".password_hash($_POST["password"],PASSWORD_BCRYPT)."')"; //ajout d'un utilisateur(inserer les champs voulu)
$result=$ovh->query($sql);
$sql="select id from user WHERE email='".$_POST["email"]."'";
$result=$ovh->query($sql);
$data=$result->fetch(PDO::FETCH_OBJ);
$_SESSION["user"]=$data->id;
header("location: ../index.php");