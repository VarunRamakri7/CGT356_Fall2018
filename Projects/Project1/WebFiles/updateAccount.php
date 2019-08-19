<?php
session_start();


if(empty($_SESSION["errorMessage"]))
{
    $_SESSION["errorMessage"] = "";
}

$id = $_GET["id"];

echo("<?xml version=\"1.0\" encoding =\"UTF-8\"?>"); 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Account Info - Update Page</title>
    <style type="text/css">
        form{width:400px; margin: 0px auto;}
        ul{ list-style:none; margin-top:5px;}
        ul li{ display:block; float:left; width:100%; height:1%;}
        ul li label{ float:left; padding:7px;}
        ul li input{ float:right; margin-right:10px; border:1px solid #ccc; padding:3px; font-family: Georgia, Times New Roman, Times, serif; width:240px;}
        li input:focus{ border:1px solid #999;}
        fieldset{ padding:10px; border:1px solid #ccc; width:400px; overflow:auto; margin:10px;}
        legend{ username:#000000; margin:0 10px 0 0; padding: 0 5px; font-size:11pt; font-weight:bold; }
        label span{ username:#ff0000; }
        ul li span{username:#0000ff; font-weight:bold;}
        input#submit{width:248px;}
    </style>
</head>

<body>
    <h1 style="text-align:center;">Update Page</h1>
    <?php 
        include("includes/menu.php");
        
        $servername="localhost";
        $username="ramakri7";
        $password="19fire98";
        $dbname="Project1";

        include("includes/openDBConn.php"); 

        $sql="SELECT DISTINCT uniqueid, firstname, lastname, username, password FROM projectlogin WHERE uniqueid=".$id;
        $result= $conn->query($sql);

        if($result->num_rows == 0)
        {
            $_SESSION["errorMessage"] = "Error";
        }
        else
        {
            $row = $result->fetch_assoc();
        }
    ?>
        <form id="form0" name="form0" method="post" action="updateDoAccountInfo.php">
            <fieldset id="billing">
                <legend>Update items in Project 1 Database</legend>
                <ul>
                    <li> <label title="UniqueID" for="uniqueid">UniqueID<span>*</span></label> 
                         <input type="text" name="uniqueiddis" id="uniqueiddis" disabled = "disabled" size="30" maxlength="30" value = 
                         "<?php 
                            if($result->num_rows != 0) 
                            { 
                                echo(trim($row["UniqueID"])); 
                            } 
                          ?>" />
                         <input type="hidden" name="uniqueid" id="uniqueid" value =
                         "<?php 
                            if($result->num_rows != 0) 
                            { 
                                echo(trim($row["UniqueID"])); 
                            } 
                          ?>" /></li>
                    <li> <label title="Firstname" for="firstname">Firstname<span>*</span></label>
                         <input type="text" name="firstname" id="firstname" size="30" maxlength="30" value = 
                         "<?php 
                            if($result->num_rows != 0) 
                            { 
                                echo(trim($row["Firstname"])); 
                            } 
                          ?>" /></li>
                    <li> <label title="Lastname" for="lastname">Lastname<span>*</span></label>
                         <input type="text" name="lastname" id="lastname" size="30" maxlength="30" value = 
                         "<?php 
                            if($result->num_rows != 0) 
                            { 
                                echo(trim($row["Lastname"])); 
                            } 
                          ?>" /></li>
                    <li> <label title="Username" for="username">Username<span>*</span></label>
                         <input type="text" name="username" id="username" size="30" maxlength="30" value = 
                         "<?php 
                            if($result->num_rows != 0) 
                            { 
                                echo(trim($row["Username"])); 
                            } 
                          ?>" /></li>
                    <li> <label title="Password" for="password">Password<span>*</span></label>
                         <input type="text" name="password" id="password" size="30" maxlength="30" value = 
                         "<?php 
                            if($result->num_rows != 0) 
                            { 
                                echo(trim($row["Password"])); 
                            } 
                          ?>" /></li>
                    <li><span><?php echo $_SESSION["errorMessage"]; ?></span></li>
                    <li> <input id="submit" name="submit" type="submit" value="Update Info" /></li>
                </ul>
            </fieldset>

            <?php

                $_SESSION["errorMessage"] = "";

            ?>
            <script type="text/javascript">
                document.getElementByID("name").focus();
            </script>

        </form>
        <h2 align="right"><a href = "includes/logout.php">Logout</a></h2>
</body>

</html>

