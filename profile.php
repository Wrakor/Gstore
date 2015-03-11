<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>
<body>
<?php include_once "nav.php"; ?>


<!-- Page Content -->
<div class="container">
    <div class="col-md-3">
        <p class="lead">My Account</p>
        <div class="list-group side-menu">
            <a href="profile.php" class="list-group-item active"><span class="glyphicon glyphicon-list-alt"></span>Personal Information</a>
            <a href="shoppinghistory.php" class="list-group-item"><span class="glyphicon glyphicon-euro"></span>Shopping History</a>
            <a href="wishlist.php" class="list-group-item"><span class="glyphicon glyphicon-gift"></span>Wishlist</a>
            <a href="favorites.php" class="list-group-item"><span class="glyphicon glyphicon-star"></span>Favorites</a>
            <a href="settings.php" class="list-group-item"><span class="glyphicon glyphicon-cog"></span>Settings</a>
        </div>
    </div>

    <div class="col-md-9">
        <div class="row">
            <div class="col-md-offset-1">
                <form role="form">
                    <h2>Profile <small>with your account information.</small></h2>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                            </div>
                        </div>
                    </div>
                    <hr class="colorgraph">

                    <div class="form-group">
                        <select class="form-control input-lg">
                            <option value="">Select Country</option>
                            <option value="">Portugal</option>
                            <option value="">Spain</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" name="address" id="address" class="form-control input-lg" placeholder="Address" tabindex="6">
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" id="city" class="form-control input-lg" placeholder="City" tabindex="7">
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="district" id="district" class="form-control input-lg" placeholder="District" tabindex="5">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="postal_code" id="postal_code" class="form-control input-lg" placeholder="Postal Code" tabindex="6">
                            </div>
                        </div>
                    </div>

                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12"><a href="#" class="btn btn-success btn-block btn-lg">Update</a></div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div><!-- /.row -->
</div><!-- /.container -->


<?php include_once "footer.php"; ?>
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>