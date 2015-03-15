<?php include_once "open.php"; ?>
<?php include_once "nav.php"; ?>

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

            <!-- Content -->
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-offset-1">

                        <h2>Shopping Cart<small> with products you are about to buy</small></h2>

                        <hr class="colorgraph">
                        <div class="container-fluid">
                            <?php include_once "cartItemList.php"; ?>
							
							<button type="button" class="btn btn-lg btn-success btn-block" type="submit" href="#">Proceed to Checkout</button>
                        </div>
                    </div>
                </div>
						</div>     
        </div><!-- /.row -->
    </div><!-- /.container -->


<?php include_once "footer.php"; ?>
<?php include_once "close.php"; ?>