<?php /* Smarty version Smarty-3.1.15, created on 2015-05-14 19:37:20
         compiled from "/opt/lbaw/lbaw1433/public_html/proto/templates/products/viewProduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2106566219554fad2bbd75a2-41543287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb4316b0691e3c868f8a3d537f3edacd1029bc99' => 
    array (
      0 => '/opt/lbaw/lbaw1433/public_html/proto/templates/products/viewProduct.tpl',
      1 => 1431621438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2106566219554fad2bbd75a2-41543287',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554fad2bd84420_49599079',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'data' => 0,
    'product' => 0,
    'reviews' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554fad2bd84420_49599079')) {function content_554fad2bd84420_49599079($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



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
										 
					<h2> <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
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

                    <button type="button" class="btn btn-lg btn-primary btn-block" type="submit" href="#">
                        <span class="glyphicon glyphicon-heart"></span> Add to Wishlist
                    </button>
                </div>

            </div>


            <!-- Product Description -->
            <div class="row">
                <div class="col-md-12">

                    <p> <?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
 </p> 
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
					
					<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                    <div class="rate-system"> <?php echo $_smarty_tpl->tpl_vars['row']->value['score'];?>

                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                    </div>

                                    <strong> <?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
 </strong> <span class="text-muted">commented 5 days ago</span>
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
