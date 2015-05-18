{include file='common/header.tpl'}

{include file='common/nav.tpl'}


 <!-- Left side -->
<div class="container">
    <div class="row">

        <div class="col-md-1"></div>

        <!-- Right side -->
        <div class="col-md-10">

            <div class="row">
                <div class="col-md-12">

                    <!-- Crumbs -->
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="{$BASE_URL}/pages/products/list.php?{if count($data.product.platforms)>0}games{else}related{/if}">{if count($data.product.platforms)>0}Games{else}Related Products{/if}</a></li>
                        <li class="active">{$data.product['name']}</li>
                    </ol>

                    <!-- Product Information -->
										 
					<h2> {$product['name']} </h2>					

                    <hr class="colorgraph">
                </div>
            </div>

            <div class="row">
                <div class="col-md-9">

                    <a href="#" class="thumbnail">
                        <img class="" src=" {$data.product['externallink']}" alt="">
                    </a>
				</div><!-- /.col-md-9 -->

                <!-- Product Price and Buttons-->
                <div class="col-md-3">

                    <h3>
                        <div class="rating">
                            <span>☆</span>
                        </div>
                    </h3>
                    <div class="text-center">

                        <h1> {$data.product['price']} €</h1>
                        <h4>SCORE {$data.product['score']}  / 5 <span class="glyphicon glyphicon-star"></span></h4>


                    </div>
                    <br>
                    <button type="button" class="btn btn-lg btn-success btn-block" type="submit" href="#">
                        <span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart
                    </button>

                    <button type="button" class="btn btn-lg btn-primary btn-block" type="submit" href="#">
                        <span class="glyphicon glyphicon-heart"></span> Add to Wishlist
                    </button>
                </div>

            </div>


            <!-- Product Description -->
            <div class="row">
                <div class="col-md-12">

                    <p> {$product['description']} </p> 
                    <br>
                    <h2>Submit your Review</h2>
                    <hr>
                    <form>
                        <h3>Rate
                            <div class="rating">
                                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                            </div>
                        </h3>
                        <textarea class="form-control" rows="3"></textarea>
                        <button type="button" class="btn btn-lg btn-success btn-block" type="submit" href="#">
                            Submit Review
                        </button>
                    </form>

                    <br>
                    <h2>Reviews</h2>
                    <hr>

                    <!-- Comments -->
					
					{foreach $reviews as $row}
                    <div class="row comment">

                        <!-- comment sample -->
                        <div class="col-sm-1">
                            <div class="thumbnail">
                                <img data-src="holder.js/140x140" class="img-responsive user-photo" alt="140x140"  src="../../img/michael_knight.jpg" data-holder-rendered="true">
                            </div><!-- /thumbnail -->
                        </div><!-- /col-sm-1 -->

                        <div class="col-sm-11">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="rate-system"> {$row['score']}
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                    </div>

                                    <strong> {$row['username']} </strong> <span class="text-muted">commented 5 days ago</span>
                                </div>
                                <div class="panel-body"> {$row['comment']}                                    
                                </div><!-- /panel-body -->
                            </div><!-- /panel panel-default -->
                        </div><!-- /col-sm-5 -->
                    </div><!-- /row --> 
					{/foreach}
                </div>
            </div>

						<!-- Reviews
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
								<button type="button" class="btn btn-lg btn-success btn-block" type="submit" href="#">
									<span class="glyphicon glyphicon-plus"></span>Add Review
								</button>
                    		</div>
						</div>  Reviews -->

					</div>
				</div>
			</div>
		</div><!-- /.col-md-9 -->
	</div>
</div>

{include file='common/footer.tpl'}
