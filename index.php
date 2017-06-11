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
    <div style="width: 100%; margin-left: auto; margin-right: auto;">
        <!--Div for slide show-->
        <div style="margin-top: 50px;">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.1s" data-interval="2000">
                        <a href="data/song.html">
                            <img src="public/img/slide/img1.jpg" alt="..." style="margin: auto;">
                        </a>
                        <div class="carousel-caption">
                            <h3>Let the world know</h3>
                        </div>
                    </div>
                    <div class="item wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.1s" data-interval="2000">
                        <a href="data/song.html">
                            <img src="public/img/slide/img2.jpg" alt="..." style="margin: auto;">
                        </a>
                        <div class="carousel-caption">
                            <h3>The End Is Where We Begin</h3>
                        </div>
                    </div>
                    <div class="item wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.1s" data-interval="2000">
                        <a href="data/song.html">
                            <img src="public/img/slide/img3.jpg" alt="..." style="margin: auto;">
                        </a>
                        <div class="carousel-caption">
                            <h3>In The End</h3>
                        </div>
                    </div>
                    <div class="item wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.1s" data-interval="2000">
                        <a href="data/song.html">
                            <img src="public/img/slide/img4.jpg" alt="..." style="margin: auto;">
                        </a>
                        <div class="carousel-caption">
                            <h3>Losing My Mind</h3>
                        </div>
                    </div>
                </div>
                <!-- Indicators -->
                <ol class="carousel-indicators" style="z-index: 1">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>

                <!-- Controls left or right -->
                <a class="left carousel-control wow slideInRight" data-wow-duration="1.5s" data-wow-delay="0.1s" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only wow slideInLeft">Previous</span>
                </a>
                <a class="right carousel-control wow slideInLeft" href="#carousel-example-generic" data-wow-duration="1.5s" data-wow-delay="0.1s" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <!--Div for artists block-->
    <div class="container">
        <h3 class="artiststext">ARTISTS</h3>
        <div class="scrollmenu col-md-9 col-sm-12 col-xs-12 wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s" style="margin: 0px; padding: 0px">
            <!-- <dir class="row"> -->
            <div class="blog col-md-1 col-sm-1 col-xs-1">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/cover-1 (copy).jpeg">
                    <div class="overlay1">
                        <h2>Charlie Puth</h2>
                        <a class="info" href="data/artists (charlie).html">link here</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/cover-2 (copy).jpg">
                    <div class="overlay1">
                        <h2>Thousand Foot Krutch</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/cover-3 (copy).jpg">
                    <div class="overlay1">
                        <h2>Skrillex</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/cover-4 (copy).jpg">
                    <div class="overlay1">
                        <h2>The Weeknd</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/cover-5 (copy).jpg">
                    <div class="overlay1">
                        <h2>james</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/more_btn.png">
                    <div class="overlay1">
                        <h2>View more</h2>
                        <a class="info" href="data/artists.html">link here</a>
                    </div>
                </div>
            </div>
            <!-- </dir> -->
        </div>
        <div class="hiden col-md-3 col-sm-5 wow slideInRight" data-wow-duration="1.5s" data-wow-delay="0.1s">
            <h3 class="artiststext" style="margin-top: 0;">BILLBOARD</h3>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#day" aria-controls="day" role="tab" data-toggle="tab">Today</a></li>
                <li role="presentation"><a href="#week" aria-controls="week" role="tab" data-toggle="tab">Week</a></li>
                <li role="presentation"><a href="#month" aria-controls="month" role="tab" data-toggle="tab">Month</a></li>
            </ul>

            <!-- Tab panes billboard -->
            <div class="tab-content wow fadeInDown" style="margin: 0px;">
                <audio src="" controls id="audioPlayer" style="width: 100%;"></audio>
                <div role="tabpanel" class="scrollmenulist tab-pane active" id="day">
                    <img src="public/img/slide/img1.jpg" style="width: 100%">
                    <ul id="playlist" style="list-style: none; padding: 0px;">
                        <li><a href="data/src/music/Nine Track Mind/13 See You Again (feat. Charlie Puth.m4a" class="list-group-item">See You Again</a></li>
                        <li><a href="data/src/music/Collage/03 Closer.m4a" class="list-group-item">Closer</a></li>
                        <li><a href="data/src/music/Nine Track Mind/01 One Call Away.m4a" class="list-group-item">One Call Away</a></li>
                        <li><a href="data/src/music/Nine Track Mind/03 Marvin Gaye (feat. Meghan Trainor.m4a" class="list-group-item">Marvin Gaye</a></li>
                        <li><a href="data/src/music/Nine Track Mind/05 We Don_t Talk Anymore (feat. Sele.m4a" class="list-group-item">We Don't Talk Anymore</a></li>
                    </ul>
                </div>
                <div role="tabpanel" class="scrollmenulist tab-pane" id="week">
                    <img src="public/img/slide/img2.jpg" style="width: 100%">
                    <ul id="playlist" style="list-style: none; padding: 0px;">
                        <li><a href="data/src/music/Nine Track Mind/13 See You Again (feat. Charlie Puth.mp3" class="list-group-item">See You Again</a></li>
                        <li><a href="data/src/music/Collage/03 Closer.mp3" class="list-group-item">Closer</a></li>
                        <li><a href="data/src/music/Nine Track Mind/01 One Call Away.m4a" class="list-group-item">One Call Away</a></li>
                        <li><a href="data/src/music/Nine Track Mind/03 Marvin Gaye (feat. Meghan Trainor.m4a" class="list-group-item">Marvin Gaye</a></li>
                        <li><a href="data/src/music/Nine Track Mind/05 We Don_t Talk Anymore (feat. Sele.m4a" class="list-group-item">We Don't Talk Anymore</a></li>
                    </ul>
                </div>
                <div role="tabpanel" class="scrollmenulist tab-pane" id="month">
                    <img src="public/img/slide/img3.jpg" style="width: 100%">
                    <ul id="playlist" style="list-style: none; padding: 0px;">
                        <li><a href="data/src/music/Nine Track Mind/13 See You Again (feat. Charlie Puth.mp3" class="list-group-item">See You Again</a></li>
                        <li><a href="data/src/music/Collage/03 Closer.mp3" class="list-group-item">Closer</a></li>
                        <li><a href="data/src/music/Nine Track Mind/01 One Call Away.m4a" class="list-group-item">One Call Away</a></li>
                        <li><a href="data/src/music/Nine Track Mind/03 Marvin Gaye (feat. Meghan Trainor.m4a" class="list-group-item">Marvin Gaye</a></li>
                        <li><a href="data/src/music/Nine Track Mind/05 We Don_t Talk Anymore (feat. Sele.m4a" class="list-group-item">We Don't Talk Anymore</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--Div for albums block-->
    <div class="container">
        <h3 class="artiststext">ALBUMS</h3>
        <div class="scrollmenu col-md-9 col-sm-12 col-xs-12 wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s" style="margin: 0px; padding: 0px">
            <div class="blog col-md-1 col-sm-1 col-xs-1">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/albums-1.jpg">
                    <div class="overlay1">
                        <h2>Back To Bedlam</h2>
                        <a class="info" href="data/artists.html">See More</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/albums-2.jpg">
                    <div class="overlay1">
                        <h2>Collage</h2>
                        <a class="info" href="#">See More</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/albums-3.jpg">
                    <div class="overlay1">
                        <h2>Bangarang</h2>
                        <a class="info" href="data/albums (bangarang).html">See More</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/albums-4.jpg">
                    <div class="overlay1">
                        <h2>Bad Meets Evil</h2>
                        <a class="info" href="#">See More</a>
                    </div>
                </div>
            </div>
            <div class="hiden blog col-md-1 col-sm-1">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/cover/albums-5.jpg">
                    <div class="overlay1">
                        <h2>Let the World Know</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="blog col-md-1 col-sm-1 col-xs-1">
                <div class="hovereffect">
                    <img class="artists img-responsive" src="public/img/more_btn.png">
                    <div class="overlay1">
                        <h2>View more</h2>
                        <a class="info" href="data/artists.html">link here</a>
                    </div>
                </div>
            </div>
        </div> <!-- end div row -->
        <div class="hiden col-md-3 col-sm-5 wow slideInRight" data-wow-duration="1.5s" data-wow-delay="0.1s">
            <h3 class="artiststext" style="margin-top: 0;">TOP ALBUMS</h3>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#aday" aria-controls="aday" role="tab" data-toggle="tab">Today</a></li>
                <li role="presentation"><a href="#aweek" aria-controls="aweek" role="tab" data-toggle="tab">Week</a></li>
                <li role="presentation"><a href="#amonth" aria-controls="amonth" role="tab" data-toggle="tab">Month</a></li>
            </ul>

            <!-- Tab panes billboard -->
            <div class="tab-content wow fadeInDown" style="margin: 0px; height: 250px;">
                <div role="tabpanel" class="scrollmenulist tab-pane active" id="aday" style="height: 250px;">
                    <ul id="playlist" style="list-style: none; padding: 0px;">
                        <li><a href="data/albums.html" class="list-group-item"><img src="data/src/music/Nine Track Mind/cover.jpeg" style="width: 50px;"> Nine Track Mind</a></li>
                        <li><a href="data/albums.html" class="list-group-item"><img src="data/src/music/Collage/Collage EP 1.jpg" style="width: 50px;"> Collage</a></li>
                        <li><a href="data/albums.html" class="list-group-item"><img src="data/src/music/Let the World Know/Folder.jpg" style="width: 50px;"> Let the World Know</a></li>
                        <li><a href="data/albums.html" class="list-group-item"><img src="data/src/music/Starboy/front.jpg" style="width: 50px;"> Starboy</a></li>
                        <li><a href="data/albums.html" class="list-group-item"><img src="data/src/music/Bad Meets Evil/Folder.jpg" style="width: 50px;"> Bad Meet Evil</a></li>
                    </ul>
                </div>
                <div role="tabpanel" class="scrollmenulist tab-pane" id="aweek" style="height: 250px;">
                    <ul id="playlist" style="list-style: none; padding: 0px;">
                        <li><a href="data/albums.html" class="list-group-item"><img src="data/src/music/Nine Track Mind/cover.jpeg" style="width: 50px;"> Nine Track Mind</a></li>
                        <li><a href="data/albums.html" class="list-group-item"><img src="data/src/music/Collage/Collage EP 1.jpg" style="width: 50px;"> Collage</a></li>
                        <li><a href="data/albums.html" class="list-group-item"><img src="data/src/music/Let the World Know/Folder.jpg" style="width: 50px;"> Let the World Know</a></li>
                        <li><a href="data/albums.html" class="list-group-item"><img src="data/src/music/Starboy/front.jpg" style="width: 50px;"> Starboy</a></li>
                        <li><a href="data/albums.html" class="list-group-item"><img src="data/src/music/Bad Meets Evil/Folder.jpg" style="width: 50px;"> Bad Meet Evil</a></li>
                    </ul>
                </div>
                <div role="tabpanel" class="scrollmenulist tab-pane" id="amonth" style="height: 250px;">
                    <ul id="playlist" style="list-style: none; padding: 0px;">
                        <li><a href="data/albums.html" class="list-group-item"><img src="data/src/music/Nine Track Mind/cover.jpeg" style="width: 50px;"> Nine Track Mind</a></li>
                        <li><a href="data/albums.html" class="list-group-item"><img src="data/src/music/Collage/Collage EP 1.jpg" style="width: 50px;"> Collage</a></li>
                        <li><a href="data/albums.html" class="list-group-item"><img src="data/src/music/Let the World Know/Folder.jpg" style="width: 50px;"> Let the World Know</a></li>
                        <li><a href="data/albums.html" class="list-group-item"><img src="data/src/music/Starboy/front.jpg" style="width: 50px;"> Starboy</a></li>
                        <li><a href="data/albums.html" class="list-group-item"><img src="data/src/music/Bad Meets Evil/Folder.jpg" style="width: 50px;"> Bad Meet Evil</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <!-- <h3 class="artiststext">SONGS</h3> -->
        <div class="scrollmenu col-md-12 col-sm-12 col-xs-12" style="margin: 0px; padding: 0px">
            <!-- Most popular -->
            <div class="col-md-6 col-sm-12 col-xs-12 wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="panel panel-mostPopular" style="margin-top: 20px;">
                    <div class="panel-heading"><h2>Most popular</h2></div>
                    <div class="panel-body">
                        <div class="grow" style="border-top:1px solid #000;">
                            <div id="status1" class="status">►</div>
                            <div class="left"><br><p>See You Again</p></div>
                            <div class="right"><br><p>03:50</p></div>
                            <br><br>
                            <button type="button" class="btn btn-info" onclick="changeSource('data/src/music/Nine Track Mind/13 See You Again (feat. Charlie Puth', 'status1')">Play</button>
                            <br>
                            <div class="left"><br><p>Artist: Charlie Puth</p></div>
                            <div class="right"><br><p>Release year: 2016</p></div>
                            <p>Album: Nine Track Mind</p>
                        </div>

                        <div class="grow" style="border-top:1px solid #000; clear: left;">
                            <div id="status2" class="status">►</div>
                            <div class="left"><br><p>Closer</p></div>
                            <div class="right"><br><p>04:05</p></div>
                            <br><br>
                            <button type="button" class="btn btn-info" onclick="changeSource('data/src/music/Collage/03 Closer', 'status2')">Play</button>
                            <br>
                            <div class="left"><br><p>Artist: The Chainsmokers</p></div>
                            <div class="right"><br><p>Release year: 2016</p></div>
                            <p>Album: Collage EP</p>
                        </div>

                        <div class="grow" style="border-top:1px solid #000; clear: left;">
                            <div id="status3" class="status">►</div>
                            <div class="left"><br><p>Setting Fires</p></div>
                            <div class="right"><br><p>04:07</p></div>
                            <br><br>
                            <button type="button" class="btn btn-info" onclick="changeSource('data/src/music/Nine Track Mind/13 See You Again (feat. Charlie Puth', 'status3')">Play</button>
                            <br>
                            <div class="left"><br><p>Artist: The Chainsmokers</p></div>
                            <div class="right"><br><p>Release year: 2016</p></div>
                            <p>Album: Collage EP</p>
                        </div>

                        <div class="grow" style="border-top:1px solid #000; clear: left;">
                            <div id="status4" class="status">►</div>
                            <div class="left"><br><p>Party Monster</p></div>
                            <div class="right"><br><p>04:07</p></div>
                            <br><br>
                            <button type="button" class="btn btn-info" onclick="changeSource('data/src/music/Nine Track Mind/13 See You Again (feat. Charlie Puth', 'status4')">Play</button>
                            <br>
                            <div class="left"><br><p>Artist: The Weekend</p></div>
                            <div class="right"><br><p>Release year: 2016</p></div>
                            <p>Album: Starboy</p>
                        </div>

                        <div class="grow" style="border-top:1px solid #000; clear: left;">
                            <div id="status5" class="status">►</div>
                            <div class="left"><br><p>Losing My Mind</p></div>
                            <div class="right"><br><p>03:32</p></div>
                            <br><br>
                            <button type="button" class="btn btn-info" onclick="changeSource('data/src/music/Nine Track Mind/13 See You Again (feat. Charlie Puth', 'status5')">Play</button>
                            <br>
                            <div class="left"><br><p>Artist: Charlie Puth</p></div>
                            <div class="right"><br><p>Release year: 2016</p></div>
                            <p>Album: Nine Track Mind</p>
                        </div>

                        <div class="grow" style="border-top:1px solid #000; clear: left;">
                            <div id="status6" class="status">►</div>
                            <div class="left"><br><p>The End Is Where We Begin</p></div>
                            <div class="right"><br><p>03:44</p></div>
                            <br><br>
                            <button type="button" class="btn btn-info" onclick="changeSource('data/src/music/Nine Track Mind/13 See You Again (feat. Charlie Puth', 'status6')">Play</button>
                            <br>
                            <div class="left"><br><p>Artist: Thousand Foot Krutch</p></div>
                            <div class="right"><br><p>Release year: 2012</p></div>
                            <p>Album: The End Is Where We Begin</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New song panel -->
            <div class="col-md-6 col-sm-12 col-xs-12 wow slideInRight" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="panel panel-newSong" style="margin-top: 20px;">
                    <div class="panel-heading"><h2>New song</h2></div>
                    <div class="panel-body">
                        <div class="grow" style="border-top:1px solid #000;">
                            <div id="status7" class="status">►</div>
                            <div class="left"><br><p>Starboy</p></div>
                            <div class="right"><br><p>03:54</p></div>
                            <br><br>
                            <button type="button" class="btn btn-info" onclick="changeSource('data/src/music/Nine Track Mind/13 See You Again (feat. Charlie Puth', 'status7')">Play</button>
                            <br>
                            <div class="left"><br><p>Artist: The Weeknd</p></div>
                            <div class="right"><br><p>Release year: 2016</p></div>
                            <p>Album: Starboy</p>
                        </div>

                        <div class="grow" style="border-top:1px solid #000; clear: left;">
                            <div id="status8" class="status">►</div>
                            <div class="left"><br><p>We Don't Talk Anymore</p></div>
                            <div class="right"><br><p>03:37</p></div>
                            <br><br>
                            <button type="button" class="btn btn-info" onclick="changeSource('data/src/music/Nine Track Mind/13 See You Again (feat. Charlie Puth', 'status8')">Play</button>
                            <br>
                            <div class="left"><br><p>Artist: Charlie Puth</p></div>
                            <div class="right"><br><p>Release year: 2016</p></div>
                            <p>Album: Nine Track Mind</p>
                        </div>

                        <div class="grow" style="border-top:1px solid #000; clear: left;">
                            <div id="status9" class="status">►</div>
                            <div class="left"><br><p>Suffer</p></div>
                            <div class="right"><br><p>03:30</p></div>
                            <br><br>
                            <button type="button" class="btn btn-info" onclick="changeSource('data/src/music/Nine Track Mind/13 See You Again (feat. Charlie Puth', 'status9')">Play</button>
                            <br>
                            <div class="left"><br><p>Artist: Charlie Puth</p></div>
                            <div class="right"><br><p>Release year: 2016</p></div>
                            <p>Album: Nine Track Mind</p>
                        </div>

                        <div class="grow" style="border-top:1px solid #000; clear: left;">
                            <div id="status10" class="status">►</div>
                            <div class="left"><br><p>Then There's You</p></div>
                            <div class="right"><br><p>03:34</p></div>
                            <br><br>
                            <button type="button" class="btn btn-info" onclick="changeSource('data/src/music/Nine Track Mind/13 See You Again (feat. Charlie Puth', 'status10')">Play</button>
                            <br>
                            <div class="left"><br><p>Artist: Charlie Puth</p></div>
                            <div class="right"><br><p>Release year: 2016</p></div>
                            <p>Album: Nine Track Mind</p>
                        </div>

                        <div class="grow" style="border-top:1px solid #000;">
                            <div id="status11" class="status">►</div>
                            <div class="left"><br><p>Ordinary Life</p></div>
                            <div class="right"><br><p>03:54</p></div>
                            <br><br>
                            <button type="button" class="btn btn-info" onclick="changeSource('data/src/music/Nine Track Mind/13 See You Again (feat. Charlie Puth', 'status11')">Play</button>
                            <br>
                            <div class="left"><br><p>Artist: The Weeknd</p></div>
                            <div class="right"><br><p>Release year: 2016</p></div>
                            <p>Album: Starboy</p>
                        </div>

                        <div class="grow" style="border-top:1px solid #000;">
                            <div id="status12" class="status">►</div>
                            <div class="left"><br><p>I Feel It Coming</p></div>
                            <div class="right"><br><p>04:33</p></div>
                            <br><br>
                            <button type="button" class="btn btn-info" onclick="changeSource('data/src/music/Nine Track Mind/13 See You Again (feat. Charlie Puth', 'status12')">Play</button>
                            <br>
                            <div class="left"><br><p>Artist: The Weeknd</p></div>
                            <div class="right"><br><p>Release year: 2016</p></div>
                            <p>Album: Starboy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <p style="text-align: center;">
            <br><br>
            Copyright @ music-portal.com All right reserved
            <br>
            Disclaimer: This site does not store any files on its server. All contents are provide by non-affiliated third parties.
        </p>
    </div><!-- #footer -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="public/vendors/jquery/jquery-3.1.1.min.js"></script>
<script src="public/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="public/js/script.js"></script>
<script src="public/vendors/jquery/wow.min.js"></script>
<script>
    audioPlayer();
</script>
<script>
    new WOW().init();
</script>
<script>
    document.getElementById('playerFrame').style.visibility = "hidden";

    function changeSource(location, statusID){
        var audio = document.getElementById('player');
        var str1 = "./";
        var str2 = ".m4a";
        var res = str1.concat(location);
        res = res.concat(str2);
        audio.src = res;
        audio.play();
        document.getElementById('playerFrame').style.visibility = "visible";

        var elems = document.getElementsByClassName('status');
        for(var i = 0; i < elems.length; i++) {
            elems[i].style.display = 'none';
        }
        document.getElementById(statusID).style.display = 'inline';
    }
</script>

</body>
</html>
