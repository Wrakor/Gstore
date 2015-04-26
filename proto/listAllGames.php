<?php 
	include_once "../config/init.php";
	include_once "../templates/common/open.php";
	include_once "../templates/common/nav.php"; 
	include_once "../database/products.php";
?>


<!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- Left Side -->
        <?php include_once "../templates/common/categoryColumn.html" ?>
		
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
                    <h2>Games <small> All you can find on our store</small>

                        <ul class="view-modes list-inline pull-right">
                            <li class="active"><a href="products.php"> <span class="glyphicon glyphicon-th"></span></a></li>
                            <li class=""><a href="products2.php"> <span class="glyphicon glyphicon-th-list"></span></a></li>
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

                        <?php 
							$products = listAllGames();

							foreach ($products as $row) {
								echo 
									'<div class="col-sm-4 col-lg-4 col-md-4 product-list">
										<div class="thumbnail thumbnail-full">
											<img src="' . $row['externallink'] . '" style="max-height: 127px" alt="">
											<div class="caption caption-below">
												<h4><a href="viewProduct.php?id=' . $row['id'] . '">' . $row['name'] . '</a></h4>
												<p>
													<span class="icon-os-win-03"></span>
													<span class="icon-os-apple"></span>
												</p>
											</div>
											<div class="caption caption-br">
												<h3 class="pull-right">' . $row['price'] . '€</h3>
											</div>
										</div>
									</div>';
							}
						?>

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


<?php include_once "../templates/common/footer.php"; ?>
<?php include_once "../templates/common/close.php"; ?>