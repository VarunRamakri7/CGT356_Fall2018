<?php

session_start();

$id = $_GET["id"];

include("includes/openDBConn.php");

$sql = "DELETE FROM projectlogin WHERE uniqueid=".$id;

//echo($sql);

$result = $conn->query($sql);

include("includes/closeDBConn.php");

header("Location:selectAccount.php");
?>
<!DOCTYPE html>
<html>
    <body>
    <h2 align="right"><a href = "includes/logout.php">Logout</a></h2>
    </body>
</html>