<?php
require_once ('../../config/dbconfig.php');
//2001-01-14 08:45
date_default_timezone_set("Asia/Bangkok");
$dateEtTime = date("Y-m-d h:i:s");
$title = $_POST['title'];
$genre = $_POST['artist'];
$album = $_POST['album'];
$songReleaseYear = $_POST['songReleaseYear'];
$albumReleaseYear = $_POST['albumReleaseYear'];
$subtitle = $_POST['subtitle'];
$songFile = $_FILES['songFile'];
$imgAlbumFile = $_FILES['imgAlbumFile'];
$imgArtistFile = $_FILES['imgArtistFile'];
$rating = $_POST['rating'];

$songFileUpload = '';
$imgAlbumFileUpload = '';
$imgArtistFileUpload = '';

if(filesize($songFile)>0 && filesize($imgAlbumFile)>0 && filesize($imgArtistFile)>0){
    $songFileDir = "public/upload/media/";
    $imgArtistFileDir = "public/upload/artist_img/";
    $imgAlbumFileDir = "public/upload/album_img/";

    $imgAlbumFileTmpName = $imgAlbumFile['tmp_name'];
    $imgArtistFileTmpName = $imgArtistFile['tmp_name'];

    $songFileExtension = pathinfo($songFile['name'])['extension'];
    $imgAlbumFileExtension = pathinfo($imgAlbumFileDir)['extension'];
    $imgArtistFileExtension = pathinfo($imgAlbumFile['name'])['extension'];

    //    song file
    $songFileName = time().".$songFileExtension";
    $songFiletarget = $songFileDir.$songFileName;
    $songFileSize = filesize($songFileName);

    //  img album file
    $imgAlbumFileName = time().".$imgAlbumFileExtension";
    $imgAlbumFileTarget = $imgAlbumFileDir.$imgAlbumFileName;
    $imgAlbumFileSize = filesize($imgAlbumFileName);

    //  img artist file
    $imgArtistFileName = time().".$imgArtistFileExtension";
    $imgArtistFileTarget = $imgArtistFileDir.$imgArtistFileName;
    $imgArtistFileSize = filesize($imgAlbumFileName);

    //if file is bigger than 5M, reject the file
    if($imgAlbumFileSize <= 5242880 && $imgArtistFileSize <= 5242880){
        if(in_array($imgAlbumFileExtension, ['jpg', 'JPG', 'png', 'PNG'])){
            if(move_uploaded_file($imgAlbumFileTmpName, $imgAlbumFileTarget)){
                $imgAlbumFileUpload = $imgAlbumFileTarget;
            }else{
                echo "Album image can't upload";
            }
        }else{
            echo "Only jpg/png are allowed";
        }
        if(in_array($imgArtistFileExtension, ['jpg', 'JPG', 'png', 'PNG'])){
            if(move_uploaded_file($imgArtistFileTmpName, $imgArtistFileTarget)){
                $imgArtistFileUpload = $imgArtistFileTarget;
            }else{
                echo "Artist image can't upload";
            }
        }else{
            echo "Only jpg/png are allowed";
        }
    }else{
        echo "File is bigger thant 5M - file size is ".number_format($fileSize/1024/1024, 2)."MB";
    }
}else{
    $target = "public/img/cover/cover.png";
    $photo = $target;
}

$sql = "INSERT INTO table_song(song_name, song_artist, song_genre, song_album, song_release_year, song_album_release_date
    , song_song_directory, song_artist_img_directory, song_album_img_directory, song_rating, song_title)
      VALUES('".$_POST["title"]."', '".$_POST["content"]."', '".$dateEtTime."', '".$_POST['username']."')";
if(mysqli_query($connect, $sql))
{
    echo 'Data Inserted';
}
