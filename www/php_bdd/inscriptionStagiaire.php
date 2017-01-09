<?php

$nom_user = $_GET['prenom'];
$lastname_user = $_GET['nom'];
$login = $_GET['login'];
$mdp = $_GET['mdp'];
$login = $_GET['login'];
$mdp = $_GET['mdp'];


header("Access-Control-Allow-Origin: *");
$con = mysqli_connect('localhost','c0booking','booking','c0booking');

if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"c0booking");

$sql="insert into user values (". .", ". .",". .",". .")";

$result = mysqli_query($con,$sql);

mysqli_close($con);

?>