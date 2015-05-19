{include file='common/header.tpl'}
{include file='common/nav.tpl'}

<div class="container">
    <div class="row">

        <!-- Side menu -->
        <div class="col-md-3">
            <p class="lead">My Account</p>
            <div class="list-group side-menu">
                <a href="profile.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt"></span>Personal Information</a>
                <a href="orderhistory.php" class="list-group-item active"><span class="glyphicon glyphicon-euro"></span>Order History</a>
                <a href="wishlist.php" class="list-group-item"><span class="glyphicon glyphicon-heart"></span>Wishlist</a>
                <a href="favorites.php" class="list-group-item"><span class="glyphicon glyphicon-star"></span>Favorites</a>
                <a href="settings.php" class="list-group-item"><span class="glyphicon glyphicon-cog"></span>Settings</a>
            </div>
        </div>

        <!-- Content -->
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-offset-1">
                    <h2>Order History <small>with your purchase information.</small></h2>
                    <hr class="colorgraph">

                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Order Number</th>
                                <th>Total (€)</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            {foreach $buyorders as $order}
                            {if $order['name'] eq "Awaiting Shipment"}
                            <tr class="warning">
                            {else}
                            <tr class="success">
                            {/if}
                                <th scope="row">{$order['orderdate']}</th>
                                <td>{$order['id']}</td>
                                <td>{$order['totalprice']}</td>
                                <td>{$order['name']}</td>
                            </tr>
                            {/foreach}
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div><!-- /.col-md-9 -->

    </div><!-- /.row -->
</div><!-- /.container -->

{include file='common/footer.tpl'}