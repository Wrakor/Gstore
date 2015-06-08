{include file='common/header.tpl'}

{include file='common/nav.tpl'}

<!--<script type="text/javascript">

    window.onload = function() {
        var submit = document.getElementById("submitreview");

        submit.onclick = function() {
            var e = document.getElementById("rating");
            var rating = e.options[e.selectedIndex].value;
            var text = document.getElementById("textbox").value;


        }
    }
</script>-->

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
                        <li class="active">{$data.product.name}</li>
                    </ol>

                    <!-- Product Information -->

                    <h2> {$data.product.name} </h2>

                    <hr class="colorgraph">
                </div>
            </div>

            <div class="row">
                <div class="col-md-9">

                    <a href="#" class="thumbnail">
                        <img class="" src=" {$data.product.externallink}" alt="">
                    </a>
                </div><!-- /.col-md-9 -->

                <!-- Product Price and Buttons-->
                <div class="col-md-3">

                    <br>
                    <div class="text-center">

                        <h1> {$data.product.price} €</h1>
                        <h4>SCORE {$data.product.score}  / 5 <span class="glyphicon glyphicon-star"></span></h4>


                    </div>
                    <br>

                    <a href="{$BASE_URL}actions/users/addToWishlist.php?id={$data.product.id}" class="btn btn-primary btn-block" role="button"> <span class="glyphicon glyphicon-ok-circle" style="color:white"></span> Add to Wishlist</a>

                    <a href="{$BASE_URL}actions/users/addToFavorites.php?id={$data.product.id}" class="btn btn-danger btn-block" role="button"> <span class="glyphicon glyphicon-heart" style="color:white"></span> Add to Favorites</a>

                    <a href="{$BASE_URL}actions/users/addToCart.php?id={$data.product.id}" class="btn btn-success btn-block" role="button"> <span class="glyphicon glyphicon-shopping-cart" style="color:white"></span> Add to Cart</a>



                </div>

            </div>

            {foreach $data.product.platforms as $row}

                {if $row.name =="Windows"}
                    <span class="icon-os-win-03"></span>
                {/if}
                {if $row.name =="Mac"}
                    <span class="icon-os-apple"></span>
                {/if}
                {if $row.name =="Linux"}
                    <span class="icon-os-linux_1_"></span>
                {/if}



            {/foreach}
            <p>
            {foreach $data.product.categories as $row}

                <span class="badge">{$row.name}</span>




            {/foreach}
            </p>
            <!-- Product Description -->
            <div class="row">
                <div class="col-md-12">

                    <p> {$data.product.description} </p>


                    <br>




                    <!-- Submit Review -->
                    <h2>Submit your Review</h2>
                    <hr>

                    <form action="{$base_URL}../../actions/users/addReview.php?id={$data.product.id}" method="post">
                        <h3>Rate
                            <!--<div class="rating">
                                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                            </div>-->
                            <select name="rating">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select> ☆
                        </h3>
                        <textarea class="form-control" rows="3" name="description" placeholder="Type your review..."></textarea>
                        <button class="btn btn-lg btn-success btn-block" type="submit">
                            Submit Review
                        </button>
                        <!--<a href="#" id="submitreview" class="btn btn-primary btn-success btn-block" role="button"> <span class="glyphicon glyphicon-log-in" style="color:white"></span> Submit Review</a>-->
                    </form>

                    <br>

                    <!-- Reviews -->

                    <h2>Reviews</h2>
                    <hr>
                    {if empty($data.reviews)}
                        No reviews yet!
                    {/if}
                    {foreach $data.reviews as $row}
                        <div class="row comment">
                            <!-- comment sample -->
                            <div class="col-sm-1">
                                <div class="thumbnail">
                                    <img data-src="holder.js/140x140" class="img-responsive user-photo" alt="140x140"  src="{$BASE_URL}database/userimg/{$row['username']}" onerror="this.src='{$BASE_URL}database/userimg/default'" data-holder-rendered="true">
                                </div><!-- /thumbnail -->
                            </div><!-- /col-sm-1 -->

                            <div class="col-sm-11">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="rate-system">
                                            {for $var=1 to $row['score']}
                                                <span class="glyphicon glyphicon-star"></span>
                                            {/for}
                                        </div>

                                        <strong> {$row['username']} </strong> <span class="text-muted"> said:</span>
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
