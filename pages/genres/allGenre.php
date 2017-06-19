<!Doctype HTML>
<html>
<head>
    <title>Music Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../public/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/StyleIndex.css">
    <link rel="stylesheet" href="../../public/css/animate.css">
    <link rel="stylesheet" href="../../public/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/songStyle.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/artists.css"> -->
    <link rel="stylesheet" href="../../public/vendors/bootstrap-select-1.12.2/dist/css/bootstrap-select.min.css" />
    <!-- Audio Player CSS & Scripts -->
    <script src="../../public/js/mediaelement-and-player.min.js"></script>
    <link rel="stylesheet" href="../../public/css/AudioPlayerStyle.css" media="screen">
</head>

<body>
<div class="col-md-6 col-sm-12 col-xs-12 wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
    <div class="panel panel-mostPopular" style="margin-top: 20px;">
        <div class="panel-heading"><h2>Most popular</h2></div>
        <div class="panel-body">
            <?php
            require_once('../../config/dbconfig.php');
            $sqlTest = "select * from table_song where song_rating >= 7 LIMIT 25";
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

</body>

</html>