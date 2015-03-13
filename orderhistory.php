<?php include_once "open.php"; ?>
<?php include_once "nav.php"; ?>

<div class="container">
    <div class="row">

        <!-- Side menu -->
        <div class="col-md-3">
            <p class="lead">My Account</p>
            <div class="list-group side-menu">
                <a href="profile.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt"></span>Personal Information</a>
                <a href="orderhistory.php" class="list-group-item active"><span class="glyphicon glyphicon-euro"></span>Order History</a>
                <a href="wishlist.php" class="list-group-item"><span class="glyphicon glyphicon-gift"></span>Wishlist</a>
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
                                <th>Time</th>
                                <th>Order Number</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Items</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="warning">
                                <th scope="row">13-03-2015</th>
                                <td>23:05</td>
                                <td>5463</td>
                                <td>79,99€</td>
                                <td>Waiting for Shipping</td>
                                <td>2 x NERF Gun M.III<br>1 x Tomb Raider miniature collectable</td>
                            </tr>
                            <tr class="success">
                                <th scope="row">26-09-2014</th>
                                <td>11:54</td>
                                <td>2863</td>
                                <td>9,99€</td>
                                <td>Shipped</td>
                                <td>1 x Darkest Dungeon</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div><!-- /.col-md-9 -->

    </div><!-- /.row -->
</div><!-- /.container -->


<?php include_once "footer.php"; ?>
<?php include_once "close.php"; ?>