
{include file='common/header.tpl'}

{include file='common/nav.tpl'}


<div class="container" xmlns="http://www.w3.org/1999/html">
    <div class="row">

        <!-- Side menu -->
        <div class="col-md-3">
            <p class="lead">My Account</p>
            <div class="list-group side-menu">
                <a href="{$BASE_URL}pages/users/user.php" class="list-group-item active"><span class="glyphicon glyphicon-list-alt"></span>Personal Information</a>
                <a href="orderhistory.php" class="list-group-item"><span class="glyphicon glyphicon-euro"></span>Order History</a>
                <a href="wishlist.php" class="list-group-item"><span class="glyphicon glyphicon-heart"></span>Wishlist</a>
                <a href="favorites.php" class="list-group-item"><span class="glyphicon glyphicon-star"></span>Favorites</a>
            </div>
        </div>
        <!-- change Password modal -->
        <div class="modal fade" id="changepw"  aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
            <div class="modal-header">
                <h3>Change Password <span class="extra-title muted"></span></h3>
            </div>
            <div class="modal-body form-horizontal">
                <div class="control-group has-feedback">
                    <label for="current_password" class="control-label">Current Password</label>
                    <div class="controls">
                        <input type="password" class="form-control" id="current_password" name="current_password">
                    </div>
                </div>
                <div class="control-group">
                    <label for="new_password" class="control-label">New Password</label>
                    <div class="controls has-feedback">
                        <input type="password" class ="form-control" id="password" name="new_password">
                    </div>
                </div>
                <div class="control-group">
                    <label for="confirm_password" class="control-label">Confirm Password</label>
                    <div class="controls has-feedback">
                        <input type="password" class="form-control" id="password_confirmation" name="confirm_password">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button href="#" class="btn" data-dismiss="modal" aria-hidden="true" onclick="clearChangePWModal()">Close</button>
                <button href="#" class="btn btn-primary" id="password_modal_save" onclick="updatePassword()">Save changes</button>
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
                                <a class="btn btn-info btn-block" data-toggle="modal" data-target="#changepw" onclick="bindPasswordFields();">Change Password</a>

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
                                        <td class="has-feedback"><input type="text" name="name" id="name" oninput="validateName();validateUpdateButton();" class="form-control" placeholder="Name" tabindex="1" value="{$data.userinfo[0].name}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td class="has-feedback"><input type="email" oninput="validateEmail2();validateUpdateButton();" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="4" value="{$data.userinfo[0].email}"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Address</th>
                                        <div>
                                        <td class="has-feedback"><input type="text" oninput="validateAddress();validateUpdateButton();" name="address" id="address" class="form-control" placeholder="Address" tabindex="9" value="{$data.userinfo[0].address}"></td>
                                        </div>
                                    </tr>
                                        <th scope="row">Postal Code</th>
                                        <td><div class="form-group col-md-6" style="display:-webkit-inline-box">
                                                <select id="postalcodeform" onchange="getCity();validatePostalCode();validateUpdateButton();" class="form-control">
                                                    <option value="{$data.userinfo[0].postalcode}" selected="selected">{$data.userinfo[0].postalcode}</option>
                                                </select>
                                                <label class="col-md-3" > - </label>
                                                <select id="postalextform" onchange="validatePostalCode();validateUpdateButton();" class="form-control">
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
                            <button class="btn btn-success btn-block" id="updatebtn" onclick="updateUser()">Update Profile</button>
                        </div>
                    </div>



                </div>
            </div>
        </div><!-- /.col-md-9 -->

    </div><!-- /.row -->
</div><!-- /.container -->

{include file='common/footer.tpl'}
<script src="{$BASE_URL}js/script4.js"></script>
