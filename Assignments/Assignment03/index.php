<?php echo("<?xml version=\1.0\ encoding=\UTF-8\?>"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
                    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; UTF-8" />
        <title> Index </title>
    </head>

    <body>
        <form id="form0" action="login.php" method="post">
            <div style="position.absolute; top:100px; left:200px;">
                <h1 style="text-align:center; font-size:16pt;">Index Page</h1>
                
                <br />
                <br />

                <table border="0" width="350" cellpadding="2" cellspacing="2">
                    <tr>
                        <td style="text-align: right"><label for "userID">Login: </label></td>
                        <td style="text-align: left"><input type="text" name="userID" id="userID"
                            size="20" maxlength="20"></td>
                        <td style="text-align: right"><label for "passwd">Pass: </label></td>
                        <td style="text-align: left"><input type="password" name="passwd" id="passwd"
                            size="20" maxlength="20"></td>
                        <td colspan="2" style="text-align: center";><input type="submit" value="login"></td>    
                    </tr>
                </table>
            </div>    
        </form>

        <script type="text/javascript>">
        Document.getElementById("userID").focus();
        </script>

</html>    