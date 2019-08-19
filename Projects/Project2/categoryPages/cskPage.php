<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head> 
    <link href="lightbox2-master/dist/js/lightbox-plus-jquery.js" rel="stylesheet">
    <style>
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

        div.gallery {
            border: 1px solid #ccc;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 0 6px;
            float: left;
            width: 24.99999%;
        }

        @media only screen and (max-width: 700px) {
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px) {
            .responsive {
                width: 100%;
            }
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>
<body>

    <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="../login.php">Login</a></li>
        <li><a href="../register.php">Register</a></li>
        <li><a href="../readMe.php">ReadMe</a></li>
    </ul>

    <div style="padding:20px;margin-top:30px;background-color:#1abc9c;height:1500px;">

        <h2>CSK Gallery</h2>

            <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="../images/cskImages/csk1.jpg" data-lightbox="csk1">
                <img src="../images/cskImages/csk1.jpg" alt="csk1" width="600" height="400">
                </a>
            </div>
            </div>

            <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="../images/cskImages/csk2.jpg" data-lightbox="csk2">
                <img src="../images/cskImages/csk2.jpg" alt="csk2" width="600" height="400">
                </a>
            </div>
            </div>

            <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="../images/cskImages/csk3.jpg" data-lightbox="csk3">
                <img src="../images/cskImages/csk3.jpg" alt="csk3" width="600" height="400">
                </a>
            </div>
            </div>

            <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="../images/cskImages/csk4.jpg" data-lightbox="csk4">
                <img src="../images/cskImages/csk4.jpg" alt="csk4" width="600" height="400">
                </a>
            </div>
            </div>

            <div class="clearfix"></div>
    </div>

<script src="lightbox2-master/dist/js/lightbox-plus-jquery.js"></script>
</body>
</html>
