<?php include_once "open.php"; ?>
<?php include_once "nav.php"; ?>

 <!-- Left side -->
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
						<li><a href="#"> RPG </a></li>
                        <li class="active">Darkest Dungeon</li>
                    </ol>
                </div>
            </div>

			
            <!-- Product Information -->
                <div class="col-md-offset-1">
					<h2>Darkest Dungeon </h2>

                    <hr class="colorgraph">

                    <div class="container-fluid">
						<div class="row">
							<!-- Product Image -->
							<div class="col-md-9">
								<img class="col-md-12" src="http://cdn.escapistmagazine.com/media/global/images/library/deriv/692/692427.jpg" alt=""><br>
							</div>
							<!-- Product Price and Buttons-->
							<div class="col-md-3"><br>
							<span class="glyphicon glyphicon-star-empty pull-right"></span>
								<div class="text-center">
									
									<h2>54,99€</h2> 
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
								</div><br>
								<button type="button" class="btn btn-lg btn-success btn-block" type="submit" href="#">
									<span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart
								</button>

								<button type="button" class="btn btn-lg btn-primary btn-block" type="submit" href="#">
									<span class="glyphicon glyphicon-heart"></span> Add to Wishlist
								</button>
							</div>
						</div><br>
						<!-- Product Description -->
						<div class="row">
							<div class="col-md-12">
								<p>	Darkest Dungeon is a challenging gothic roguelike turn-based RPG about the psychological stresses of adventuring. Recruit, train, and lead a team of flawed heroes against unimaginable horrors, stress, famine, disease, and the ever-encroaching dark. Can you keep your heroes together when all hope is lost?</p>
							</div>
                       	</div>
						
						<!-- Reviews -->
						<div class="row">
							<h3>Reviews </h3>
							<div class="table-responsive">
								<table class="table table-hover table-striped">
									<thead>
									<tr>
										<th>Date</th>
										<th>Rating</th>
										<th>Description</th>
										<th>Author</th>
									</tr>
									</thead>
									<tbody>
									<tr class="warning">
										<th scope="row">13-03-2015</th>
										<td>
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star-empty"></span>
										</td>
										<td>Very nice game! Such quality!</td>
										<td>_MLG_xXx_Gamer_</td>
									</tr>
									<tr class="success">
										<th scope="row">26-09-2014</th>
										<td>
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star-empty"></span>
											<span class="glyphicon glyphicon-star-empty"></span>
										</td>
										<td>It was ok.. </td>
										<td>Barnie</td>
									</tr>
									</tbody>
								</table>
                    		</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.col-md-9 -->
	</div>
</div>

<?php include_once "footer.php"; ?>
<?php include_once "close.php"; ?>
