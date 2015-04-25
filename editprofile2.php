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
                    <a href="wishlist.php" class="list-group-item"><span class="glyphicon glyphicon-gift"></span>Wishlist</a>
                    <a href="favorites.php" class="list-group-item"><span class="glyphicon glyphicon-star"></span>Favorites</a>
                    <a href="settings.php" class="list-group-item"><span class="glyphicon glyphicon-cog"></span>Settings</a>
                </div>
            </div>

            <!-- Content -->
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-offset-1">

                        <form role="form">
                            <h2>Edit your Profile <small>be sure to fill in all of the fields.</small></h2>
                            <hr class="colorgraph">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" value="Michael">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" tabindex="2" value="Knight">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="display_name" id="display_name" class="form-control" placeholder="Display Name" tabindex="3" value="mknight31">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="4" value="michaelknight@gmail.com">
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="oldpassword" id="oldpassword" class="form-control input-lg" placeholder="Old Password" tabindex="5">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="oldpassword_confirmation" id="oldpassword_confirmation" class="form-control input-lg" placeholder="Confirm Old Password" tabindex="6">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="7">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="8">
                                    </div>
                                </div>
                            </div>
                            <hr class="colorgraph">

                            <div class="form-group">
                                <select class="form-control input-lg">
                                    <option value="1">Portugal</option>
                                    <option value="0">Select Country</option>
                                    <option value="2">Spain</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" name="address" id="address" class="form-control input-lg" placeholder="Address" tabindex="9" value="Rua do Heroismo,25">
                            </div>
                            <div class="form-group">
                                <input type="text" name="city" id="city" class="form-control input-lg" placeholder="City" tabindex="10" value="Porto">
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="district" id="district" class="form-control input-lg" placeholder="District" tabindex="11" value="Porto">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="postal_code" id="postal_code" class="form-control input-lg" placeholder="Postal Code" tabindex="12" value="4450-234">
                                    </div>
                                </div>
                            </div>

                            <hr class="colorgraph">

                            <div class="row confirm">
                                <div class="col-xs-12"><a href="profile.php" class="btn btn-success btn-block btn-lg">Update</a></div>
                                <div class="col-xs-12"><a href="profile.php" class="btn btn-danger btn-block btn-lg">Cancel</a></div>
                            </div>
                        </form>

                    </div>
                </div>
            </div><!-- /.col-md-9 -->

        </div><!-- /.row -->
    </div><!-- /.container -->


<?php include_once "templates/common/footer.php"; ?>
<?php include_once "templates/common/close.php"; ?>