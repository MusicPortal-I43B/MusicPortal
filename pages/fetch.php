
<?php
if(isset($_POST["value"])) {
    require_once ('../config/dbconfig.php');
    $sql = "select * from table_song where song_album = '".$_POST['value']."'";
    echo $_POST['value'];
    $result = $conn->query($sql);
    $str = '';
    while ($row = $result->fetch_object()) {
        echo "
                <div class=\"panel panel-mostPopular\" style=\"margin-top: 20px;\">
                    <div class=\"panel-heading\"><img src='$row->song_album_img_directory' alt='' style='width: 100px;'><span style='text-align: right; font-size: 28px;'>$row->song_album</span></div>
                    <div class=\"panel-body\">";
        $str = '<div class=\"grow\" style=\"border-top:1px solid #000;\">
                    <div id=\"status1\" class=\"status\">►</div>
                    <div class=\"left\"><br><p>'.$row->song_name.'</p></div>
                    <div class=\"right\"><br><p>03:53</p></div>
                    <br><br>
                    <button type=\"button\" class=\"btn btn-info\">Play</button>
                    <br>
                    <div class=\"left\"><br><p>Artist: '.$row->song_artist.'</p></div>
                    <div class=\"right\"><br><p>Release year: '.$row->song_release_year.'</p></div>
                    <p>Album: '.$row->song_album.'</p>
                </div>
                </div>
            </div>';
        echo $str;
    }
}else{
    echo 'Data Not Found';
}
?>
