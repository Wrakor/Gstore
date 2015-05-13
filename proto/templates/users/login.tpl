<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign in</h3>
                </div>
                <div class="panel-body">
                    <form action="{$BASE_URL}actions/users/login.php" method="post" enctype="multipart/form-data" accept-charset="UTF-8" role="form">
                        <fieldset>
                            <div class="form-group has-feedback">
                                <input id="usernameLogin" class="form-control" placeholder="Username" name="username" type="text" value="{$FORM_VALUES.username}">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input id="passwordLogin" class="form-control" placeholder="Password" name="password" type="password" value="{$FORM_VALUES.password}">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                </label>
                            </div>
                            <input id="loginAccount" class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                            <button type="button" id="registbutt" class="btn btn-lg btn-primary btn-block" type="submit" href="#" data-toggle="modal" data-target="#signup">I don't have an account!</button>
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>