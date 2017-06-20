<!DOCTYPE html>
<html lang="en">
<head>
    <title>Music Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/styleIndex.css">
    <link rel="stylesheet" href="public/css/animate.css">
    <link rel="stylesheet" href="public/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/songStyle.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/artists.css"> -->
    <link rel="stylesheet" href="public/vendors/bootstrap-select-1.12.2/dist/css/bootstrap-select.min.css" />
    <!-- Point to external css file -->
</head>
<body>
<div id="wrapper">
    <!--Navigation Bar section-->
    <nav class="navbar navbar-inverse" style="width: 100%;position: fixed;z-index: 2">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand glyphicon glyphicon-home" aria-hidden="true" href="index.php"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Genres <span class="caret"></span></a>
                        <ul class="dropdown-menu wow fadeInDown" data-wow-duration="0.6s" data-wow-delay="0.1s">
                            <li><a href="pages/genres/rock.php">Rock</a></li>
                            <li><a href="pages/genres/pop.php">Pop</a></li>
                            <li><a href="pages/genres/dance.php">Dance</a></li>
                            <li><a href="pages/genres/hiphop.php">Hip Hop</a></li>
                        </ul>
                    </li>
                    <li><a href="pages/song.php">Songs </a></li>
                    <li><a href="pages/albums.php">Albums </a></li>
                    <li><a href="pages/artists.php">Artists </a></li>
                    <li><a href="pages/aboutus.php">About us</a></li>
                </ul>
                <!--Search Bar section-->
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
				                <button class="btn btn-default" type="button">Go!</button>
				            </span>
                        </div>
                        <a class="btn btn-success" type="button" href="pages/index/loginPage.php">Login</a>
                    </div>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="clearfix"></div>
    <!--Div for slide show-->
    <link rel="stylesheet" href="public/css/slideShowStyle.css">
    <ul class="slideshow">
        <li><span>Image 01</span><div><h3>Welcome to<br>Music Portal</h3></div></li>
        <li><span>Image 02</span></li>
        <li><span>Image 03</span></li>
        <li><span>Image 04</span></li>
        <li><span>Image 05</span></li>
        <li><span>Image 06</span></li>
    </ul>
    <div class="container">
        <header>
            <h1 style="float: left;">&nbsp;Artists</h1>
            <a href="#" style="float: right;">View more</a>
            <br><br>
        </header>
        <div class="scrollmenu col-md-12 col-sm-12 col-xs-12" style="margin: 0px; padding: 0px;">
            <!-- <dir class="row"> -->
            <div class="blog col-md-1 col-sm-1 col-xs-1 wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/cover-1 (copy).jpeg">
                    <div class="overlay1">
                        <h2>Charlie Puth</h2>
                        <a class="info" href="data/artists (charlie).html">link here</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1 wow slideInRight" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/cover-2 (copy).jpg">
                    <div class="overlay1">
                        <h2>Thousand Foot Krutch</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1 wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/cover-3 (copy).jpg">
                    <div class="overlay1">
                        <h2>Skrillex</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1 wow slideInRight" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/cover-4 (copy).jpg">
                    <div class="overlay1">
                        <h2>The Weeknd</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1 wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/cover-5 (copy).jpg">
                    <div class="overlay1">
                        <h2>james</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1 wow slideInRight" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/cover-1 (copy).jpeg">
                    <div class="overlay1">
                        <h2>View more</h2>
                        <a class="info" href="data/artists.html">link here</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container" style="margin-top: 0">
        <header>
            <h1 style="float: left;">&nbsp;Albums</h1>
            <a href="#" style="float: right;">View more</a>
            <br><br>
        </header>
        <div class="scrollmenu col-md-12 col-sm-12 col-xs-12" style="margin: 0px; padding: 0px;">
            <!-- <dir class="row"> -->
            <div class="blog col-md-1 col-sm-1 col-xs-1 wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/cover-1 (copy).jpeg">
                    <div class="overlay1">
                        <h2>Charlie Puth</h2>
                        <a class="info" href="data/artists (charlie).html">link here</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1 wow slideInRight" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/cover-2 (copy).jpg">
                    <div class="overlay1">
                        <h2>Thousand Foot Krutch</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1 wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/cover-3 (copy).jpg">
                    <div class="overlay1">
                        <h2>Skrillex</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1 wow slideInRight" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/cover-4 (copy).jpg">
                    <div class="overlay1">
                        <h2>The Weeknd</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1 wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/cover-5 (copy).jpg">
                    <div class="overlay1">
                        <h2>james</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1 wow slideInRight" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/cover-1 (copy).jpeg">
                    <div class="overlay1">
                        <h2>View more</h2>
                        <a class="info" href="data/artists.html">link here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 0; float: left; width: 50%;">
        <header>
            <h1 style="float: left;">&nbsp;Albums</h1>
            <a href="#" style="float: right;">View more</a>
            <br><br>
        </header>
    </div>
    <div class="container" style="margin-top: 0; float: right; width: 50%;">
        <header>
            <h1 style="float: left;">&nbsp;Albums</h1>
            <a href="#" style="float: right;">View more</a>
            <br><br>
        </header>
    </div>
    <div style="height: 300px;">

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="public/vendors/jquery/jquery-3.1.1.min.js"></script>
    <script src="public/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/vendors/jquery/wow.min.js"></script>
    <script src="public/vendors/bootstrap-select-1.12.2/dist/js/bootstrap-select.js"></script>
    <script src="public/vendors/bootstrap-select-1.12.2/js/bootstrap-select.js"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>