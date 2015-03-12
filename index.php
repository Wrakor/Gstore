<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>
<body>
<?php include_once "nav.php"; ?>


<!-- Page Content -->
<div class="container">
<div class="row">
<div class="col-md-3">

    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
			        <span class="input-group-btn">
				        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
			        </span>
    </div>
    <br><br>
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

<div class="col-md-9">
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
                        <img class="slide-image" src="./img/800x300" alt="">
                    </div>
                    <div class="item active">
                        <img class="slide-image" src="./img/800x300" alt="">
                    </div>
                    <div class="item">
                        <img class="slide-image" src="./img/800x300" alt="">
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4 col-lg-4 col-md-4 product-list">
            <div class="thumbnail">
                <img src="./img/320x150" alt="">
                <div class="caption">
                    <h4 class="pull-right">9,99€</h4>
                    <h4><a href="">Darkest Dungeon</a></h4>
                    <p>
                        <span class="icon-os-win-03"></span>
                        <span class="icon-os-apple"></span>
                    </p>
                    <p>Darkest Dungeon is a challenging gothic roguelike turn-based RPG about the psychological stresses of adventuring. Recruit, train, and lead a team of flawed heroes against unimaginable horrors, stress, famine, disease, and the ever-encroaching dark. Can you keep your heroes together when all hope is lost?</p>
                </div>
                <div class="ratings">
                    <p class="pull-right"><a href="">15 reviews</a></p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-lg-4 col-md-4 product-list">
            <div class="thumbnail">
                <img src="./img/320x150" alt="">
                <div class="caption">
                    <h4 class="pull-right">44,99€</h4>
                    <h4><a href="">Borderlands 2 Game of the Year</a></h4>
                    <p>
                        <span class="icon-os-win-03"></span>
                        <span class="icon-os-apple"></span>
                        <span class="icon-os-linux_1_"></span>
                    </p>
                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="ratings">
                    <p class="pull-right"><a href="">12 reviews</a></p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-lg-4 col-md-4 product-list">
            <div class="thumbnail">
                <img src="./img/320x150" alt="">
                <div class="caption">
                    <h4 class="pull-right">54,99€</h4>
                    <h4><a href="">The Elder Scrolls Online</a></h4>
                    <p>
                        <span class="icon-os-win-03"></span>
                        <span class="icon-os-apple"></span>
                    </p>
                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="ratings">
                    <p class="pull-right"><a href="">31 reviews</a></p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-lg-4 col-md-4 product-list">
            <div class="thumbnail">
                <img src="./img/320x150" alt="">
                <div class="caption">
                    <h4 class="pull-right">54,99€</h4>
                    <h4><a href="">Borderlands: The Pre-Sequel</a></h4>
                    <p>
                        <span class="icon-os-win-03"></span>
                        <span class="icon-os-apple"></span>
                        <span class="icon-os-linux_1_"></span>
                    </p>
                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="ratings">
                    <p class="pull-right"><a href="">6 reviews</a></p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-lg-4 col-md-4 product-list">
            <div class="thumbnail">
                <img src="./img/320x150" alt="">
                <div class="caption">
                    <h4 class="pull-right">18,99€</h4>
                    <h4><a href="">Torchlight II</a></h4>
                    <p>
                        <span class="icon-os-win-03"></span>
                        <span class="icon-os-apple"></span>
                        <span class="icon-os-linux_1_"></span>
                    </p>
                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="ratings">
                    <p class="pull-right"><a href="">18 reviews</a></p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-lg-4 col-md-4 product-list">
            <div class="thumbnail">
                <img src="./img/320x150" alt="">
                <div class="caption">
                    <h4 class="pull-right">19,99€</h4>
                    <h4><a href="">Creativerse</a></h4>
                    <p>
                        <span class="icon-os-win-03"></span>
                        <span class="icon-os-apple"></span>
                    </p>
                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="ratings">
                    <p class="pull-right"><a href="">18 reviews</a></p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </p>
                </div>
            </div>
        </div>


    </div>
</div>
</div>
</div>
<!-- /.container -->



<?php include_once "footer.php"; ?>
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


