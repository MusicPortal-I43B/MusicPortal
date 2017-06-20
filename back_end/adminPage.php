<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../public/css/AdminPageStyle.css">
    <link rel="stylesheet" href="../public/css/styleIndex.css">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="glyphicon glyphicon-search"></span>
            </button>
            <a class="navbar-brand" href="#">ADMIN PAGE</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-right">
                <div class="input-group">
                    <input type="text" class="form-control" aria-label="..." placeholder="Search...">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default">GO!</button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
                        <ul class="dropdown-menu" id="search">
                            <li value="title"><a href="#">Title</a></li>
                            <li value="artist"><a href="#">Artist</a></li>
                            <li value="album"><a href="#">Album</a></li>
                            <li value="year"><a href="#">Year</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div style="margin-top: 50px;">
    <div class="tab" id="tap">
        <button class="tablinks" onclick="openCity(event, 'ListSong')" id="defaultOpen">List Song</button>
        <button class="tablinks" onclick="openCity(event, 'AddSong')">Add Song</button>
        <button class="tablinks" onclick="openCity(event, 'EditSong')">Edit Song</button>
        <button class="tablinks" onclick="openCity(event, 'DeleteSong')">Delete Song</button>
    </div>

    <div id="ListSong" class="tabcontent">
        <div style="float: right; margin-top: 25px;">
            <label for="sortby">Sort by: </label>
            <select name="sortby" id="sortby">
                <option value="song_name">Title</option>
                <option value="song_name">Artist</option>
                <option value="song_name">Album</option>
                <option value="song_name">Year</option>
            </select>
        </div>
        <h3>List Song</h3>
        <div style="overflow-x: auto;">
            <table class="table table-striped table-condensed table-bordered table-rounded">
                <thead>
                <tr>
                    <th width="40%">Title</th>
                    <th width="20%">Artist</th>
                    <th width="20%">Album</th>
                    <th width="8%">Year</th>
<!--                    <th width="12%">Delete/Edit</th>-->
                </tr>
                </thead>
                <tbody>
                <?php
                require_once 'Paginator.class.php';

                require_once '../config/dbconfig.php';

                $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 1;
                $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
                $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 1;
                $query      = "SELECT * FROM table_song order by song_name";

                $Paginator  = new Paginator( $conn, $query );

                $results    = $Paginator->getData( $page, $limit );
                ?>
                <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
                    <tr>
                        <td><?php echo $results->data[$i]['song_name']; ?></td>
                        <td><?php echo $results->data[$i]['song_artist']; ?></td>
                        <td><?php echo $results->data[$i]['song_album']; ?></td>
                        <td><?php echo $results->data[$i]['song_release_year']; ?></td>
                        <td>
                            <button class="btn glyphicon glyphicon-trash" id="btn_del" value="<?php echo $results->data[$i]['song_id']; ?>"></button>
                            <button class="btn glyphicon glyphicon-edit" id="btn_edit" value="<?php echo $results->data[$i]['song_id']; ?>"></button>
                        </td>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </div>
        <?php echo $Paginator->createLinks( $links, 'pagination pagination-sm' ); ?>
    </div>
    <div id="AddSong" class="tabcontent" style="height: 100%;">
        <h3>Add Song</h3>
        <form enctype='multipart/form-data' id="addSongForm">
            <div class="table-responsive">
                <table class="addSongTable table table-hover">
                    <tr class="active">
                        <td class="menu">Title</td>
                        <td id="title" contenteditable="true" placeholder="Song Title ..." data-require="true"></td>
                    </tr>
                    <tr class="success">
                        <td class="menu">Artist</td>
                        <td id="artist" contenteditable="true" placeholder="Song Artists ..."></td>
                    </tr>
                    <tr class="active">
                        <td class="menu">Genre</td>
                        <td id="genre" contenteditable="true" placeholder="Song Genre ..."></td>
                    </tr>
                    <tr class="warning">
                        <td class="menu">Album</td>
                        <td id="album" contenteditable="true" placeholder="Song Album ..."></td>
                    </tr>
                    <tr class="active">
                        <td class="menu">Song release</td>
                        <td id="song-release-year" contenteditable="true" placeholder="0000"></td>
                    </tr>
                    <tr class="danger">
                        <td class="menu">Album release</td>
                        <td id="album-release-year" contenteditable="true" placeholder="0000-00-00"></td>
                    </tr>
                    <tr class="active">
                        <td class="menu">Subtitle</td>
                        <td id="subtitle" contenteditable="true" placeholder="Song Subtitle ..."></td>
                    </tr>
                    <tr class="info">
                        <td class="menu">Rating</td>
                        <td>
                            <select name="rating" id="rating">
                                <option value=""></option>
                            </select>
                        </td>
                    </tr>
                </table>
                <div class="form-group">
                    <label for="songFile">Upload a album cover (jpg):</label>
                    <input type="file" id="imgAlbumFile">
                    <label for="songFile">Upload a artist cover (jpg):</label>
                    <input type="file" id="imgArtistFile">
                    <label for="songFile">Upload a song (mp3):</label>
                    <input type="file" id="songFile">
                </div>
            </div>
            <button class="btn btn-success" type="submit" id="btn-add" onclick="myFunction()">Save</button>
        </form>
    </div>
    <div id="snackbar">The song is added into databases successful...</div>
    <div id="EditSong" class="tabcontent">
        <h3>Edit Song</h3>

    </div>
    <div id="DeleteSong" class="tabcontent">
        <h3>Delete Song</h3>

    </div>
</div>
<script src="../public/vendors/jquery/jquery-3.1.1.min.js"></script>
<script src="../public/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="../public/js/script.js"></script>
<script src="../public/vendors/jquery/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<script>
    $(document).ready(function(){
        function fetch_data()
        {
            $.ajax({
                url:"select.php",
                method:"POST",
                success:function(data){
                    myFunction();
                    $('#live_data').html(data);
                }
            });
        }
        fetch_data();
        $(document).on('click', '#btn_add', function(){
            var title = $('#title').text();
            var artist = $('#artist').text();
            var genre = $('#genre').text();
            var album = $('#album').text();
            var songReleaseYear = $('#song-release-year').text();
            var albumReleaseYear = $('#album-release-year').text();
            var subtitle = $('#subtitle').text();
            var songFile = $('#songFile').file();
            var imgAlbumFile = $('#imgAlbumFile').file();
            var imgArtistFile = $('#imgArtistFile').file();
            var rating = $('#rating');
            if(title.length && artist.length && genre.length && album.length && songReleaseYear.length
                && albumReleaseYear.length && subtitle.length && songFile.size && imgArtistFile.size && imgAlbumFile.size){
                $.ajax({
                    url:"../page/index/insertSong.php",
                    method:"POST",
                    data:{title:title, artist:artist, genre:genre, album:album, songReleaseYear:songReleaseYear
                        , albumReleaseYear:albumReleaseYear, subtitle:subtitle, songFile:songFile, imgAlbumFile:imgAlbumFile
                        , imgArtistFile:imgArtistFile, rating:rating},
                    dataType:"text",
                    success:function(data)
                    {
                        alert(data);
                        fetch_data();
                    }
                })
            }else{
                alert("Please, Input all of input contents");
//                $('#addSongForm').reset();
            }
        });
        $(document).on('click', '.btn_delete', function(){
            var id=$(this).data("id3");
            if(confirm("Are you sure you want to delete this?"))
            {
                $.ajax({
                    url:"delete.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"text",
                    success:function(data){
                        alert(data);
                        fetch_data();
                    }
                });
            }
        });
    }
</script>

<script>
    function myFunction() {
        var x = document.getElementById("snackbar")
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
</script>

<script>
    var right = document.getElementById('tabcontent').style.height;
    var left = document.getElementById('tab').style.height;
    if(left>right)
    {
        document.getElementById('tabcontent').style.height=left;
    }
    else
    {
        document.getElementById('tab').style.height=right;
    }
</script>

</body>
</html>