<?php
session_start();

$uniqueid = addslashes($_POST["uniqueid"]);
$firstname = addslashes($_POST["firstname"]);
$lastname = addslashes($_POST["lastname"]);
$address = addslashes($_POST["address"]);
$state = addslashes($_POST["state"]);
$city = addslashes($_POST["city"]);
$zip = addslashes($_POST["zip"]);
$country = addslashes($_POST["country"]);

if($uniqueid == "")
{
    $_SESSION["errorMessage"] = "Must eneter value for all boxes!";
    header("Location:selectShipping.php");
    exit;
}
else
{
    $_SESSION["errorMessage"] = "";
}

include("includes/openDBConn.php");

$sql = "SELECT uniqueid FROM ShippingAddress WHERE uniqueid=".$uniqueid;

//echo($sql);

$result = $conn->query($sql);

if($result->num_rows == 0)
{
    $_SESSION["errorMessage"] = "You must create a Goblin with an ID of 2!";
    header("Location:insertShipping.php");
    exit; 
}
else
{
    $_SESSION["errorMessage"] = "";
}

$sql = "UPDATE ShippingAddress SET firstname = '".$firstname."', lastname = '".$lastname."', address = '".$address."', state = '".$state."' WHERE uniqueid = ".$uniqueid;
//echo($sql);

$result = $conn->query($sql);

include("includes/closeDBConn.php");

header("Location:selectShipping.php");
?>