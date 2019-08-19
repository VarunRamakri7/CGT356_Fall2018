<?php 
session_start();
echo("<?xml version=\"1.0\" encoding =\"UTF-8\"?>"); 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8" />
    <title> Select </title>
</head>

<body>
    <h1 style="text-align:center;">Assignment06-Select</h1>
    <?php 
        include("includes/menu.php");
        
        $servername="localhost";
        $username="ramakri7";
        $password="19fire98";
        $dbname="Goblins";

        include("includes/openDBConn.php"); 

        $sql="SELECT DISTINCT UniqueID, Name, Role, Color, KillCount From Members";
        $result= $conn->query($sql);
    ?>

    <table style="border:0px; width:500px; padding:0px; margin:0px auto; border-spacing:0px;" title="Goblins campaign kill Count">

        <thead>
            <tr>
                <th colspan="5" style="font-weight:bold; background-color:#b1946c; text-align:center; text-decoration:underline;">Goblins Campaign Kill Count</th>
            </tr>
            <tr>
                <th style="background-color:#b1946c; font-weight:bold;">UniqueID</th>
                <th style="background-color:#b1946c; font-weight:bold;">Name</th>
                <th style="background-color:#b1946c; font-weight:bold;">Roles</th>
                <th style="background-color:#b1946c; font-weight:bold;">Color</th>
                <th style="background-color:#b1946c; font-weight:bold;">Kill Count</th>
            </tr>

        </thead>
        <tfoot>
            <tr>
                <td colspan="5" style="text-align:center; font-style:italic">Information was pulled from the Goblins Campaign Database</td>
            </tr>
        </tfoot>
        <tbody>
            <?php
                if($result->num_rows > 0)
                {
                    while($row= $result->fetch_assoc())
                    {
                        ?>
                        <tr>
                            <td style="border-right:1px solid #000000;"><?php echo(trim($row["UniqueID"])); ?></td>
                            <td style="border-right:1px solid #000000;"><?php echo(trim($row["Name"])); ?></td>
                            <td style="border-right:1px solid #000000;"><?php echo(trim($row["Role"])); ?></td>
                            <td style="border-right:1px solid #000000;"><?php echo(trim($row["Color"])); ?></td>
                            <td style="border-right:1px solid #000000;"><?php echo(trim($row["KillCount"])); ?></td>
                        </tr>
                        <?php 
                    }
                }
                 else
                {
                    echo("Error");
                }
                
                
            ?>
        </tbody> 
    <table>
    <?php
        include("includes/closeDBConn.php");
    ?>

</body>
</html>