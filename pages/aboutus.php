<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Music Portal</title>
    <script src="../public/js/prefixfree.min.js"></script>
    <link rel="stylesheet" href="../public/vendors/bootstrap/css/bootstrap.min.css">
    <style>
        body {
            background: url("../public/img/aboutus-background.jpg");
            text-align: center;
            background: #f1f1f1;
        }

        .aboutUs {
            list-style: none;
            margin: 0;
            padding: 0;
            width: 400px;
            height: 400px;
            display: inline-block;
            position: relative;
        }

        .aboutUs li {
            position: absolute;
            top: 0;
            left: 0;
            animation: coverflow 5s ease both infinite;
        }
        .aboutUs li:nth-child(2) {
            animation-delay: 2s;
        }
        .aboutUs li:nth-child(3) {
            animation-delay: 3s;
        }
        .aboutUs li:nth-child(4) {
            animation-delay: 4s;
        }

        .aboutUs img {
            width: 400px;
            border-radius: 50%;
            border: 2px solid white;
        }

        @keyframes coverflow {
            0%, 10% {
                opacity: 1;
                transform: none;
                z-index: 10;
            }
            25%, 35% {
                opacity: 0.2;
                transform: translate3d(-170px, 0, 0) scale(0.6);
            }
            50% {
                opacity: 0;
                transform: translate3d(-190px, 0, 0) scale(0.6);
            }
            60% {
                opacity: 0;
                transform: translate3d(190px, 0, 0) scale(0.6);
            }
            75%, 85% {
                opacity: 0.2;
                transform: translate3d(170px, 0, 0) scale(0.6);
            }
        }

    </style>
<!--    <link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">-->
</head>

<body>
<h1>About Us Page</h1>
<ul class="aboutUs">
    <li><a href="#"><img src="../public/img/aboutus/nhean.jpg"></a><h2 style="background-color: lightgrey">SAMAN Tipputhinhean</h2></li>
    <li><a href="#"><img src="../public/img/aboutus/nadin.jpg"></a><h2 style="background-color: lightgrey">POUTH Nadin</h2></li>
    <li><a href="#"><img src="../public/img/aboutus/vanna.jpg"></a><h2 style="background-color: lightgrey">POUNG Sovanna</h2></li>
    <li><a href="#"><img src="../public/img/aboutus/sovath.jpg"></a><h2 style="background-color: lightgrey">PHATH Sovath</h2></li>
</ul>
</body>
</html>
