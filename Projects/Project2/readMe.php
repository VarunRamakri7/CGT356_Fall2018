<!DOCTYPE html>
<html>

    <head>
        <title> ReadMe Page </title>
        <style type = "text/css">
            body {
                margin:0;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
                position: fixed;
                top: 0;
                width: 100%;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            li a:hover:not(.active) {
                background-color: #111;
            }

            .active {
                background-color: #4CAF50;
            }

            body {
                font-family:Arial, Helvetica, sans-serif;
                font-size:14px;
            }
            label {
                font-weight:bold;
                width:100px;
                font-size:14px;
            }
            .box {
                border:#666666 solid 1px;
            }
      </style>
    </head>

    <body>

      <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="login.php">Login</a></li>
         <li><a href="register.php">Register</a></li>
         <li><a class="active" href="readMe.php">ReadMe</a></li>
      </ul>

    <div style="padding:20px;margin-top:30px;background-color:#1abc9c;height:1500px;">

        <h1 align="center"> ReadMe Page </h1>

        <div id="para">
            <p align="left"> Things that have problems <br />
                <ul>
                    <li> Image upload does not update database<br />
                    <li> Registering does not insert data correctly <br />
                <ul>
            </p>
            <p align="left"> Extra things <br /> 
                <ul>
                    <li> Lightbox <br />
                    <li> Navigation bar through all pages <br />
                </ul>
            </p>
        </div>
    </div>
    </body>
</html>