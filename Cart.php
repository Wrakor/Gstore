<?php include_once "templates/common/open.php"; ?>
<?php include_once "templates/common/nav.php"; ?>

    <div class="container">
        <div class="row">

            <!-- Left Side -->
       	    <?php include_once "templates/common/categoryColumn.html" ?>       	

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


<?php include_once "templates/common/footer.php"; ?>
<?php include_once "templates/common/close.php"; ?>