<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../public/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/styleIndex.css">
    <link rel="stylesheet" href="../public/css/animate.css">
    <link rel="stylesheet" href="../public/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/songStyle.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/artists.css"> -->
    <link rel="stylesheet" href="../public/vendors/bootstrap-select-1.12.2/dist/css/bootstrap-select.min.css" />
</head>

<style>
    table tr td.menu {
        width: 25%;
    }
</style>

<body>

    <div class="container" style="width: 50%;">
        <h2 style="text-align: center;">Add song page</h2>
        <form action="">
            <div class="table-responsive">
                <table class="table table-hover">
                    <tr class="active">
                        <td class="menu">Title</td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr class="success">
                        <td class="menu">Artist</td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr class="active">
                        <td class="menu">Genre</td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr class="warning">
                        <td class="menu">Album</td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr class="active">
                        <td class="menu">Song release</td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr class="danger">
                        <td class="menu">Album release</td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr class="active">
                        <td class="menu">Subtitle</td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr class="info">
                        <td class="menu"></td>
                        <td>

                        </td>
                    </tr>
                    <tr class="active">
                        <td class="menu">Upload song cover</td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr>
                        <td class="menu">Album cover</td>
                        <td contenteditable="true" aria-required="true"></td>
                    </tr>
                </table>
                <div class="form-group">
                    <input type="file" id="songFile">
                </div>
                <div class="form-group">
                    <input type="file" id="imgAlbumFile">
                </div>
                <div class="form-group">
                    <input type="file" id="imgArtistFile">
                </div>
            </div>
            <button class="btn" type="submit">Submt</button>
        </form>
    </div>
    <script src="../public/vendors/jquery/jquery-3.1.1.min.js"></script>
    <script src="../public/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="../public/vendors/jquery/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>