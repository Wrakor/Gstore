
{include file='common/header.tpl'}

{include file='common/nav.tpl'}


<div class="container" xmlns="http://www.w3.org/1999/html">
    <div class="row">

        <!-- Side menu -->
        <div class="col-md-3">
            <p class="lead">My Account</p>
            <div class="list-group side-menu">
                <a href="{$BASE_URL}pages/users/user.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt"></span>Personal Information</a>
                <a href="orderhistory.php" class="list-group-item"><span class="glyphicon glyphicon-euro"></span>Order History</a>
                <a href="wishlist.php" class="list-group-item"><span class="glyphicon glyphicon-heart"></span>Wishlist</a>
                <a href="favorites.php" class="list-group-item"><span class="glyphicon glyphicon-star"></span>Favorites</a>
                <a href="{$BASE_URL}pages/users/edituser.php" class="list-group-item active"><span class="glyphicon glyphicon-cog"></span>Settings</a>
            </div>
        </div>
        <!-- change Password modal -->
        <div class="modal fade" id="changepw" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
            <div class="modal-header">
                <h3>Change Password <span class="extra-title muted"></span></h3>
            </div>
            <div class="modal-body form-horizontal">
                <div class="control-group">
                    <label for="current_password" class="control-label">Current Password</label>
                    <div class="controls">
                        <input type="password" name="current_password">
                    </div>
                </div>
                <div class="control-group">
                    <label for="new_password" class="control-label">New Password</label>
                    <div class="controls">
                        <input type="password" name="new_password">
                    </div>
                </div>
                <div class="control-group">
                    <label for="confirm_password" class="control-label">Confirm Password</label>
                    <div class="controls">
                        <input type="password" name="confirm_password">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button href="#" class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button href="#" class="btn btn-primary" id="password_modal_save">Save changes</button>
            </div>
        </div>
</div>
            </div>

        <!-- Content -->
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-offset-1">


                    <h2>Profile <small>with your account information.</small>
                    </h2>

                    <hr class="colorgraph">

                    <div class="row">
                        <div class="col-md-3" style="text-align: center;">
                            <img id="photousr" data-src="holder.js/140x140" class="img-circle img-thumbnail" alt="140x140"  style="width: 140px; height: 140px;" src="{$BASE_URL}database/userimg/{$USERNAME}" onerror="this.src='{$BASE_URL}database/userimg/default';" data-holder-rendered="true">
                                <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
                                <input name="userfile" class="btn btn-info btn-block" id="userfile" type="file" style="display: none;"/>


                                <a class="btn btn-info btn-block" onclick="updatePhoto('{$BASE_URL}database/userimg/{$USERNAME}','{$BASE_URL}actions/users/userimageupload.php')">Change photo</a>
                                <a class="btn btn-info btn-block" data-toggle="modal"
                                   data-target="#changepw"">Change Password</a>

                            <!--<a href="profile.php" class="btn btn-info btn-block">Change photo</a>-->
                        </div>
                        <div class="col-md-9">
                            <div class="table-responsive borderless">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <th scope="row">Username</th>
                                        <td>{$data.userinfo[0].username}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Name</th>
                                        <td><input type="text" name="name" id="name" class="form-control" placeholder="Name" tabindex="1" value="{$data.userinfo[0].name}">
                                        </td>
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
                                        <th scope="row">Address</th>
                                        <div>
                                        <td><input type="text" name="address" id="address" class="form-control" placeholder="Address" tabindex="9" value="{$data.userinfo[0].address}"></td>
                                        </div>
                                    </tr>
                                        <th scope="row">Postal Code</th>
                                        <td><div class="form-group" style="width: 70px!important; display:-webkit-inline-box">
                                                <select id="postalcodeform" onchange="getCity()" class="form-control">
                                                    <option value="{$data.userinfo[0].postalcode}" selected="selected">{$data.userinfo[0].postalcode}</option>
                                                </select>
                                                <label style="margin-left: 8px;margin-right: 8px;" > - </label>
                                                <select id="postalextform" class="form-control">
                                                    <option value="{$data.userinfo[0].postalcodeextra}" selected="selected">{$data.userinfo[0].postalcodeextra}</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                            <tr>
                                <th scope="row">City</th>
                                <div>
                                    <td><label type="text" name="citylb" id="citylb" tabindex="9">{$data.userinfo[0].city}</label></td>
                                </div>
                            </tr>
                                    <tr>
                                        <th scope="row">District</th>
                                        <div>
                                            <td><label type="text" name="districlb" id="districlb"tabindex="9">{$data.userinfo[0].district}</label></td>
                                        </div>
                                    </tr>
                            <tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                        <div class="col-md-3 col-md-offset-5">
                            <a class="btn btn-success btn-block" onclick="updateUser()">Update Profile</a>
                        </div>
                    </div>



                </div>
            </div>
        </div><!-- /.col-md-9 -->

    </div><!-- /.row -->
</div><!-- /.container -->

{include file='common/footer.tpl'}
<script src="{$BASE_URL}js/script4.js"></script>
