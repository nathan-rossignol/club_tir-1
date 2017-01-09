<?php

$login = $_GET['login'];
$mdp = $_GET['mdp'];


header("Access-Control-Allow-Origin: *");
$con = mysqli_connect('localhost','c0booking','booking','c0booking');

if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"c0booking");

$sql="SELECT * FROM user WHERE mail_user='". $login . "' AND mdp_user='" . $mdp."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {

    if ($row[id_user] != null){
        echo "<input id='isLoginOk' name='LoginOk' type='hidden' value=" . $row['id_user'] . ">";
        echo "<input id='isTrainee' name='LoginOk' type='hidden' value=" . $row['trainee'] . ">";
    }
}

mysqli_close($con);

?>