<?php
session_start();

$name = addslashes($_POST["name"]);
$role = addslashes($_POST["role"]);
$color = addslashes($_POST["color"]);
$killcount = addslashes($_POST["killcount"]);
$uniqueid = addslashes($_POST["uniqueid"]);

if(($name == "") || ($role == "") ||
   ($color == "") || ($killcount == "") ||
   ($uniqueid == ""))
{
    $_SESSION["errorMessage"] = "Must eneter value for all boxes!";
    header("Location:insert.php");
    exit;
}
else if(!is_numeric($uniqueid))
{
    $_SESSION["errorMessage"] = "UniqueID must be a number!";
    header("Location:insert.php");
    exit; 
}
else if(!is_numeric($killcount))
{
    $_SESSION["errorMessage"] = "KillCount must be a number!";
    header("Location:insert.php");
    exit; 
}
else
{
    $_SESSION["errorMessage"] = "";
}

include("includes/openDBConn.php");

$sql = "SELECT UniqueID FROM Members WHERE UniqueID=".$uniqueid;

//echo($sql);

$result = $conn->query($sql);

if($result->num_rows > 0)
{
    $_SESSION["errorMessage"] = "You cannot enter duplicate data!";
    header("Location:insert.php");
    exit; 
}
else
{
    $_SESSION["errorMessage"] = "";
}

$sql = "INSERT INTO Members (UniqueID, Name, Role, Color, KillCount) VALUES ('".$uniqueid."', '".$name."', '".$role."', '".$color."', '".$killcount."')";
//echo($sql);

$result = $conn->query($sql);

include("includes/closeDBConn.php");

header("Location:select.php");
?>