<?php
session_start();

$uniqueid = addslashes($_POST["uniqueid"]);
$username = addslashes($_POST["username"]);
$password = addslashes($_POST["password"]);

if($uniqueid == "")
{
    $_SESSION["errorMessage"] = "Must eneter value for all boxes!";
    header("Location:selectAccount.php");
    exit;
}
else
{
    $_SESSION["errorMessage"] = "";
}

include("includes/openDBConn.php");

$sql = "SELECT uniqueid FROM projectlogin WHERE uniqueid=".$uniqueid;

//echo($sql);

$result = $conn->query($sql);

if($result->num_rows == 0)
{
    $_SESSION["errorMessage"] = "You must create a Goblin with an ID of 2!";
    header("Location:insert.php");
    exit; 
}
else
{
    $_SESSION["errorMessage"] = "";
}

$sql = "UPDATE projectlogin SET username = '".$username."', password = '".$password."' WHERE uniqueid=".$uniqueid;
//echo($sql);

$result = $conn->query($sql);

include("includes/closeDBConn.php");

header("Location:selectAccount.php");
?>