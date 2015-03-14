<?php include_once "open.php"; ?>
<?php include_once "nav.php"; ?>


<div class="container container-full">

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

</div>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Left side -->
        <div class="col-md-3">

            <!-- Search -->
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>

            <br><br>

            <!-- Side Menu -->
            <p class="lead">Categories</p>
            <div class="list-group">
                <a href="" class="list-group-item">Adventure</a>
                <a href="" class="list-group-item">Action</a>
                <a href="" class="list-group-item">Racing</a>
                <a href="" class="list-group-item">Sports</a>
                <a href="" class="list-group-item">Strategy</a>
                <a href="" class="list-group-item">Massive Multiplayer</a>
                <a href="" class="list-group-item">RPG</a>
                <a href="" class="list-group-item">Simulation</a>
            </div>
        </div>

        <!-- Right side -->
        <div class="col-md-9">

            <div class="row">

                <!-- Product List -->
                <?php include_once "itemlist.php"; ?>

            </div>
        </div><!-- Right side -->

    </div><!-- /.row -->
</div><!-- /.container -->


<?php include_once "footer.php"; ?>
<?php include_once "close.php"; ?>


