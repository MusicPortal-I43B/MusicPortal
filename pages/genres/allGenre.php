<!Doctype HTML>
<html>
<head>
    <title>Music Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../public/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/allGenre.css">
    <link rel="stylesheet" href="../../public/css/animate.css">
    <link rel="stylesheet" href="../../public/vendors/font-awesome/css/font-awesome.min.css">
<!--    <link rel="stylesheet" type="text/css" href="../../public/css/songStyle.css">-->
<!--     <link rel="stylesheet" type="text/css" href="css/artists.css"> -->
    <link rel="stylesheet" href="../../public/vendors/bootstrap-select-1.12.2/dist/css/bootstrap-select.min.css" />
    <!-- Audio Player CSS & Scripts -->
    <script src="../../public/js/mediaelement-and-player.min.js"></script>
<!--    <link rel="stylesheet" href="../../public/css/AudioPlayerStyle.css" media="screen">-->

    <script src="../../public/vendors/jquery/jquery-3.1.1.min.js"></script>
    <script src="../../public/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../public/js/script.js"></script>
    <script src="../../public/vendors/jquery/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <!-- Audio Player CSS & Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="../../public/js/audioPlayerJS/mediaelement-and-player.min.js"></script>
    <link rel="stylesheet" href="../../public/css/playerStyle.css" media="screen">
    <!-- end Audio Player CSS & Scripts -->
</head>

<body>


<div class="wrapper">

    <div id="mySidenav" class="sidenav">
        <a href="../../index.php" id="home">Home</a>
        <div class="dropdown">
            <a href="../../pages/genres/allGenre.php" id="genres">Genres</a>
            <!--<div class="dropdown-content" id="myDropdown">
                <a href="#">Rock</a>
                <a href="#">Pop</a>
                <a href="#">Class</a>
                <a href="#">Dance</a>
            </div>-->
        </div>
        <a href="../../pages/artistPage.php" id="artists">Artists</a>
        <a href="#" id="albums">Albums</a>
        <a href="../../pages/aboutus.php" id="about">About</a>
    </div>
    <div id="logInnav" class="sidenav">
        <a href="../../pages/index/loginPage.php" id="login">Login</a>
        <a href="../../pages/index/signUp.php" id="signup">Signup</a>
    </div>
    <div class="clearfix"></div>


    <div class="container">
        <!-- <h3 class="artiststext">SONGS</h3> -->
        <div class="scrollmenu col-md-12 col-sm-12 col-xs-12" style="margin: 0px; padding: 0px">
            <!-- Most popular -->
            <div class="col-md-6 col-sm-12 col-xs-12 wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <!-- POP -->
                <div class="panel panel-mostPopular" style="margin-top: 20px;">
                    <div class="panel-heading"><h2>Popular pop song</h2></div>
                    <div class="panel-body">
                        <?php
                        require_once('../../config/dbconfig.php');
                        $sqlTest = "select * from table_song where song_rating >= 1 AND song_genre = 'POP' LIMIT 25";
                        $result = $conn->query($sqlTest);
                        while ($row = $result->fetch_object()) {
                            echo "
                            <div class=\"grow\" style=\"border-top:1px solid #000;\">
                            <div id=\"status1\" class=\"status\">►</div>
                            <div class=\"left\"><br><p>$row->song_name</p></div>
                            <div class=\"right\"><br><p>03:53</p></div>
                            <br><br>
                            <button type=\"button\" class=\"btn btn-info\" onclick=\"changeSource('$row->song_directory', 'status1')\">Play</button>
                            <br>
                            <div class=\"left\"><br><p>Artist: $row->song_artist</p></div>
                            <div class=\"right\"><br><p>Release year: $row->song_release_year</p></div>
                            <p>Album: $row->song_album</p>
                            </div>
                            ";
                        }
                        ?>
                    </div>
                </div>

                <!-- R&B -->
                <div class="panel panel-mostPopular" style="margin-top: 20px;">
                    <div class="panel-heading"><h2>Popular R&B song</h2></div>
                    <div class="panel-body">
                        <?php
                        require_once('../../config/dbconfig.php');
                        $sqlTest = "select * from table_song where song_rating >= 6 AND song_genre = 'R&B' LIMIT 25";
                        $result = $conn->query($sqlTest);
                        while ($row = $result->fetch_object()) {
                            echo "
                            <div class=\"grow\" style=\"border-top:1px solid #000;\">
                            <div id=\"status1\" class=\"status\">►</div>
                            <div class=\"left\"><br><p>$row->song_name</p></div>
                            <div class=\"right\"><br><p>03:53</p></div>
                            <br><br>
                            <button type=\"button\" class=\"btn btn-info\" onclick=\"changeSource('$row->song_directory', 'status1')\">Play</button>
                            <br>
                            <div class=\"left\"><br><p>Artist: $row->song_artist</p></div>
                            <div class=\"right\"><br><p>Release year: $row->song_release_year</p></div>
                            <p>Album: $row->song_album</p>
                            </div>
                            ";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12 wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <!-- R&B -->
                <div class="panel panel-mostPopular" style="margin-top: 20px;">
                    <div class="panel-heading"><h2>Popular Hip Hop song</h2></div>
                    <div class="panel-body">
                        <?php
                        require_once('../../config/dbconfig.php');
                        $sqlTest = "select * from table_song where song_rating >= 6 AND song_genre = 'Hip-Hop' LIMIT 25";
                        $result = $conn->query($sqlTest);
                        while ($row = $result->fetch_object()) {
                            echo "
                            <div class=\"grow\" style=\"border-top:1px solid #000;\">
                            <div id=\"status1\" class=\"status\">►</div>
                            <div class=\"left\"><br><p>$row->song_name</p></div>
                            <div class=\"right\"><br><p>03:53</p></div>
                            <br><br>
                            
                            <form method=\"post\" action=\"../../pages/audioPlayer.php\">
                            <button type=\"submit\" class=\"btn btn-info\" value='$row->song_id' name=\"songID\">Play</button>
                            </form>
                            
                            <br>
                            <div class=\"left\"><br><p>Artist: $row->song_artist</p></div>
                            <div class=\"right\"><br><p>Release year: $row->song_release_year</p></div>
                            <p>Album: $row->song_album</p>
                            </div>
                            ";
                        }
                        ?>
                    </div>
                </div>

                <!-- Rock -->
                <div class="panel panel-mostPopular" style="margin-top: 20px;">
                    <div class="panel-heading"><h2>Popular rock song</h2></div>
                    <div class="panel-body">
                        <?php
                        require_once('../../config/dbconfig.php');
                        $sqlTest = "select * from table_song where song_rating >= 6 AND song_genre = 'Rock' LIMIT 25";
                        $result = $conn->query($sqlTest);
                        while ($row = $result->fetch_object()) {
                            echo "
                                <div class=\"grow\" style=\"border-top:1px solid #000;\">
                                <div id=\"status1\" class=\"status\">►</div>
                                <div class=\"left\"><br><p>$row->song_name</p></div>
                                <div class=\"right\"><br><p>03:53</p></div>
                                <br><br>
                                <button type=\"button\" class=\"btn btn-info\" onclick=\"changeSource('$row->song_directory', 'status1')\">Play</button>
                                <br>
                                <div class=\"left\"><br><p>Artist: $row->song_artist</p></div>
                                <div class=\"right\"><br><p>Release year: $row->song_release_year</p></div>
                                <p>Album: $row->song_album</p>
                                </div>
                                ";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>

</html>