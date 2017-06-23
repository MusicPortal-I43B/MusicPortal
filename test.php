<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Music Portal</title>
<!--    <script src="../public/js/prefixfree.min.js"></script>-->
    <link rel="stylesheet" href="public/vendors/bootstrap/css/bootstrap.min.css">
    <style>

        .carousel-control 			 { width:  4%; }
        .carousel-control.left,.carousel-control.right {margin-left:15px;background-image:none;}
        @media (max-width: 767px) {
            .carousel-inner .active.left { left: -100%; }
            .carousel-inner .next        { left:  100%; }
            .carousel-inner .prev		 { left: -100%; }
            .active > div { display:none; }
            .active > div:first-child { display:block; }

        }
        @media (min-width: 767px) and (max-width: 992px ) {
            .carousel-inner .active.left { left: -50%; }
            .carousel-inner .next        { left:  50%; }
            .carousel-inner .prev		 { left: -50%; }
            .active > div { display:none; }
            .active > div:first-child { display:block; }
            .active > div:first-child + div { display:block; }
        }
        @media (min-width: 992px ) {
            .carousel-inner .active.left { left: -25%; }
            .carousel-inner .next        { left:  25%; }
            .carousel-inner .prev		 { left: -25%; }
        }


    </style>
    <!--    <link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">-->
</head>

<body>
<div class="col-md-12 text-center"><h3>Product Carousel</h3></div>
<div class="col-md-6 col-md-offset-3">
    <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="http://placehold.it/500/e499e4/fff&amp;text=1" class="img-responsive"></a></div>
            </div>
            <div class="item">
                <div class="col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="http://placehold.it/500/e477e4/fff&amp;text=2" class="img-responsive"></a></div>
            </div>
            <div class="item">
                <div class="col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="http://placehold.it/500/eeeeee&amp;text=3" class="img-responsive"></a></div>
            </div>
            <div class="item">
                <div class="col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="http://placehold.it/500/f4f4f4&amp;text=4" class="img-responsive"></a></div>
            </div>
            <div class="item">
                <div class="col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="http://placehold.it/500/f566f5/333&amp;text=5" class="img-responsive"></a></div>
            </div>
            <div class="item">
                <div class="col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="http://placehold.it/500/f477f4/fff&amp;text=6" class="img-responsive"></a></div>
            </div>
            <div class="item">
                <div class="col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="http://placehold.it/500/eeeeee&amp;text=7" class="img-responsive"></a></div>
            </div>
            <div class="item">
                <div class="col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="http://placehold.it/500/fcfcfc/333&amp;text=8" class="img-responsive"></a></div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
    </div>
</div>

<script src="public/vendors/jquery/jquery-3.1.1.min.js"></script>
<script src="public/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="public/js/script.js"></script>
<script src="public/vendors/jquery/wow.min.js"></script>

<script>
    $('.carousel[data-type="multi"] .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i=0;i<2;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });
</script>

</body>
</html>
