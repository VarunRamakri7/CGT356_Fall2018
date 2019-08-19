<?php

$userID=$_POST["userID"];
$passwd=$_POST["passwd"];

// Example 1 - Only this is executed

if($userID == "page 1" && $passwd == "alpha") header("Location:page1.php");
    else if($userID == "page 2" && $passwd == "beta") header("Location:page2.php");
        else if($userID == "page 3" && $passwd == "gamma") header("Location:page3.php");
            else header("Location:error.php");


// Nothing below this is exectued

// Example 2

if($userID == "page 1" && $passwd == "alpha")
{
    header("Location:page1.php");
}
    else if($userID == "page 2" && $passwd == "beta")
    {
        header("Location:page2.php");
    }
        else if($userID == "page 3" && $passwd == "gamma")
        {
            header("Location:page3.php");
        }
            else
            {
                header("Location:error.php");
            }

// Example 3

if($userID == "page 1")
{
    if($passwd == "alpha")
    {
        header("Location:page1.php");
    }
        else
        {
            header("Location:error.php");
        }
}
    else if($userID == "page 2")
    {
        if($passwd == "beta")
        {
            header("Location:page2.php");
        }
            else
            {
                header("Location:error.php");
            }
    }
        else if($userID == "page 3")
        {
            if($passwd == "gamma")
            {
                header("Location:page3.php");
            }
                else
                {
                    header("Location:error.php");
                }
        }
            else
            {
                header("Location:error.php");
            }
?>