<?php

$login = $_GET['login'];
$mdp = $_GET['mdp'];


header("Access-Control-Allow-Origin: *");
$con = mysqli_connect('localhost','c0booking','booking','c0booking');

if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"c0booking");

$sql="SELECT id_offer, description_offer, label_offer, logo_company, name_company FROM offer, company where offer.id_company = company.id_company";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
echo "
    <a class='item item-thumbnail-left' href='detailOffre.html?id=".$row[id_offer]. "'>
                            <img src='". $row['logo_company']. "' style='height:90px; width: 90px;'>
                            <h3>". $row['name_company'] ."</h3>
                            <p>". $row['label_offer'] ."</p>
                </a>
     ";
}

mysqli_close($con);

?>