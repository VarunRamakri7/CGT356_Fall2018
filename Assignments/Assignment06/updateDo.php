<?php
session_start();

$name = addslashes($_POST["name"]);
$role = addslashes($_POST["role"]);
$color = addslashes($_POST["color"]);
$killcount = addslashes($_POST["killcount"]);
$uniqueid = addslashes($_POST["uniqueid"]);

if($uniqueid == "")
{
    $_SESSION["errorMessage"] = "Must eneter value for all boxes!";
    header("Location:select.php");
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

$sql = "UPDATE Members SET Name = '".$name."', Role = '".$role."', Color = '".$color."', KillCount = '".$killcount."' WHERE Members.UniqueID = ".$uniqueid;
//echo($sql);

$result = $conn->query($sql);

include("includes/closeDBConn.php");

header("Location:select.php");
?>