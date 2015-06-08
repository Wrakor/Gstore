{include file='common/header.tpl'}
{include file='common/nav.tpl'}


<div class="container">
    <div class="row">

        <!-- Side menu -->


        <!-- Content -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-1">

                    <h2>Shopping Cart <small>There are so many games... I can't decide!</small></h2>
                    <hr class="colorgraph">

                    {if count($cart) eq 0}
                        Cart is empty!<br><br>
                    {/if}
                        {foreach $cart as $product}
                        <div class="media product-list">
                            <div class="media-left media-top">
                                <a href="">
                                    <img src="{$product['externallink']}" style="max-width: 90px; max-height: 90px">
                                </a>
                            </div>
                            <div class="media-body" style=" text-align: justify; text-justify: inter-word;padding-right: 25px">
                                <h4 class="media-heading">
                                    <span><a href="{$BASE_URL}/pages/products/item.php?id={$product['id']}">{$product['name']}</a> </span>
                                    {if in_array("Mac", $platforms[$product['product_id']])}
                                    <span class="icon-os-apple"></span>
                                    {/if}
                                    {if in_array("Windows", $platforms[$product['product_id']])}
                                    <span class="icon-os-win-03"></span>
                                    {/if}
                                    {if in_array("Linux", $platforms[$product['product_id']])}
                                        <span class="icon-os-linux"></span>
                                    {/if}
                                    <a href="{$BASE_URL}actions/users/deleteFromCart.php?id={$product['id']}">
                                        <span class="glyphicon glyphicon-remove pull-right" data-toggle="tooltip" data-original-title="Remove" data-placement="left"></span></a></h4>

                                <p>{$product['description']}</p>
                            </div>


                        </div>
                        {/foreach}

                    {if count($cart) neq 0}
                        <a href="{$BASE_URL}actions/users/purchase.php" class="btn btn-success" role="button"> <span class="glyphicon glyphicon-shopping-cart" style="color:white"></span> Purchase </a>
                    {/if}

                </div>
            </div>
        </div><!-- /.col-md-9 -->

    </div><!-- /.row -->
</div><!-- /.container -->


{include file='common/footer.tpl'}