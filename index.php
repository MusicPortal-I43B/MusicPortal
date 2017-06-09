<!DOCTYPE html>
<html lang="en">
<head>
    <title>Music Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/animate.css">
    <link rel="stylesheet" href="public/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/songStyle.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/artists.css"> -->
    <!-- Point to external css file -->
</head>

<body>
<div id="wrapper">
    <!--Navigation Bar section-->
    <nav class="navbar navbar-default" style="width: 100%;position: fixed;z-index: 2">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand glyphicon glyphicon-home" aria-hidden="true" href="index.html"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Genres <span class="caret"></span></a>
                        <ul class="dropdown-menu wow fadeInDown" data-wow-duration="0.6s" data-wow-delay="0.1s">
                            <li><a href="data/genres/rock.html">Rock</a></li>
                            <li><a href="data/genres/pop.html">Pop</a></li>
                            <li><a href="data/genres/dance.html">Dance</a></li>
                            <li><a href="data/genres/hiphop.html">Hip Hop</a></li>
                            <!-- <li role="separator" class="divider"></li> -->
                            <!-- <li><a href="./genres/other.html">Other</a></li> -->
                        </ul>
                    </li>
                    <li><a href="data/song.html">Songs <span class="sr-only">(current)</span></a></li>
                    <li><a href="data/albums.html">Albums </a></li>
                    <li><a href="data/artists.html">Artists </a></li>
                    <li>
                        <!-- Link trigger modal -->
                        <a href="#" data-toggle="modal" data-target=".aboutus">About us</a>
                    </li>
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
                    </div>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- Div for about us -->
    <div class="modal fade aboutus" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container" style="padding: 10px; margin-left: 4%;">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog">
                        <div class="hovereffect">
                            <img class="artists img-responsive" src="public/img/aboutus/nhean.jpg">
                            <div class="overlay1">
                                <h2>Sam An Tipputhinhean</h2>
                                <a class="info" href="https://www.facebook.com/tipputhynhean">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog">
                        <div class="hovereffect">
                            <img class="artists img-responsive" src="public/img/aboutus/nadin.jpg">
                            <div class="overlay1">
                                <h2>POUTH Nadin</h2>
                                <a class="info" href="https://www.facebook.com/nadin.puth">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog">
                        <div class="hovereffect">
                            <img class="artists img-responsive" src="public/img/aboutus/sovath.jpg">
                            <div class="overlay1">
                                <h2>Phat Sovath</h2>
                                <a class="info" href="https://www.facebook.com/phath.sovath">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog">
                        <div class="hovereffect">
                            <img class="artists img-responsive" src="public/img/aboutus/vanna.jpg">
                            <div class="overlay1">
                                <h2>POUNG Sovanna</h2>
                                <a class="info" href="https://www.facebook.com/vanna.1996">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div style="width: 100%; margin-left: auto; margin-right: auto;">
        <!--Div for slide show-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="public/vendors/jquery/jquery-3.1.1.min.js"></script>
        <script src="public/vendors/bootstrap/js/bootstrap.min.js"></script>
        <script src="public/vendors/jquery/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
</body>
</html>