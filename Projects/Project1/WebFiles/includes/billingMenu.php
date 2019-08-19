<!DOCTYPE html>
<html>
    <head>
    <style>
            a {
                text-decoration:none;
                color:#FFF;
            }
            .button {
                width:calc(20vw + 6px);
                height:calc(8vw + 6px);
                background-image: linear-gradient(90deg, #00C0FF 0%, #FFCF00 49%, #FC4F4F 80%, #00C0FF 100%);
                border-radius:5px;
                display:flex;
                align-items:center;
                justify-content:center;
                text-transform:uppercase;
                font-size:3vw;
                font-weight:bold;
            }
            .button:after {
                content:attr(alt);
                width:20vw;
                height:8vw;
                background-color:#191919;
                display:flex;
                align-items:center;
                justify-content:center;
            }
            .button:hover {
                animation:slidebg 2s linear infinite;
            }

            @keyframes slidebg {
                to {
                    background-position:20vw;
                }
            }
        </style>
    </head>
    <body bgcolor = "#FF9999">  
        <h1 align="center"> Billing Menu </h1>
            <p style="text-align:center;">
                <div align="center">
                    <br /><a href="../selectBilling.php" class="button"><span>Select</span></a>
                    <br /><a href="../insertBilling.php" class="button"><span>Insert</span></a>
                    <br /><a href="../updateBilling.php" class="button"><span>Update</span></a>
                    <br /><a href="../deleteBilling.php" class="button"><span>Delete</span></a>
                </div>
            </p><br /> <br />
        <h2 align="right"><a href = "logout.php">Logout</a></h2>
    </body>
</html>
