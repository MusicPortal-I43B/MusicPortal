<?php
session_start();
?>
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
</head>
<body style="max-width: 100%; height: 110%; overflow-x: hidden;">
<div id="wrapper">
    <div id="mySidenav" class="sidenav">
        <a href="#" id="home">Home</a>
        <a href="#" id="genres" onclick="openNav()">Genres</a>
        <a href="pages/artistPage.php" id="artists">Artists</a>
        <a href="pages/albumPage.php" id="albums">Albums</a>
        <a href="pages/aboutus.php" id="about">About</a>
    </div>
    <div id="logInnav" class="sidenav">
        <?php
        if(isset($_SESSION['username']) && $_SESSION['username'] == 'admin'){
            echo "<a href=\"pages/index/loginPage.php\" id=\"login\">Goto Admin Page</a>";
            echo "<a href=\"pages/index/Logout.php\" id=\"logout\">Log Out</a>";
            echo "<a id=\"addSong\" data-toggle=\"modal\" data-target=\"#addNewSong\" style=\"cursor: pointer;\">Add Song</a>";
        }else if(isset($_SESSION['username']) && $_SESSION['username'] != 'admin'){
            echo "<a href=\"pages/index/Logout.php\" id=\"logout\">Log Out</a>";
        }else{
            echo "<a href=\"pages/index/loginPage.php\" id=\"login\">Login</a>
                  <a href=\"pages/index/signUp.php\" id=\"signup\">Sign up</a>";
        }
        ?>
    </div>
    <div class="clearfix"></div>

    <!--  side for genres  -->
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="#">Pop</a>
            <a href="#">Dance</a>
            <a href="#">Hip Hip</a>
            <a href="#">Rock</a>
        </div>
    </div>
    <div style="width: 100%; margin-left: auto; margin-right: auto;">
        <!--Div for slide show-->
        <div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.1s" data-interval="2000" style="width: 100%; height: 100%">
                        <a href="data/song.html">
                            <img src="public/img/slide/img1.jpg" alt="..." style="margin: auto; width: 100%;">
                        </a>
                        <div class="carousel-caption">
                            <h3>Let the world know</h3>
                        </div>
                    </div>
                    <div class="item wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.1s" data-interval="2000">
                        <a href="data/song.html">
                            <img src="public/img/slide/img2.jpg" alt="..." style="margin: auto; width: 100%;">
                        </a>
                        <div class="carousel-caption">
                            <h3>The End Is Where We Begin</h3>
                        </div>
                    </div>
                    <div class="item wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.1s" data-interval="2000">
                        <a href="data/song.html">
                            <img src="public/img/slide/img3.jpg" alt="..." style="margin: auto; width: 100%;">
                        </a>
                        <div class="carousel-caption">
                            <h3>In The End</h3>
                        </div>
                    </div>
                    <div class="item wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.1s" data-interval="2000">
                        <a href="data/song.html">
                            <img src="public/img/slide/img4.jpg" alt="..." style="margin: auto; width: 100%;">
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
                <a class="left carousel-control wow slideInRight" data-wow-duration="1.5s" data-wow-delay="0.1s" href="#carousel-example-generic" role="button" data-slide="prev" style="background: none;">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control wow slideInLeft" href="#carousel-example-generic" data-wow-duration="1.5s" data-wow-delay="0.1s" role="button" data-slide="next" style="background: none;">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!--Div for artists block-->
    <div class="col-md-offset-1 container">
        <h3 class="artiststext">ARTISTS</h3>
            <?php
            require_once ('config/dbconfig.php');
            $sqlTest = "SELECT * FROM table_song GROUP BY song_artist ORDER BY song_artist DESC";
            $result = $conn->query($sqlTest);
            $i = 0;
            $song_artist_name = array();
            echo "<div class=\"scrollmenu col-md-9 col-sm-12 col-xs-12 wow slideInLeft\" data-wow-duration=\"1.5s\" data-wow-delay=\"0.1s\" style=\"margin: 0; padding: 0;\">";
            while ($row = $result->fetch_object()) {
                $song_artist_name[$i] = $row->song_artist;
                $i++;
                echo "<form action=\"pages/fetch.php\" method=\"post\">";
                echo "<div class=\"blog col-md-1 col-sm-1 col-xs-1\" style='float: left;'>
                                  <div class=\"hovereffect\">";
                                  echo "<img class=\"artists img-responsive\" src=\"$row->song_artist_img_directory\">
                                        <div class=\"overlay1\">
                                            <h2>$row->song_artist</h2>
                                            <input type='text' data-id3='$row->song_artist' value='$row->song_artist' id=\"album_name\" hidden>
                                            <a class=\"info\" type='submit' name='submit' data-toggle=\"modal\" data-target=\"#artist$row->song_id\" data-whatever=\"@mdo\" id=\"new_note\">
                                                View...
                                            </a>
                                        </div>";
                            echo "</div>
                           </div>";
                echo "</form>";
                if($i >= 8){
                    break;
                }
            }
            echo "</div>";
//            $song_query = "SELECT * FROM table_song ORDER BY song_name WHERE song_artist LIKE '".$row->song_artist."'";
            $result1 = $conn->query($sqlTest);
            $i = 0;
            while ($row = $result1->fetch_object()){
                $i++;
                echo "<div class=\"col-sm-12 modal fade\" id=\"artist$row->song_id\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"noteLabel\">       
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <div style='float: left;'><img src='$row->song_artist_img_directory' alt='' style='width: 100px;'></div>
                                    <div style='float: left;'>
                                        <h4 class=\"modal-title\" id=\"noteLabel\">&nbsp;$row->song_artist</h4>
                                        <h5>&nbsp;Release: $row->song_release_year</h5>
                                    </div>
                                </div>
                                <div class=\"modal-body\">";
                                echo "<div class=\"list-group\">";
                                /*$song_query = "SELECT * FROM table_song ORDER BY song_name WHERE song_artist LIKE '".$row->song_artist."'";
                                $result2 = $conn->query($song_query);
                                while ($song_row = $result2->fetch_object()) {
                                    echo "<a href=\"$song_row->song_song_directory\" class=\"list-group-item\">
                                            <span class='left'>$song_row->song_name</span>
                                            <span class='right'>03:53</span>
                                        </a>";
                                }*/
                                echo "<a href=\"$row->song_song_directory\" class=\"list-group-item\">
                                            <span class='left'>$row->song_name</span>
                                            <span class='right'>03:53</span>
                                        </a>";
                                echo "</div>";
                                echo "</div>
                            </div>
                        </div>
                    </div>";
                if($i >= 8){
                    break;
                }
            }
            ?>
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
                        <?php
                        require_once ('config/dbconfig.php');
                        $sqlTest = "select * from table_song where song_rating >= 7 LIMIT 30";
                        $result = $conn->query($sqlTest);
                        while ($row = $result->fetch_object()){
                            echo "<li><a href=\"$row->song_song_directory\" class=\"list-group-item\">$row->song_name</a></li>";
                        }
                        ?>
                    </ul>
                </div>
                <div role="tabpanel" class="scrollmenulist tab-pane" id="week">
                    <img src="public/img/slide/img2.jpg" style="width: 100%">
                    <ul id="playlist" style="list-style: none; padding: 0px;">
                        <?php
                        require_once ('config/dbconfig.php');
                        $sqlTest = "select * from table_song where song_rating >= 7 LIMIT 30";
                        $result = $conn->query($sqlTest);
                        while ($row = $result->fetch_object()){
                            echo "<li><a href=\"$row->song_song_directory\" class=\"list-group-item\">$row->song_name</a></li>";
                        }
                        ?>
                    </ul>
                </div>
                <div role="tabpanel" class="scrollmenulist tab-pane" id="month">
                    <img src="public/img/slide/img3.jpg" style="width: 100%">
                    <ul id="playlist" style="list-style: none; padding: 0px;">
                        <?php
                        require_once ('config/dbconfig.php');
                        $sqlTest = "select * from table_song where song_rating >= 7 LIMIT 30";
                        $result = $conn->query($sqlTest);
                        while ($row = $result->fetch_object()){
                            echo "<li><a href=\"$row->song_song_directory\" class=\"list-group-item\">$row->song_name</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--Div for albums block-->
    <div class="col-md-offset-1 container">
        <h3 class="artiststext">ALBUMS</h3>
                <?php
                require_once ('config/dbconfig.php');
                $sqlTest = "select * from table_song where song_rating >= 7 order by song_rating DESC LIMIT 8";
                $result = $conn->query($sqlTest);
                $id = '';
                echo "<div class=\"scrollmenu col-md-9 col-sm-12 col-xs-12 wow slideInLeft\" data-wow-duration=\"1.5s\" data-wow-delay=\"0.1s\" style=\"margin: 0px; padding: 0px;\">";
                while ($row = $result->fetch_object()) {
                    echo "<form action=\"pages/fetch.php\" method=\"post\">";
                        echo "<div class=\"blog col-md-1 col-sm-1 col-xs-1\" style='float: left;'>
                                  <div class=\"hovereffect\">";
                                echo "<img class=\"artists img-responsive\" src=\"$row->song_album_img_directory\">
                                        <div class=\"overlay1\">
                                            <h2>$row->song_album</h2>
                                            <input type='text' data-id3='$row->song_album' value='$row->song_album' id=\"album_name\" hidden>
                                            <a class=\"info\" type='submit' name='submit' data-toggle=\"modal\" data-target=\"#album$row->song_id\" data-whatever=\"@mdo\" id=\"new_note\">
                                                View...
                                            </a>
                                        </div>";
                        echo "</div>
                              </div>";
                    echo "</form>";
                }
                echo "</div>";
                $result1 = $conn->query($sqlTest);
                while ($row = $result1->fetch_object()){
                        echo "<div class=\"col-sm-12 modal fade\" id=\"album$row->song_id\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"noteLabel\">       
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <div style='float: left;'><img src='$row->song_album_img_directory' alt='' style='width: 100px;'></div>
                                    <div style='float: left;'>
                                        <h4 class=\"modal-title\" id=\"noteLabel\">&nbsp;$row->song_album</h4>
                                        <h5>&nbsp;Release: $row->song_album_release_date</h5>
                                    </div>
                                </div>
                                <div class=\"modal-body\">";
                                    $sqlSong = "select * from table_song where song_album = ".$row->song_album." order by song_name";
                                    echo "<div class=\"list-group\">";
                    /*$songRes = $conn->query($sqlSong);
                    while($song = $songRes->fetch_object()){*/
                                        echo "<a href=\"$row->song_song_directory\" class=\"list-group-item\">
                                            <!--<span class='left'>►</span>-->
                                            <span class='left'>$row->song_name</span>
                                            <span class='right'>03:53</span>
                                         </a>";
                                    //}
                                    echo "</div>";
                                echo "</div><!--
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                </div>-->
                            </div>
                        </div>
                    </div>";
                }
            ?>
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
                        <?php
                        require_once ('config/dbconfig.php');
                        $sqlTest = "select * from table_song where song_rating >= 7 order by song_rating DESC LIMIT 8";
                        $result = $conn->query($sqlTest);
                        while ($row = $result->fetch_object()){
                            echo "<li><a class=\"list-group-item\" data-toggle=\"modal\" data-target=\"#note$row->song_id\" data-whatever=\"@mdo\" id=\"new_note\">
                                        <img src=\"$row->song_album_img_directory\" style=\"width: 50px;\"> $row->song_album
                                        </a>
                                  </li>";
                        }
                        ?>
                    </ul>
                </div>
                <div role="tabpanel" class="scrollmenulist tab-pane" id="aweek" style="height: 250px;">
                    <ul id="playlist" style="list-style: none; padding: 0px;">
                        <?php
                        require_once ('config/dbconfig.php');
                        $sqlTest = "select * from table_song where song_rating >= 7 order by song_rating DESC LIMIT 8";
                        $result = $conn->query($sqlTest);
                        while ($row = $result->fetch_object()){
                            echo "<li><a href=\"$row->song_song_directory\" class=\"list-group-item\">
                                        <img src=\"$row->song_album_img_directory\" style=\"width: 50px;\"> $row->song_album
                                        </a>
                                  </li>";
                        }
                        ?>
                    </ul>
                </div>
                <div role="tabpanel" class="scrollmenulist tab-pane" id="amonth" style="height: 250px;">
                    <ul id="playlist" style="list-style: none; padding: 0px;">
                        <?php
                        require_once ('config/dbconfig.php');
                        $sqlTest = "select * from table_song where song_rating >= 7 order by song_rating DESC LIMIT 8";
                        $result = $conn->query($sqlTest);
                        while ($row = $result->fetch_object()){
                            echo "<li><a href=\"$row->song_song_directory\" class=\"list-group-item\">
                                        <img src=\"$row->song_album_img_directory\" style=\"width: 50px;\"> $row->song_album
                                        </a>
                                  </li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-offset-1 container">
         <h3 class="artiststext">SONGS</h3>
        <div class="col-md-12 col-sm-12 col-xs-12" style="margin: 0px; padding: 0px">
            <!-- Most popular -->
            <div class="col-md-6 col-sm-12 col-xs-12 wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="panel panel-mostPopular" style="margin-top: 20px;">
                    <div class="panel-heading"><h2>Most popular</h2></div>
                    <div class="panel-body">
                        <?php
                        require_once ('config/dbconfig.php');
                        $sqlTest = "select * from table_song where song_rating >= 7 LIMIT 25";
                        $result = $conn->query($sqlTest);
                        while ($row = $result->fetch_object()){
                            echo "<div class=\"grow\" style=\"border-top:1px solid #000;\">
                                    <div id=\"status1\" class=\"status\">►</div>
                                    <div class=\"left\"><br><p>$row->song_name</p></div>
                                    <div class=\"right\"><br><p>03:53</p></div>
                                    <br><br>
                                    <button type=\"button\" class=\"btn btn-info\" onclick=\"changeSource('$row->song_song_directory', 'status1')\">Play</button>
                                    <br>
                                    <div class=\"left\"><br><p>Artist: $row->song_artist</p></div>
                                    <div class=\"right\"><br><p>Release year: $row->song_release_year</p></div>
                                    <p>Album: $row->song_album</p>
                                </div>";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <!-- New song panel -->
            <div class="col-md-6 col-sm-12 col-xs-12 wow slideInRight" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="panel panel-newSong" style="margin-top: 20px;">
                    <div class="panel-heading"><h2>New song</h2></div>
                    <div class="panel-body">
                        <?php
                        require_once ('config/dbconfig.php');
                        $sqlTest = "select * from table_song where song_rating >= 7 LIMIT 25";
                        $result = $conn->query($sqlTest);
                        while ($row = $result->fetch_object()){
                            echo "<div class=\"grow\" style=\"border-top:1px solid #000;\">
                                    <div id=\"status1\" class=\"status\">►</div>
                                    <div class=\"left\"><br><p>$row->song_name</p></div>
                                    <div class=\"right\"><br><p>03:53</p></div>
                                    <br><br>
                                    <button type=\"button\" class=\"btn btn-info\" onclick=\"changeSource('$row->song_song_directory', 'status1')\">Play</button>
                                    <br>
                                    <div class=\"left\"><br><p>Artist: $row->song_artist</p></div>
                                    <div class=\"right\"><br><p>Release year: $row->song_release_year</p></div>
                                    <p>Album: $row->song_album</p>
                                </div>";
                        }
                        ?>
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
        var str2 = ".mp3";
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

<script>
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
</script>


</body>
</html>
