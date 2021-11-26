<?php
session_start();
require_once "../connect.php";
$ovh=F_CONNECT::getConnexionOVH();
print_r($_POST);
$sql="select id, password from user WHERE login='".$_POST["login"]."'";
$result=$ovh->query($sql);
$data=$result->fetch(PDO::FETCH_OBJ);

    if(password_verify($_POST["password"], $data->password)){
        $_SESSION["user"]=$data->id;
        header("location: ../index.php");
    } else{

        header("location: ../login.php");
    }
