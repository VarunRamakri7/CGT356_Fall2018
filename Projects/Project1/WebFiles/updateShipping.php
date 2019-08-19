<?php
session_start();


if(empty($_SESSION["errorMessage"]))
{
    $_SESSION["errorMessage"] = "";
}


echo("<?xml version=\"1.0\" encoding =\"UTF-8\"?>"); 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Shipping - Update Page</title>
    <style type="text/css">
        form{width:400px; margin: 0px auto;}
        ul{ list-style:none; margin-top:5px;}
        ul li{ display:block; float:left; width:100%; height:1%;}
        ul li label{ float:left; padding:7px;}
        ul li input{ float:right; margin-right:10px; border:1px solid #ccc; padding:3px; font-family: Georgia, Times New Roman, Times, serif; width:240px;}
        li input:focus{ border:1px solid #999;}
        fieldset{ padding:10px; border:1px solid #ccc; width:400px; overflow:auto; margin:10px;}
        legend{ color:#000000; margin:0 10px 0 0; padding: 0 5px; font-size:11pt; font-weight:bold; }
        label span{ color:#ff0000; }
        ul li span{color:#0000ff; font-weight:bold;}
        input#submit{width:248px;}
    </style>
</head>

<body>
    <h1 style="text-align:center;">Shipping - Update Page</h1>
    <?php 
        $servername="localhost";
        $username="ramakri7";
        $password="19fire98";
        $dbname="Project1";

        include("includes/openDBConn.php"); 

        $sql="SELECT DISTINCT uniqueid, firstname, lastname, address, state, city, zip, country FROM ShippingAddress WHERE username=".$username;
        $result= $conn->query($sql);

        if($result->num_rows == 0)
        {
            $_SESSION["errorMessage"] = "Invalid information";
        }
        else
        {
            $row = $result->fetch_assoc();
        }
    ?>
        <form id="form0" name="form0" method="post" action="updateDo.php">
            <fieldset id="shipping">
                <legend>Update items in Project1 Database</legend>
                <ul>
                    <li> <label title="UniqueID" for="uniqueid">UniqueID<span>*</span></label>
                         <input type="hidden" name="uniqueid" id="uniqueid" value = "
                            <?php 
                                if($result->num_rows != 0) 
                                { 
                                    echo(trim($row["UniqueID"])); 
                                } 
                            ?>" /></li>
                        <input type="hidden" name="uniqueid" id="uniqueid" value = "
                            <?php 
                                if($result->num_rows != 0) 
                                { 
                                    echo(trim($row["UniqueID"])); 
                                } 
                            ?>" /></li>
                    <li> <label title="Firstname" for="firstname">Firstname<span>*</span></label>
                         <input type="text" name="firstname" id="firstname" size="30" maxlength="30"  value = "
                            <?php 
                                if($result->num_rows != 0) 
                                { 
                                    echo(trim($row["Firstname"])); 
                                } 
                            ?>" /></li>
                    <li> <label title="Lastname" for="lastname">Lastname<span>*</span></label>
                         <input type="text" name="lastname" id="lastname" size="30" maxlength="30"  value = "
                            <?php 
                                if($result->num_rows != 0) 
                                { 
                                    echo(trim($row["Lastname"])); 
                                } 
                            ?>" /></li>
                    <li> <label title="Address" for="address">Address<span>*</span></label>
                         <input type="text" name="address" id="address" size="30" maxlength="30"  value = "
                            <?php 
                                if($result->num_rows != 0) 
                                { 
                                    echo(trim($row["Address"])); 
                                } 
                            ?>" /></li>
                    <li> <label title="City" for="city">City<span>*</span></label>
                         <input type="text" name="city" id="city" size="30" maxlength="30"  value = "
                            <?php 
                                if($result->num_rows != 0) 
                                { 
                                    echo(trim($row["City"])); 
                                } 
                            ?>" /></li>
                    <li> <label title="State" for="state">State<span>*</span></label>
                         <input type="text" name="state" id="state" size="30" maxlength="30"  value = "
                            <?php 
                                if($result->num_rows != 0) 
                                { 
                                    echo(trim($row["State"])); 
                                } 
                            ?>" /></li>
                    <li> <label title="Zip" for="zip">Zip<span>*</span></label>
                         <input type="text" name="zip" id="zip" size="30" maxlength="30"  value = "
                            <?php 
                                if($result->num_rows != 0) 
                                { 
                                    echo(trim($row["Zip"])); 
                                } 
                            ?>" /></li>
                    <li> <label title="Country" for="country">Country<span>*</span></label>
                         <input type="text" name="country" id="country" size="30" maxlength="30"  value = "
                            <?php 
                                if($result->num_rows != 0) 
                                { 
                                    echo(trim($row["Country"])); 
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

