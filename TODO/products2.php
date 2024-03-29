<?php include_once "templates/common/open.php"; ?>
<?php include_once "templates/common/nav.php"; ?>


<!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- Left side -->
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
                <a href="" class="list-group-item active">RPG</a>
                <a href="" class="list-group-item">Simulation</a>
            </div>

        </div>

        <!-- Right side -->
        <div class="col-md-9">

            <!-- Crumbs -->
            <div class="row">
                <div class="col-md-offset-1">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">RPG</li>
                    </ol>
                </div>
            </div>

            <!-- Product List -->
            <div class="row">

                <div class="col-md-offset-1">
                    <h2>RPG <small>short for role-playing games...</small>
                        <ul class="view-modes list-inline pull-right">
                            <li class=""><a href="products.php"> <span class="glyphicon glyphicon-th"></span></a></li>
                            <li class="active"><a href="products2.php"> <span class="glyphicon glyphicon-th-list"></span></a></li>
                            <li class=""><a href="products3.php"> <span class="glyphicon glyphicon-list"></span></a></li>
                        </ul>

                        <ul class="view-modes view-modes-small list-inline pull-right">
                            <li class="active"><a href="products.php"> <span class="glyphicon glyphicon glyphicon-collapse-down"></span></a></li>
                            <li class=""><a href="products2.php"> <span class="glyphicon glyphicon glyphicon-menu-up"></span></a></li>
                            <li class="">
                                <select class="form-control">
                                    <option>Sort By</option>
                                    <option>Name</option>
                                    <option>OS</option>
                                    <option>Rating</option>
                                    <option>Price</option>
                                </select>
                            </li>
                        </ul>
                    </h2>

                    <hr class="colorgraph">

                    <div class="container-fluid">

                        <?php include_once "itemlist2.php"; ?>

                    </div>

                    <nav class="center-block text-center">
                        <ul class="pagination pagination-lg">
                            <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>

                </div>
            </div>

        </div><!-- /.col-md-9 -->
    </div><!-- /.row -->
</div><!-- /.container -->


<?php include_once "templates/common/footer.php"; ?>
<?php include_once "templates/common/close.php"; ?>
