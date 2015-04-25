<?php include_once "templates/common/open.php"; ?>
<?php include_once "templates/common/nav.php"; ?>

<div class="container">
    <div class="row">

        <!-- Side menu -->
        <div class="col-md-3">
            <p class="lead">My Account</p>
            <div class="list-group side-menu">
                <a href="profile.php" class="list-group-item active"><span class="glyphicon glyphicon-list-alt"></span>Personal Information</a>
                <a href="orderhistory.php" class="list-group-item"><span class="glyphicon glyphicon-euro"></span>Order History</a>
                <a href="wishlist.php" class="list-group-item"><span class="glyphicon glyphicon-heart"></span>Wishlist</a>
                <a href="favorites.php" class="list-group-item"><span class="glyphicon glyphicon-star"></span>Favorites</a>
                <a href="settings.php" class="list-group-item"><span class="glyphicon glyphicon-cog"></span>Settings</a>
            </div>
        </div>

        <!-- Content -->
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-offset-1">

                    <h2>Profile <small>with your account information.</small>
                        <ul class="view-modes list-inline pull-right">
                            <li><a href="editprofile.php"><span class="glyphicon glyphicon-pencil"></span></a></li>
                        </ul>
                    </h2>

                    <hr class="colorgraph">

                    <div class="row">
                        <div class="col-md-3" style="text-align: center;">
                            <img data-src="holder.js/140x140" class="img-circle img-thumbnail" alt="140x140" style="width: 140px; height: 140px;" src="img/michael_knight.jpg" data-holder-rendered="true">
                        </div>
                        <div class="col-md-9">
                            <div class="table-responsive borderless">
                                <table class="table table-hover">
                                    <tbody>

                                    <tr>
                                        <th scope="row">Name</th>
                                        <td>Michael Knight</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Username</th>
                                        <td>mknight31</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td>michaelknight@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Country</th>
                                        <td>Portugal</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Address</th>
                                        <td>Rua do Heroismo,25</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">City</th>
                                        <td>Porto</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">District</th>
                                        <td>Porto</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Postal Code</th>
                                        <td>4450-234</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>



                </div>
            </div>
        </div><!-- /.col-md-9 -->

    </div><!-- /.row -->
</div><!-- /.container -->


<?php include_once "templates/common/footer.php"; ?>
<?php include_once "templates/common/close.php"; ?>