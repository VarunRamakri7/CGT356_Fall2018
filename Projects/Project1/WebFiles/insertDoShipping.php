<?php
session_start();

$firstname = addslashes($_POST["firstname"]);
$lastname = addslashes($_POST["lastname"]);
$address = addslashes($_POST["address"]);
$city = addslashes($_POST["city"]);
$state = addslashes($_POST["state"]);
$zip = addslashes($_POST["zip"]);
$country = addslashes($_POST["country"]);

if(($firstname == "") || ($lastname == "") ||
   ($address == "") || ($city == "") ||
   ($state == "") || ($zip == "") || 
   ($country == "")
{
    $_SESSION["errorMessage"] = "Must eneter value for all boxes!";
    header("Location:insertShipping.php");
    exit;
}
else if(!is_numeric($zip))
{
    $_SESSION["errorMessage"] = "Zip must be a number!";
    header("Location:insertShipping.php");
    exit; 
}
else
{
    $_SESSION["errorMessage"] = "";
}

include("includes/openDBConn.php");

$sql = "SELECT uniqueid FROM ShippingAddress WHERE username='".$_SESSION["login_user"]."'";

//echo($sql);

$_SESSION["errorMessage"] = "";

$sql = "INSERT INTO ShippingAddress (uniqueid, firstname, lastname, address, city, state, zip, country, username) VALUES (null, '".$firstname."', '".$lastname."', '".$address."', '".$city."', '".$state."', '".$zip."', '".$country."', '".$_SESSION["login_user"]."')";
//echo($sql);

$result = $conn->query($sql);

include("includes/closeDBConn.php");

header("Location:selectShipping.php");
?>