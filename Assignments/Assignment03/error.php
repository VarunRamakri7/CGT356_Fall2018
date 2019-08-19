<?php
echo("<?xml version=\1.0\ encoding=\UTF-8\?>"."\n"); 
echo("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" 
                    \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">"."\n");
echo("<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">"."\n");

    echo("<head>"."\n");
        echo("<meta http-equiv=\"Content-Type\" content=\"text/html; UTF-8\" />"."\n");
        echo("<title> Error </title>"."\n");
    echo("</head>"."\n");

echo("<body>"."\n");

    echo("<h1>Oops! Error 401. You are not authorized</h1>"."\n");

    echo("<div id = \"Link\">");
        echo("<p>To go back to the login page click <a href = \"index.php\">here</a></p>");
    echo("</div>");

echo("</body>"."\n");
echo("</html>"."\n");

?>