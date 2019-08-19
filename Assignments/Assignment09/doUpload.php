<?php
session_start();

// Make sure page doesn't time out in case of large file
set_time_limit(300);

// Make sure submit button was pressed
if($_POST["uploadFile"] != "")
{
    // Get file extension
    $fileExt = strrchr($_FILES['userfile']['name'], ".");

    // If file extension is not in this list, we don't allow upload
    if(($fileExt != ".jpg") && ($fileExt != ".png") && ($fileExt != ".gif"))
    {
        // Set the session message in case of bad file type
        $_SESSION["badFileType"] = "Cannot upload file of type ".$fileExt;
    }
    else
    {
        // Get the filename
        $filename = $_FILES['userfile']['name'];

        // Make sure file is uploaded (initially uploads to temp)
        if (!is_upload_file($_FILES['userfile']['tmp_name']))
        {
            echo("Problem: Possible file upload attack");
            exit;
        }

        // Get count from database (Hard coded for now)
        $counter = 24;

        // Name the file (This will include category)
        $upfile = "upload/". $_POST["category"].$counter.$fileExt;

        // Copy file into location on server
        if(!copy($_FILES['userfile']['tmp_name'], $upfile))
        {
            echo("Problem: Could not move file into directory");
            exit;
        }

        // Set our successful message
        $_SESSION["badFileType"] = "File upload successful";
    }
}
else
{
    $_SESSION["badFileType"]="";
}

// Redirecr back to upload page
header("Location:upload1.php");
?>