
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="normalModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="{$BASE_URL}actions/users/register.php" method="post" enctype="multipart/form-data">
                <h2>Or Sign Up <small>It's free and always will be.</small></h2>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group has-feedback">
                            <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" value="{$FORM_VALUES.first_name}">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group has-feedback">
                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" value="{$FORM_VALUES.last_name}">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3" value="{$FORM_VALUES.display_name}">
                    <span class="glyphicon form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" value="{$FORM_VALUES.email}">
                    <span class="glyphicon form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group has-feedback" onchange="getCities()">
                    <select id="districtformselect" class="form-control">
                        <option value="District" selected="selected" value="{$FORM_VALUES.district}">District</option>
                    </select>
                </div>
                    </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group has-feedback">
                            <select id="cityformselect" class="form-control">
                                <option value="City" selected="selected" value="{$FORM_VALUES.city}">City</option>
                            </select>
                        </div>
                    </div>
                </div>
               <div class="form-group  has-feedback">
                    <input type="text" name="address" id="address" class="form-control input-lg" placeholder="Address" tabindex="4" value="{$FORM_VALUES.address}">
                    <span class="glyphicon form-control-feedback"></span>
               </div>

               <!-- <div class="form-group has-feedback">
                    <input type="text" name="postalcode" id="postalcode" class="form-control input-lg" placeholder="Postal Code" tabindex="4" value="{$FORM_VALUES.postalcode}">
                    <span class="glyphicon form-control-feedback"></span>
                </div> -->


                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group has-feedback" onchange="getCities()">
                            <select id="postalcode" class="form-control">
                                <option value="PostalCode" selected="selected" value="{$FORM_VALUES.postalcode}">Postal Code</option>
                            </select>
                        </div>
                    </div>
                    <span> - </span>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group has-feedback">
                            <select id="postalext" class="form-control">
                                <option value="City" selected="selected" value="{$FORM_VALUES.postalcodeext}">Ext</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="row" id="contries">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group has-feedback">
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" value="{$FORM_VALUES.password}">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group has-feedback">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6" value="{$FORM_VALUES.password_confirmation}">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>
                    </div>
                </div>
                <hr class="colorgraph">
                <div class="row text-center">
                    <div class="col-md-12"><input id="registeraccount" type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                </div>
                <br>
            </form>

        </div>
    </div>
</div> <!-- /.modal for #signup -->
