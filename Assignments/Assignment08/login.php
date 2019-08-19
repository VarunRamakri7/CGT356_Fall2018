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
    <title>Update Page</title>
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
    <h1 style="text-align:center;">Create New Account</h1>
    <?php
        
        $servername="localhost";
        $username="ramakri7";
        $password="19fire98";
        $dbname="Goblins";

        include("includes/openDBConn.php"); 
    ?>
        <form id="form0" name="form0" method="post" action="success.php">
            <fieldset id="billing">
                <ul>
                    <li> <label title="Password" for="password">Password<span>*</span></label> <input type="text" name="password" id="password" size="30" maxlength="30"/></li>
                    <li> <label title="Username" for="username">Username<span>*</span></label> <input type="text" name="username" id="username" size="30" maxlength="30"/></li>
                    <li><span><?php echo $_SESSION["errorMessage"]; ?></span></li>
                    <li> <input id="submit" name="submit" type="submit" value="Submit" /></li>
                </ul>
            </fieldset>
            <div id=”newuser”><a href=”newuser.php”>Create New Login</a></div>
            <script type="text/javascript">
                document.getElementByID("Username").focus();
            </script>

        </form>
</body>

</html>

