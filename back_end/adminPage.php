<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/adminStyle.css">
    <link rel="stylesheet" href="../public/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/styleIndex.css">
    <link rel="stylesheet" href="../public/css/animate.css">
    <link rel="stylesheet" href="../public/vendors/font-awesome/css/font-awesome.min.css">
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
            <div class="input-group">
                <input type="text" class="form-control" aria-label="..." placeholder="Search...">
                <div class="input-group-btn">
                <button type="submit" class="btn btn-default">GO!</button>
                </div>
            </div>
            <table class="table table-striped table-condensed table-bordered table-rounded">
                <thead>
                <tr>
                    <th width="40%">Title</th>
                    <th width="20%">Artist</th>
                    <th width="20%">Album</th>
                    <th width="15%">Year</th>
<!--                    <th width="12%">Delete/Edit</th>-->
                </tr>
                </thead>
                <tbody>
                <?php
                require_once 'Paginator.class.php';

                require_once '../config/dbconfig.php';

                $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 10;
                $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
                $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
                $query      = "SELECT * FROM table_song ORDER BY song_name";

                $Paginator  = new Paginator( $conn, $query );

                $results    = $Paginator->getData( $limit, $page );
                ?>
                <div id="result"></div>
                <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
                    <tr>
                        <td contenteditable="true"><?php echo $results->data[$i]['song_name']; ?></td>
                        <td contenteditable="true"><?php echo $results->data[$i]['song_artist']; ?></td>
                        <td contenteditable="true"><?php echo $results->data[$i]['song_album']; ?></td>
                        <td contenteditable="true"><?php echo $results->data[$i]['song_release_year']; ?></td>
                        <td>
                            <button class="btn glyphicon glyphicon-trash" id="btn_del" value="<?php echo $results->data[$i]['song_id']; ?>"></button>
                        </td>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </div>
        <div style="text-align: center;">
            <?php echo $Paginator->createLinks( $links, 'pagination pagination-sm' ); ?>
        </div>
    </div>
    <div id="AddSong" class="tabcontent" style="height: 100%;">
        <h3>Add Song</h3>
        <form action="../pages/index/insertSong.php" method="post" enctype='multipart/form-data' id="addSongForm">
            <div class="table-responsive">
                <table class="addSongTable table table-hover">
                    <tr class="active">
                        <td class="menu">Title</td>
                        <td><input type="text" id="title"></td>
                    </tr>
                    <tr class="success">
                        <td class="menu">Artist</td>
                        <td><input type="text" id="artist"></td>
                    </tr>
                    <tr class="active">
                        <td class="menu">Genre</td>
                        <td><input type="text" id="genre"></td>
                    </tr>
                    <tr class="warning">
                        <td class="menu">Album</td>
                        <td><input type="text" id="album"></td>
                    </tr>
                    <tr class="active">
                        <td class="menu">Song release</td>
                        <td><input type="text" id="songReleaseYear"></td>
                    </tr>
                    <tr class="danger">
                        <td class="menu">Album release</td>
                        <td><input type="text" id="albumReleaseYear" name="albumReleaseYear"></td>
                    </tr>
                    <tr class="active">
                        <td class="menu">Subtitle</td>
                        <td><input type="text" id="subtitle"></td>
                    </tr>
                    <tr class="info">
                        <td class="menu">Rating</td>
                        <td>
                            <select name="rating" id="rating">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
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
            <button class="btn btn-success" type="submit">Save</button>
        </form>
    </div>
    <div id="snackbarAdd">The song is added into databases successful...</div>
    <div id="snackbarDelete">The song is deleted from databases successful...</div>
    <div id="snackbarEdit">The song is edited successful...</div>
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
                    dataType:{"text", "file"},
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
        function edit_data(id, title, artist, genre, album, songReleaseYear
            , albumReleaseYear, subtitle, songFile, imgAlbumFile
            , imgArtistFile, rating)
        {
            $.ajax({
                url:"edit.php",
                method:"POST",
                data:{id:id, title:title, artist:artist, genre:genre, album:album, songReleaseYear:songReleaseYear
                    , albumReleaseYear:albumReleaseYear, subtitle:subtitle, songFile:songFile, imgAlbumFile:imgAlbumFile
                    , imgArtistFile:imgArtistFile, rating:rating},
                dataType:{"text", "file"},
                success:function(data){
                    alert(data);
                }
            });
        }
        $(document).on('blur', '.first_name', function(){
            var id = $(this).data("id1");
            var first_name = $(this).text();
            edit_data(id, first_name, "first_name");
        });
        $(document).on('blur', '.last_name', function(){
            var id = $(this).data("id2");
            var last_name = $(this).text();
            edit_data(id,last_name, "last_name");
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

<script src="../public/js/script.js"></script>

<script>
    function myAddFunction() {
        var x = document.getElementById("snackbarAdd")
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
    function myDeleteFunction() {
        var x = document.getElementById("snackbarAdd")
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
    function myEditFunction() {
        var x = document.getElementById("snackbarAdd")
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