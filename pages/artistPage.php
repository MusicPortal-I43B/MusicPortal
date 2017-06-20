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
    <link rel="stylesheet" href="../public/css/moduleStyle.css">
    <title>Document</title>
</head>

<style>
    .genres_list {
        z-index: 10000;
        position: absolute;
        text-decoration: none;
        background-color: white;
        top: 80px;
        left: 130px;
        padding: 15px;
        display: none;
    }

    .genres a:hover .genres_list {
        display: block;
    }
</style>

<body style="max-width: 100%; overflow-x: hidden">

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
    <div class="genres_list" id="genres_list">
        <ul>
            <li><a href="#">Rock</a></li>
            <li><a href="#">Pop</a></li>
            <li><a href="#">Class</a></li>
            <li><a href="#">Dance</a></li>
        </ul>
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
        <h3 class="artiststext">ARTISTS</h3>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <?php
            require_once ('../config/dbconfig.php');
            $num_row = $conn->query("select count(song_artist) from table_song");
            echo mysqli_num_rows($num_row);
            for($i = 1;$i <= 2/1;$i++){
                if($i == 1)
                    echo "<li role=\"presentation\" class=\"active\"><a href=\"#page$i\" aria-controls=\"page$i\" role=\"tab\" data-toggle=\"tab\">Page $i</a></li>";
                else
                    echo "<li role=\"presentation\"><a href=\"#page$i\" aria-controls=\"page$i\" role=\"tab\" data-toggle=\"tab\">Page $i</a></li>";
            }
            echo "</ul>
                        <div class=\"tab-content\">";
            for($i = 1;$i <= 2/1;$i++){
                $sqlTest = "select * from table_song order by song_artist limit 1 offset ".($i-1);
                $result = $conn->query($sqlTest);
                echo "<div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"page$i\">";
                    echo "<div class=\"scrollmenu col-md-9 col-sm-12 col-xs-12\" style=\"margin: 0px; padding: 0px;\">";
                        while ($row = $result->fetch_object()){
                            echo "<div class=\"blog col-md-1 col-sm-6 col-xs-6\">
                                <div class=\"hovereffect\">
                                    <img class=\"artists img-responsive\" src=\"../$row->song_artist_img_directory\">
                                    <div class=\"overlay1\">
                                        <h2>$row->song_artist</h2>
                                        <button id=\"myBtn\">Listen...</button>
                                        <a class=\"info\">Listen...</a>
                                    </div>
                                </div>
                            </div>";
                        }
                    echo "</div>
                </div>";
            }
            ?>
    </div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Modal Header</h2>
        </div>
        <div class="modal-body">
            <p>Some text in the Modal Body</p>
            <p>Some other text...</p>
        </div>
        <div class="modal-footer">
            <h3>Modal Footer</h3>
        </div>
    </div>

</div>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


<script src="../public/vendors/jquery/jquery-3.1.1.min.js"></script>
<script src="../public/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="../public/js/script.js"></script>
<script src="../public/vendors/jquery/wow.min.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>