<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/styleIndex.css">
    <link rel="stylesheet" href="../public/css/animate.css">
    <link rel="stylesheet" href="../public/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/songStyle.css">
    <!--    <link rel="stylesheet" href="../public/css/moduleStyle.css">-->
    <title>Document</title>
</head>

<body style="height: 1000px; max-width: 100%; overflow-x: hidden">

<div id="wrapper">
    <div id="mySidenav" class="sidenav">
        <a href="../index.php" id="home">Home</a>
        <a class="genres" id="genres">Genres</a>
        <a href="#" id="artists">Artists</a>
        <a href="#" id="albums">Albums</a>
        <a href="../pages/aboutus.php" id="about">About</a>
    </div>
    <div id="logInnav" class="sidenav">
        <a href="../pages/index/loginPage.php" id="login">Login</a>
        <a href="../pages/index/signUp.php" id="signup">Signup</a>
    </div>
    <div class="clearfix"></div>
    <div style="width: 100%; margin-left: auto; margin-right: auto;">
        <!--Div for slide show-->
        <div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.1s" data-interval="2000" style="width: 100%; height: 100%">
                        <a href="data/song.html">
                            <img src="../public/img/slide/img1.jpg" alt="..." style="margin: auto; width: 100%;">
                        </a>
                        <div class="carousel-caption">
                            <h3>Let the world know</h3>
                        </div>
                    </div>
                    <div class="item wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.1s" data-interval="2000">
                        <a href="data/song.html">
                            <img src="../public/img/slide/img2.jpg" alt="..." style="margin: auto; width: 100%;">
                        </a>
                        <div class="carousel-caption">
                            <h3>The End Is Where We Begin</h3>
                        </div>
                    </div>
                    <div class="item wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.1s" data-interval="2000">
                        <a href="data/song.html">
                            <img src="../public/img/slide/img3.jpg" alt="..." style="margin: auto; width: 100%;">
                        </a>
                        <div class="carousel-caption">
                            <h3>In The End</h3>
                        </div>
                    </div>
                    <div class="item wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.1s" data-interval="2000">
                        <a href="data/song.html">
                            <img src="../public/img/slide/img4.jpg" alt="..." style="margin: auto; width: 100%;">
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

    <div class="col-md-offset-1 container" style="width: 80%;">
        <h3 class="artiststext">ALBUMS</h3>
        <?php
        require_once ('../config/dbconfig.php');

        require_once '../back_end/Paginator.class.php';

        $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 25;
        $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
        $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
        $query      = "SELECT * FROM table_song GROUP BY song_album ORDER BY song_album";

        $Paginator  = new Paginator( $conn, $query );

        $results    = $Paginator->getData( $limit, $page );

        $song_artist_name = array();

        echo "<div class=\"scrollmenu col-md-12 col-sm-12 col-xs-12 wow slideInLeft\" data-wow-duration=\"1.5s\" data-wow-delay=\"0.1s\" style=\"margin: 0px; padding: 0px;\">";
        ?>
        <?php for( $i = 0; $i < count( $results->data ); $i++ ) {
            $song_artist_name[$i] = $results->data[$i]['song_artist'];
            echo "<div class=\"blog col-md-1 col-sm-1 col-xs-6\" style='float: left;'>
                    <div class=\"hovereffect\">";
            echo "<img class=\"artists img-responsive\" src=\"../".$results->data[$i]['song_album_img_directory']."\">
                        <div class=\"overlay1\">
                            <h2>" . $results->data[$i]['song_album'] . "</h2>
                            <input type='text' data-id3=\"".$results->data[$i]['song_album']."\" value=\"".$results->data[$i]['song_album']."\" id=\"artist_name\" hidden>
                            <a class=\"info\" data-toggle=\"modal\" data-target=\"#artist".$results->data[$i]['song_id']."\" data-whatever=\"@mdo\">
                                View...
                            </a>
                        </div>";
            echo "</div>
                    </div>";
        }
        echo "</div>";

        for( $i = 0; $i < count( $results->data ); $i++ ) {
            echo "<div class=\"col-sm-12 modal fade\" id=\"artist".$results->data[$i]['song_id']."\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"noteLabel\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                <div style='float: left;'><img src=\"../".$results->data[$i]['song_album_img_directory']."\" alt='' style='width: 100px;'></div>
                                <div style='float: left;'>
                                    <h4 class=\"modal-title\" id=\"noteLabel\">&nbsp;".$results->data[$i]['song_album']."</h4>
                                    <h5>&nbsp;Release: ".$results->data[$i]['song_album_release_date']."</h5>
                                </div>
                            </div>
                            <div class=\"modal-body\">";
//            $query_song = "SELECT * FROM table_song ORDER BY song_name WHERE song_album = '" . $results->data[$i]['song_album'] . "'";
            /*$PaginatorSong  = new Paginator( $conn, $query_song );
            $song_results = $PaginatorSong->getData( $limit, $page );
            echo "<div class=\"list-group\">";
            for( $i = 0; $i < count( $song_results->data ); $i++ ) {
                echo "<a href=\"../".$song_results->data[$i]['song_song_directory']."\" class=\"list-group-item\">
                                    <span class='left'>".$song_results->data[$i]['song_name']."</span>
                                    <span class='right'>03:53</span>
                                </a>";
            }*/
                    echo "<a href=\"../".$results->data[$i]['song_song_directory']."\" class=\"list-group-item\">
                            <span class='left'>".$results->data[$i]['song_name']."</span>
                            <span class='right'>03:53</span>
                        </a>";
            echo "</div>";
            echo "</div>
                    </div>
                </div>
              </div>";
        }

        ?>
    </div>
</div>
<div class="container" style="text-align: center; bottom: 0;">
    <?php echo $Paginator->createLinks( $links, 'pagination pagination-sm' ); ?>
</div>

<script src="../public/vendors/jquery/jquery-3.1.1.min.js"></script>
<script src="../public/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="../public/js/script.js"></script>
<script src="../public/vendors/jquery/wow.min.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>