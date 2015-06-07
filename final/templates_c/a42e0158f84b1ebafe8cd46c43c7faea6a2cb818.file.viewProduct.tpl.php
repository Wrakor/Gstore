<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 00:44:57
         compiled from "/Users/jrsc/BitBucket/lbaw1433/src/final/templates/products/viewProduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21017479345574c969be03e8-25287806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a42e0158f84b1ebafe8cd46c43c7faea6a2cb818' => 
    array (
      0 => '/Users/jrsc/BitBucket/lbaw1433/src/final/templates/products/viewProduct.tpl',
      1 => 1433715726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21017479345574c969be03e8-25287806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'data' => 0,
    'base_URL' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5574c96a3eaca1_85063113',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5574c96a3eaca1_85063113')) {function content_5574c96a3eaca1_85063113($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/products/list.php?<?php if (count($_smarty_tpl->tpl_vars['data']->value['product']['platforms'])>0) {?>games<?php } else { ?>related<?php }?>"><?php if (count($_smarty_tpl->tpl_vars['data']->value['product']['platforms'])>0) {?>Games<?php } else { ?>Related Products<?php }?></a></li>
                        <li class="active"><?php echo $_smarty_tpl->tpl_vars['data']->value['product']['name'];?>
</li>
                    </ol>

                    <!-- Product Information -->
										 
					<h2> <?php echo $_smarty_tpl->tpl_vars['data']->value['product']['name'];?>
 </h2>

                    <hr class="colorgraph">
                </div>
            </div>

            <div class="row">
                <div class="col-md-9">

                    <a href="#" class="thumbnail">
                        <img class="" src=" <?php echo $_smarty_tpl->tpl_vars['data']->value['product']['externallink'];?>
" alt="">
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

                        <h1> <?php echo $_smarty_tpl->tpl_vars['data']->value['product']['price'];?>
 €</h1>
                        <h4>SCORE <?php echo $_smarty_tpl->tpl_vars['data']->value['product']['score'];?>
  / 5 <span class="glyphicon glyphicon-star"></span></h4>


                    </div>
                    <br>
                    <button type="button" class="btn btn-lg btn-success btn-block" type="submit" href="#">
                        <span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart
                    </button>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/addToWishlist.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['product']['id'];?>
" class="btn btn-primary btn-block" role="button"> <span class="glyphicon glyphicon-ok-circle" style="color:white"></span> Add to Wishlist</a>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/addToFavorites.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['product']['id'];?>
" class="btn btn-danger btn-block" role="button"> <span class="glyphicon glyphicon-heart" style="color:white"></span> Add to Favorites</a>
                </div>

            </div>


            <!-- Product Description -->
            <div class="row">
                <div class="col-md-12">

                    <p> <?php echo $_smarty_tpl->tpl_vars['data']->value['product']['description'];?>
 </p>
                    <br>

                    <!-- Submit Review -->
                    <h2>Submit your Review</h2>
                    <hr>

                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_URL']->value;?>
../../actions/users/addReview.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['product']['id'];?>
" method="post">
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
                            </select>
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
					<?php if (empty($_smarty_tpl->tpl_vars['data']->value['reviews'])) {?>
                    No reviews yet!
					<?php }?>
					<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['reviews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
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
                                    <div class="rate-system">
                                        <?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? $_smarty_tpl->tpl_vars['row']->value['score']+1 - (1) : 1-($_smarty_tpl->tpl_vars['row']->value['score'])+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 1, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
                                            <span class="glyphicon glyphicon-star"></span>
                                        <?php }} ?>
                                    </div>

                                    <strong> <?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
 </strong> <span class="text-muted"> said:</span>
                                </div>
                                <div class="panel-body"> <?php echo $_smarty_tpl->tpl_vars['row']->value['comment'];?>

                                </div><!-- /panel-body -->
                            </div><!-- /panel panel-default -->
                        </div><!-- /col-sm-5 -->
                    </div><!-- /row --> 
					<?php } ?>
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

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
