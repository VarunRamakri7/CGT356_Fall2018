<?php
session_start();

$firstname = addslashes($_POST["firstname"]);
$lastname = addslashes($_POST["lastname"]);
$cardnumber = addslashes($_POST["cardnumber"]);
$cardtype = addslashes($_POST["cardtype"]);
$expiration = addslashes($_POST["expiration"]);
$ccv = addslashes($_POST["ccv"]);
$address = addslashes($_POST["address"]);
$city = addslashes($_POST["city"]);
$state = addslashes($_POST["state"]);
$zip = $_POST["zip"];
$country = addslashes($_POST["country"]);


if(($firstname == "") || ($lastname == "") ||
   ($cardnumber == "") || ($cardtype == "") ||
   ($expiration == "") || ($ccv == "") || 
   ($address == "") || ($city == "") ||
   ($state == "") || ($country == "") || ($zip == ""))
{
    $_SESSION["errorMessage"] = "Must enter value for all boxes!";
    header("Location:insertBilling.php");
    exit;
}
else if(!is_numeric($cardnumber))
{
    $_SESSION["errorMessage"] = "Cardnumber must be a number!";
    header("Location:insertBilling.php");
    exit; 
}
else if(!is_numeric($zip))
{
    $_SESSION["errorMessage"] = "Zip must be a number!";
    header("Location:insertBilling.php");
    exit; 
}
else
{
    $_SESSION["errorMessage"] = "";
}

include("includes/openDBConn.php");

/*$sql = "SELECT username FROM PaymentInformation WHERE username='".$_SESSION["login_user"]."'";

//echo($sql);

$result = $conn->query($sql);

if($result->num_rows > 0)
{
    $_SESSION["errorMessage"] = "You cannot enter duplicate data!";
    header("Location:insertBilling.php");
    exit; 
}
else
{
    $_SESSION["errorMessage"] = "";
}*/

$sql = "INSERT INTO PaymentInformation (uniqueid, firstname, lastname, cardnumber, cardtype, expiration, ccv, address, state, city, zip, country, username) VALUES (NULL, '".$firstname."', '".$lastname."', '".$cardnumber."', '".$cardtype."', '".$expiration."', '".$ccv."', '".$address."', '".$city."', '".$state."', '".$zip."', '".$country."', '".$_SESSION["login_user"]."')";
//echo($sql);

$result = $conn->query($sql);

include("includes/closeDBConn.php");

header("Location:selectBilling.php");
?>