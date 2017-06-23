<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="noteLabel">Take a note</h4>
</div>
<div class="modal-body">
    <div class="panel panel-mostPopular" style="margin-top: 20px;">
        <div class="panel-heading"><h2>Most popular</h2></div>
        <div class="panel-body" id="result">



<?php
if(isset($_POST["values"])) {
    require_once ('../../config/dbconfig.php');
    $sql = "select * from table_song where song_album = '".$_POST['values']."'";
    $result = $conn->query($sql);
    $str = '';
    while ($row = $result->fetch_object()) {
        echo "<div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"noteLabel\">$row->song_album</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"panel panel-mostPopular\" style=\"margin-top: 20px;\">
                    <div class=\"panel-heading\"><img src='$row->song_album_img_directory' alt=''></div>
                    <div class=\"panel-body\">";
        $str = '<div class=\"grow\" style=\"border-top:1px solid #000;\">
                    <div id=\"status1\" class=\"status\">►</div>
                    <div class=\"left\"><br><p>$row->song_name</p></div>
                    <div class=\"right\"><br><p>03:53</p></div>
                    <br><br>
                    <button type=\"button\" class=\"btn btn-info\">Play</button>
                    <br>
                    <div class=\"left\"><br><p>Artist: $row->song_artist</p></div>
                    <div class=\"right\"><br><p>Release year: $row->song_release_year</p></div>
                    <p>Album: $row->song_album</p>
                </div>';
        echo $str;
    }
}else{
    echo 'Data Not Found';
}
?>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>
