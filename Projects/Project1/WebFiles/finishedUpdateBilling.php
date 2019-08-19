<?php
session_start();

// Clear session variables
$_SESSION["uniqueid"]="";
$_SESSION["firstname"]="";
$_SESSION["lastname"]="";
$_SESSION["cardnumber"]="";
$_SESSION["cardtype"]="";
$_SESSION["expiration"]="";
$_SESSION["ccv"]="";
$_SESSION["address"]="";
$_SESSION["city"]="";
$_SESSION["state"]="";
$_SESSION["zip"]="";
$_SESSION["country"]="";
$_SESSION["errorMessage"]="";

// Abandon session
session_abort();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Billing FinishedUpdate Page</title>
		<style>
			#WholeBody { background-color: lightblue; }
		</style>
	</head>

	<body id="WholeBody">
		<h1 style="font-size:14pt; text-indent:360px;">Finished Update</h1>
			<p>Your information has been successfully updated in our database</p>
	</body>
</html>