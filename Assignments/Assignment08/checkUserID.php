<?php
$mode = $_GET[“mode”];
if($mode == “ask”)
{
$un = $_GET[“username”];

//connect to the database
include(“includes/openDBConn.php”);

//make sure login doesn’t exist
$sql =”SELECT Username FROM 08Users WHERE Username=’”.$un.”’”;

//call query
$result = mysqli->query($sql);

//check to make sure there si a result
if(empty($result))
{
    $num_records = 0;
}
else
{
    $num_records = mysqli->num_rows($result);
}

//close connection to the database
include(“includes/closeDBConn.php”);

if($num_records == 0)
{
    echo (“available”);
}
else
{
    echo(“not available”);
}