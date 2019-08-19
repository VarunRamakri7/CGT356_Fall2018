<?php
session_start();

$uniqueid = addslashes($_POST["uniqueid"]);
$firstname = addslashes($_POST["firstname"]);
$lastname = addslashes($_POST["lastname"]);
$cardnumber = addslashes($_POST["cardnumber"]);
$cardtype = addslashes($_POST["cardtype"]);
$expiration = addslashes($_POST["expiration"]);
$ccv = addslashes($_POST["ccv"]);
$address5 = addslashes($_POST["address5"]);
$state = addslashes($_POST["state"]);
$city = addslashes($_POST["city"]);
$zip = addslashes($_POST["zip"]);
$country = addslashes($_POST["country"]);

if($uniqueid == "")
{
    $_SESSION["errorMessage"] = "Must eneter value for all boxes!";
    header("Location:selectBilling.php");
    exit;
}
else
{
    $_SESSION["errorMessage"] = "";
}

include("includes/openDBConn.php");

$sql = "SELECT uniqueid FROM PaymentInformation WHERE uniqueid=".$uniqueid;

//echo($sql);

$result = $conn->query($sql);

if($result->num_rows == 0)
{
    $_SESSION["errorMessage"] = "You must create a person";
    header("Location:insertBilling.php");
    exit; 
}
else
{
    $_SESSION["errorMessage"] = "";
}

$sql = "UPDATE PaymentInformation SET firstname = '".$firstname."', lastname = '".$lastname."', cardnumber = '".$cardnumber."', cardtype = '".$cardtype."', expiration = '".$expiration."', ccv = '".$ccv."', address = '".$address."', city = '".$city."', state = '".$state."', zip = '".$zip."', country = '".$country."' WHERE uniqueid=".$uniqueid;
//echo($sql);

$result = $conn->query($sql);

include("includes/closeDBConn.php");

header("Location:selectBilling.php");
?>