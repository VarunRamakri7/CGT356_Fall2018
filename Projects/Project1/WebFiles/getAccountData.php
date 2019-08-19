<?php

session_start();

header("Cache-Control: no-cache");

// Instead of redirecting, we make a session variable equal to the input data
if(!empty($_POST["firstname"]))
{
    $_SESSION["firstname"] = $_POST["firstname"];
}
if(!empty($_POST["lastname"]))
{
    $_SESSION["lastname"] = $_POST["lastname"];
}
if(!empty($_POST["username"]))
{
    $_SESSION["username"] = $_POST["username"];
}
if(!empty($_POST["password"]))
{
    $_SESSION["password"] = $_POST["password"];
}
// Redirect
header("Location:displayAccountData.php");
?>
