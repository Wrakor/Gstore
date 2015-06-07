{include file='common/header.tpl'}
{include file='common/nav.tpl'}


<div class="container">
    <div class="row">

        <!-- Side menu -->
        <div class="col-md-3">
            <p class="lead">My Account</p>
            <div class="list-group side-menu">
                <a href="user.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt"></span>Personal Information</a>
                <a href="orderhistory.php" class="list-group-item"><span class="glyphicon glyphicon-euro"></span>Order History</a>
                <a href="wishlist.php" class="list-group-item active"><span class="glyphicon glyphicon-heart"></span>Wishlist</a>
                <a href="favorites.php" class="list-group-item"><span class="glyphicon glyphicon-star"></span>Favorites</a>
                <a href="settings.php" class="list-group-item"><span class="glyphicon glyphicon-cog"></span>Settings</a>
            </div>
        </div>

        <!-- Content -->
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-offset-1">

                    <h2>Wishlist <small>The games you want... badly!</small></h2>
                    <hr class="colorgraph">
                    <div class="container-fluid">
                        <div class="list-group view-modes">
                            <a class="list-group-item glyphicon glyphicon-th disabled" href=""></a>
                            <a class="list-group-item glyphicon glyphicon-th-list" href=""></a>
                            <a class="list-group-item glyphicon glyphicon-list" href=""></a>
                        </div>
                    </div>
                        {foreach $wishlist as $product}
                        <div class="media product-list">
                            <div class="media-left media-top">
                                <a href="">
                                    <img src="{$product['externallink']}" style="max-width: 90px; max-height: 90px">
                                </a>
                            </div>
                            <div class="media-body" style=" text-align: justify; text-justify: inter-word;padding-right: 25px">
                                <h4 class="media-heading">
                                    <span><a href="{$BASE_URL}/pages/products/item.php?id={$product['id']}">{$product['name']}</a> </span>
                                    {if in_array("Mac", $platforms[$product['id']])}
                                    <span class="icon-os-apple"></span>
                                    {/if}
                                    {if in_array("Windows", $platforms[$product['id']])}
                                    <span class="icon-os-win-03"></span>
                                    {/if}
                                    {if in_array("Linux", $platforms[$product['id']])}
                                        <span class="icon-os-linux"></span>
                                    {/if}
                                    <a href="{$BASE_URL}actions/users/deleteFromWishlist.php?id={$product['id']}">
                                        <span class="glyphicon glyphicon-remove pull-right" data-toggle="tooltip" data-original-title="Remove" data-placement="left"></span></a></h4>

                                <p>{$product['description']}</p>
                            </div>
                        </div>
                        {/foreach}


                </div>
            </div>
        </div><!-- /.col-md-9 -->

    </div><!-- /.row -->
</div><!-- /.container -->


{include file='common/footer.tpl'}