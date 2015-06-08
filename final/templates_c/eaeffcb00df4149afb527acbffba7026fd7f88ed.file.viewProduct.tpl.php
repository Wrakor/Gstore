<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 22:03:32
         compiled from "C:\xampp\htdocs\lbaw\final\templates\products\viewProduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93865575c9b8e9c5d3-27861034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaeffcb00df4149afb527acbffba7026fd7f88ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\final\\templates\\products\\viewProduct.tpl',
      1 => 1433793804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93865575c9b8e9c5d3-27861034',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5575c9b8f1d0a6_67721236',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'data' => 0,
    'base_URL' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575c9b8f1d0a6_67721236')) {function content_5575c9b8f1d0a6_67721236($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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

                    <br>
                    <div class="text-center">

                        <h1> <?php echo $_smarty_tpl->tpl_vars['data']->value['product']['price'];?>
 €</h1>
                        <h4>SCORE <?php echo $_smarty_tpl->tpl_vars['data']->value['product']['score'];?>
  / 5 <span class="glyphicon glyphicon-star"></span></h4>


                    </div>
                    <br>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/addToWishlist.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['product']['id'];?>
" class="btn btn-primary btn-block" role="button"> <span class="glyphicon glyphicon-ok-circle" style="color:white"></span> Add to Wishlist</a>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/addToFavorites.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['product']['id'];?>
" class="btn btn-danger btn-block" role="button"> <span class="glyphicon glyphicon-heart" style="color:white"></span> Add to Favorites</a>
                    <ngcart-addtocart  id="<?php echo $_smarty_tpl->tpl_vars['data']->value['product']['id'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['data']->value['product']['name'];?>
" price="<?php echo $_smarty_tpl->tpl_vars['data']->value['product']['price'];?>
" quantity="1" quantity-max="30" data="item">Add to Cart</ngcart-addtocart>
                    <ngcart-checkout service="log">Checkout</ngcart-checkout>


                </div>

            </div>
            <ngcart-cart> </ngcart-cart>

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
                                    <img data-src="holder.js/140x140" class="img-responsive user-photo" alt="140x140"  src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
database/userimg/<?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
database/userimg/default'" data-holder-rendered="true">
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
