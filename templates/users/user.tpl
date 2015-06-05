{include file='common/header.tpl'}

{include file='common/nav.tpl'}

<div class="container">
    <div class="row">
        <!-- Side menu -->
        <div class="col-md-3">
            <p class="lead">My Account</p>
            <div class="list-group side-menu">
                <a href="{$BASE_DIR}pages/users/user.php" class="list-group-item active"><span class="glyphicon glyphicon-list-alt"></span>Personal Information</a>
                <a href="orderhistory.php" class="list-group-item"><span class="glyphicon glyphicon-euro"></span>Order History</a>
                <a href="wishlist.php" class="list-group-item"><span class="glyphicon glyphicon-heart"></span>Wishlist</a>
                <a href="favorites.php" class="list-group-item"><span class="glyphicon glyphicon-star"></span>Favorites</a>
                <a href="{$BASE_URL}pages/users/edituser.php" class="list-group-item"><span class="glyphicon glyphicon-cog"></span>Settings</a>
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

                            <img data-src="holder.js/140x140" class="img-circle img-thumbnail" alt="140x140" style="width: 140px; height: 140px;" src="{$BASE_URL}database/userimg/{$USERNAME}" onerror="this.src='{$BASE_URL}database/userimg/default';" data-holder-rendered="true">
                        </div>
                        <div class="col-md-9">
                            <ul class="list-unstyled">
                                <li><a href="{$BASE_URL}pages/users/edituser.php"><span  style="padding-left: 85%" class="glyphicon glyphicon-pencil"></span></a></li>
                            </ul>
                            <div class="table-responsive borderless">
                                <table class="table table-hover">
                                    <tbody>

                                    <tr>
                                        <th scope="row">Name</th>
                                        <td>{$data.userinfo[0].name}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Username</th>
                                        <td>{$data.userinfo[0].username}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td>{$data.userinfo[0].email}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Country</th>
                                        <td>Portugal</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Address</th>
                                        <td>{$data.userinfo[0].address}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">City</th>
                                        <td>{$data.userinfo[0].city}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">District</th>
                                        <td>{$data.userinfo[0].district}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Postal Code</th>
                                        <td>{$data.userinfo[0].postalcode}  - {$data.userinfo[0].postalcodeextra}</td>
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