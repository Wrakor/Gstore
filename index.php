<?php include_once "templates/common/open.php"; ?>
<?php include_once "templates/common/nav.php"; ?>


<!-- Page Content -->
<div class="container">
    <div class="row">

	   <!-- Left Side -->
       <?php include_once "templates/common/categoryColumn.html" ?>

        <!-- Right side -->
        <div class="col-md-9">

            <!-- Slider -->
            <div class="row carousel-holder">
                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item">
                                <img class="slide-image" src="img/g5b.jpg" alt="">
                            </div>
                            <div class="item active">
                                <img class="slide-image" src="img/g2b.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="img/g3b.jpg" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Product List -->
                <?php include_once "itemlist.php"; ?>

            </div>
        </div><!-- Right side -->

    </div><!-- /.row -->
</div><!-- /.container -->


<?php include_once "templates/common/footer.php"; ?>
<?php include_once "templates/common/close.php"; ?>


