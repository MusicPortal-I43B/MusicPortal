<?php
$num = 0;
while($num < 5){
    //want this to send $num via POST or GET to xyz.php
    echo '<form method="post" action="./pages/audioPlayer.php">';
    // Pass $num into the form value
    echo '<button type="submit" value="' . $num. '" name="songID">Play</button>';
    echo '</form>';
    $num++;
}
?>