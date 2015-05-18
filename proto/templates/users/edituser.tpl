
{include file='common/header.tpl'}

{include file='common/nav.tpl'}
<div class="container" xmlns="http://www.w3.org/1999/html">
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
                            <li><a class="btn btn-success btn-block" onclick="updateUser()">Update</a></li>
                        </ul>
                    </h2>

                    <hr class="colorgraph">

                    <div class="row">
                        <div class="col-md-3" style="text-align: center;">
                            <img data-src="holder.js/140x140" class="img-circle img-thumbnail" alt="140x140" style="width: 140px; height: 140px;" src="{$BASE_URL}database/userimg/{$USERNAME}" onerror="this.src='{$BASE_URL}database/userimg/default';" data-holder-rendered="true">
                            <form enctype="multipart/form-data" action="{$BASE_URL}actions/users/userimageupload.php" method="POST">
                                <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
                                <input name="userfile" class="btn btn-info btn-block" id="userfile" type="file" style="display: none;"/>
                                <input type="submit" class="btn btn-info btn-block" value="Upload" name="submit" />
                            </form>
                            <!--<a href="profile.php" class="btn btn-info btn-block">Change photo</a>-->
                        </div>
                        <div class="col-md-9">
                            <div class="table-responsive borderless">
                                <table class="table table-hover">
                                    <tbody>

                                    <tr>
                                        <th scope="row">Name</th>
                                        <td>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" tabindex="1" value="{$data.userinfo[0].name}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Username</th>
                                        <td>{$data.userinfo[0].username}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td><input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="4" value="{$data.userinfo[0].email}"></td>
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
                                        <td><input type="text" name="address" id="address" class="form-control" placeholder="Address" tabindex="9" value="{$data.userinfo[0].address}"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">City</th>
                                        <td><input type="text" name="city" id="city" class="form-control" placeholder="City" tabindex="10" value="{$data.userinfo[0].city}"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">District</th>
                                        <td><input type="text" name="district" id="district" class="form-control" placeholder="District" tabindex="11" value="{$data.userinfo[0].district}"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Postal Code</th>
                                        <td><input type="text" name="postal_code" id="postal_code" class="form-control" placeholder="Postal Code" tabindex="12" value="{$data.userinfo[0].postalcode}"></td>
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

{include file='common/footer.tpl'}