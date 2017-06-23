<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">

	<title>Audio Player</title>

	<!-- Audio Player CSS & Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="../public/js/audioPlayerJS/mediaelement-and-player.min.js"></script>
	<link rel="stylesheet" href="../public/css/playerStyle.css" media="screen">
	<!-- end Audio Player CSS & Scripts -->

	<!-- <meta name="robots" content="noindex,follow" /> -->
</head>

<body>

	<!-- Audio Player HTML -->
	<div class="audio-player">


        <?php
            $songID = $_POST["songID"];

            require_once ('../config/dbconfig.php');
            $sql = "select * from table_song where song_id ='" . $songID . "'";
            //echo $sql;
            $result = $conn->query($sql);
            $row = $result->fetch_object();

            //echo $row->song_directory;
            echo "<h1>$row->song_name</h1>";
            //echo "<img class=\"cover\" src=\"$row->song_album_img_directory\" alt=\"\">";
            echo "<audio id=\"audio-player\" src=\"$row->song_song_directory\" type=\"audio/mp3\" controls=\"controls\"></audio>";
            echo $row->song_title;
        ?>




	</div>

<!--    <div class="next-back-button">-->
<!--        <button type="button" style="width: 198px">Backward</button>-->
<!--        <button type="button" style="width: 198px">Forward</button>-->
<!--    </div>-->

	<script>
		$(document).ready(function() {
			$('#audio-player').mediaelementplayer({
				alwaysShowControls: true,
				features: ['playpause','volume','progress'],
				audioVolume: 'horizontal',
				audioWidth: 400,
				audioHeight: 120
			});
		});
	</script>
	<!-- end Audio Player HTML -->



</body>

</html>