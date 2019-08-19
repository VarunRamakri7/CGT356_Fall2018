<?php

// If user does not input name, they are redirected to the index page
if(empty($_POST["name"]))
{
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Display Page</title>
    <style type="text/css">
        ul{ list-style:none; margin-top:5px;}
        ul li{ display:block; float:left; width:100%; height:1%;}
        ul li label{ float:left; padding:7px; color:#666ff}
        ul li input, ul li textarea{ float:right; margin-right:10px; border:1px solid #ccc; padding:3px; font-family: Georgia, Times New Roman, Times, serif; width:60%;}
        li input:focus, li textarea:focus{ border:1px solid #666;}
        fieldset{ padding:10px; border:1px solid #ccc; width:400px; overflow:auto; margin:10px;}
        legend{ color:#000099; margin:0 10px 0 0; padding: 0 5px; font-size:11pt; font-weight:bold; }
        label span{ color:#ff0000; }
        fieldset#billing {position:absolute; top:60px; left:20px; }
        fieldset#shipping {position:absolute; top:60px; left:460px; }
        fieldset#submit {position:absolute; top:540px; left:20px; width:840px; text-align:center; }
        fieldset input#SubmitBtn{ background#ESESES; color:#000099; border:1px solid#ccc; padding:5px; width:150px; }
        body {background-color: lightgrey;}
        #Billing {background-color: lightblue;}
        #Shipping {background-color: lightgreen;}
    </style>
</head>

<body>

<div id="Whole">
    <h1 style="font-size:14pt; text-indent:360px;">Display Data Page</h1>

    <form id="form0" name="form0" method="post" action="getFormData.php">
        <fieldset id="billing">
        <div id="Billing">
            <!-- Displays the billing data that was posted from the getFormData page -->
            <legend>Billing Information</legend>
            <ul>
                <li> <span><?php echo($_POST["name"]); ?></span></li>
                <li> <span><?php echo($_POST["address"]); ?></span></li>
                <li> <span><?php echo($_POST["city"]); ?></span></li>
                <li> <span><?php echo($_POST["state"]); ?></span></li>
                <li> <span><?php echo($_POST["zip"]); ?></span></li>
                <li> <span><?php echo($_POST["country"]); ?></span></li>
                <li> <span><?php echo($_POST["phone"]); ?></span></li>
                <li> <span><?php echo($_POST["email"]); ?></span></li>
                <li> <span><?php echo($_POST["comments"]); ?></span></li>
            </ul>
        </div>
        </fieldset>

        <fieldset id="shipping">
            <div id="Shipping">
            <!-- Displays the shipping data that was posted from the getFormData page -->
            <legend>Shipping Information (if different from billing)</legend>
            <ul>
                <li> <span><?php echo($_POST["Sname"]); ?></span></li>
                <li> <span><?php echo($_POST["Saddress"]); ?></span></li>
                <li> <span><?php echo($_POST["Scity"]); ?></span></li>
                <li> <span><?php echo($_POST["Sstate"]); ?></span></li>
                <li> <span><?php echo($_POST["Szip"]); ?></span></li>
                <li> <span><?php echo($_POST["Scountry"]); ?></span></li>
            </ul>
            </div>
        </fieldset>

    </form>
</div>

</body>
</html>

