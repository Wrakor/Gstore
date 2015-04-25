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
                                <li><a href="profile.php" class="btn btn-success btn-block">Update</a></li>
                            </ul>
                        </h2>

                        <hr class="colorgraph">

                        <div class="row">
                            <div class="col-md-3" style="text-align: center;">
                                <img data-src="holder.js/140x140" class="img-circle img-thumbnail" alt="140x140" style="width: 140px; height: 140px;" src="img/michael_knight.jpg" data-holder-rendered="true">
                                <a href="profile.php" class="btn btn-info btn-block">Change photo</a>
                            </div>
                            <div class="col-md-9">
                                <div class="table-responsive borderless">
                                    <table class="table table-hover">
                                        <tbody>

                                        <tr>
                                            <th scope="row">Name</th>
                                            <td>
                                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" tabindex="1" value="Michael">
                                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" tabindex="2" value="Knight">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Username</th>
                                            <td><input type="text" name="display_name" id="display_name" class="form-control" placeholder="Display Name" tabindex="3" value="mknight31"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email</th>
                                            <td><input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="4" value="michaelknight@gmail.com"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Password</td>
                                            <td><input type="password" name="newpassword" id="newpassword" class="form-control" placeholder="New Password" tabindex="8"></td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Country</th>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option value="1">Portugal</option>
                                                        <option value="0">Select Country</option>
                                                        <option value="2">Spain</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Address</th>
                                            <td><input type="text" name="address" id="address" class="form-control" placeholder="Address" tabindex="9" value="Rua do Heroismo,25"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">City</th>
                                            <td><input type="text" name="city" id="city" class="form-control" placeholder="City" tabindex="10" value="Porto"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">District</th>
                                            <td><input type="text" name="district" id="district" class="form-control" placeholder="District" tabindex="11" value="Porto"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Postal Code</th>
                                            <td><input type="text" name="postal_code" id="postal_code" class="form-control" placeholder="Postal Code" tabindex="12" value="4450-234"></td>
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