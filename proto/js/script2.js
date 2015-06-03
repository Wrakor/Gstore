function enableError($param) {
    if( !$param.parent('div').hasClass("has-error") )
        $param.parent('div').addClass("has-error");

    if( $param.parent('div').hasClass("has-success") )
        $param.parent('div').removeClass("has-success");

    if( !$param.next('span.glyphicon').hasClass("glyphicon-remove") )
        $param.next('span.glyphicon').addClass("glyphicon-remove");

    if( $param.next('span.glyphicon').hasClass("glyphicon-ok") )
        $param.next('span.glyphicon').removeClass("glyphicon-ok");
}

function disableError($param) {
    if( $param.parent('div').hasClass("has-error") )
        $param.parent('div').removeClass("has-error");

    if( !$param.parent('div').hasClass("has-success") )
        $param.parent('div').addClass("has-success");

    if( $param.next('span.glyphicon').hasClass("glyphicon-remove") )
        $param.next('span.glyphicon').removeClass("glyphicon-remove");

    if( !$param.next('span.glyphicon').hasClass("glyphicon-ok") )
        $param.next('span.glyphicon').addClass("glyphicon-ok");
}

function isValidName(name) {
    var pattern = new RegExp(/^[a-zA-Z ]+$/i);
    return pattern.test(name);
};

function isValidEmailAddress(name) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(name);
};

function isValidAddress(name) {
    var pattern = new RegExp(/^[a-zA-Z0-9 ]+$/i);
    return pattern.test(name);
};

function isValidPostalcode(name) {
    var pattern = new RegExp(/^[0-9]{4}[-][0-9]{3}$/i);
    return pattern.test(name);
};

function isValidPassword(name) {
    var pattern = new RegExp(/[a-zA-Z0-9]{6,}$/i);
    return pattern.test(name);
};


function validateFirstName() {
    var fname = $('#first_name').val();

    if ( !isValidName( fname ) || fname.length < 3 )
    {
        //console.log("JQuery Validation first name with at least 3 caracters" );

        enableError( $('#first_name') );
    }
    else
    {
        disableError( $('#first_name') );
        return 1;
    }

    return 0;
};

function validateLastName() {

    var lname = $('#last_name').val();

    if ( !isValidName( lname ) || lname.length < 3)
    {
        //console.log("JQuery Validation last name with at least 3 caracters" );

        enableError( $('#last_name') );
    }
    else
    {
        disableError( $('#last_name') );
        return 1;
    }

    return 0;
};

function validateUsername() {

    var usr = $('#display_name').val();
    var flag = 0;

    if (usr.length < 3 || usr.length > 20)
    {
        //console.log("JQuery Validation username needs to be between 3-20 characters: " );

        enableError( $('#display_name') );
    }
    else
    {
        $.ajax({
            type: "POST",
            url : "check_username.php",
            data: { 'username': usr }
        }).success(function(data)
        {
            if(data == "0")
            {
                //console.log("Ajax request: There is no user with this username!");

                disableError( $('#display_name') );
            }
            else
            {
                //console.log("Ajax request: There is another user with this username!");

                enableError( $('#display_name') );
            }
        });
    }

    return flag;
};

function validateEmail() {

    var email = $('#email').val();
    var flag=0;

    if ( !isValidEmailAddress( email ) )
    {
        //console.log("JQuery Validation username needs to be between 3-20 characters: " );

        enableError( $('#email') );
    }
    else
    {
        $.ajax({
            type: "POST",
            url : "check_email.php",
            data: { 'email': email }
        }).success(function(data)
        {
            if(data == "0")
            {
                //console.log("Ajax request: There is no user with this email!");

                disableError( $('#email') );
            }
            else
            {
                //console.log("Ajax request: There is another user with this email!");

                enableError( $('#email') );
            }
        });
    }

    console.log(flag==1);
    return flag;
};

function validateAddress() {

    var address = $('#address').val();

    if ( !isValidAddress( address ) || address.length < 3 )
    {
        //console.log("JQuery Validation address" );

        enableError( $('#address') );
    }
    else
    {
        disableError( $('#address') );
        return 1;
    }

    return 0;
};


function validatePostalcode() {

    var postalcode = $('#postalcode').val();

    if ( !isValidPostalcode( postalcode ) || postalcode.length != 8 )
    {
        //console.log("JQuery Validation postalcode" );

        enableError( $('#postalcode') );
    }
    else
    {
        disableError( $('#postalcode') );
        return 1;
    }

    return 0;
};


function validatePass1() {

    var pass1 = $('#password').val();
    var pass2 = $('#password_confirmation').val();
    var n = pass1.localeCompare(pass2);

    if ( !isValidPassword( pass1 ) )
    {
        //console.log("JQuery Validation password" );

        enableError( $('#password') );
    }
    else
    {
        disableError( $('#password') );

        if ( !isValidPassword( pass2 ) || n!=0 )
        {
            //console.log("JQuery Validation password2" );

            enableError( $('#password_confirmation') );
        }
        else
        {
            disableError( $('#password_confirmation') );
            return 1;
        }
    }

    return 0;
};

function validatePass2() {

    var pass2 = $('#password_confirmation').val();
    var pass1 = $('#password').val();
    var n = pass1.localeCompare(pass2);

    if ( !isValidPassword( pass2 ) || !isValidPassword( pass1 ) || n!=0 )
    {
        //console.log("JQuery Validation password2" );

        enableError( $('#password_confirmation') );
    }
    else
    {
        disableError( $('#password_confirmation') );
        return 1;
    }

    return 0;
};

function validateRegister() {

    console.log(
        validateFirstName() + " " +
        validateLastName() + " " +
        //validateUsername() + " " + nao da para avaliar asyncronamente
        //validateEmail() + " " +
        validateAddress() + " " +
        validatePostalcode() + " " +
        validatePass1() + " " +
        validatePass2()
    );

    if (
        validateFirstName() == 1
        &&  validateLastName() == 1
        //&&  validateUsername() == 1
        //&&  validateEmail() == 1
        &&  validateAddress() == 1
        &&  validatePostalcode() == 1
        &&  validatePass1() == 1
        &&  validatePass2() == 1
    )
    {
        $('#registeraccount').removeProp('disabled');
        return 1;
    }

    $('#registeraccount').prop('disabled', true);

    return 0;
};


function validateUsernameLogin() {

    var usr = $('#usernameLogin').val();

    if (usr.length < 3 || usr.length > 20)
    {
        //console.log("JQuery Validation username needs to be between 3-20 characters: " );

        enableError( $('#usernameLogin') );
    }
    else
    {
        disableError( $('#usernameLogin') );
        return 1;
    }

    return 0;
};

function validatePasswordLogin() {

    var pass1 = $('#passwordLogin').val();

    if ( !isValidPassword( pass1 ) )
    {
        //console.log("JQuery Validation password" );

        enableError( $('#passwordLogin') );
    }
    else
    {
        disableError( $('#passwordLogin') );
        return 1;
    }

    return 0;
};

function validateLogin() {

    console.log(
        validateUsernameLogin() + " " +
        validatePasswordLogin()
    );

    if (
        validateUsernameLogin() == 1
        &&  validatePasswordLogin() == 1
    )
    {
        $('#loginAccount').removeProp('disabled');
        return 1;
    }

    $('#loginAccount').prop('disabled', true);

    return 0;
};

$(document).ready(function()
{

    $('#loginAccount').prop('disabled', true);
    $('#registeraccount').prop('disabled', true);

    if(window.location.hash == "#regist") { $("#registbutt").click(); }

    $('#first_name').bind('input', function()
    {
        validateFirstName();
        validateRegister();
    });

    $('#last_name').bind('input', function()
    {
        validateLastName();
        validateRegister();
    });

    $('#display_name').bind('input', function()
    {
        validateUsername();
        validateRegister();
    });

    $('#email').bind('input', function()
    {
        validateEmail();
        validateRegister();
    });

    $('#address').bind('input', function()
    {
        validateAddress();
        validateRegister();
    });

    $('#postalcode').bind('input', function()
    {
        validatePostalcode();
        validateRegister();
    });

    $('#password').bind('input', function()
    {
        validatePass1();
        validateRegister();
    });

    $('#password_confirmation').bind('input', function()
    {
        validatePass2();
        validateRegister();
    });


    $('#usernameLogin').bind('input', function()
    {
        validateUsernameLogin();
        validateLogin();
    });
    $('#passwordLogin').bind('input', function()
    {
        validatePasswordLogin();
        validateLogin();
    });


});



function getDistricts(){
$.ajax({
    url : "../../actions/users/getDistrict.php",
    type: "POST",
    success: function (dataCheck) {
        parse = JSON.parse(dataCheck);
        for(var i=0;i<parse.length;i++)
            $('#districtformselect').append('<option value=\"'+parse[i]["name"]+'\">'+parse[i]["name"]+'</option>');
    }
});

$.ajax({
    url : "../../actions/users/getCities.php",
    type: "POST",
    data : {district :  $("#districtformselect option:selected").val()},
    success: function (dataCheck) {
        parse = JSON.parse(dataCheck);
        for(var i=0;i<parse.length;i++)
            $('#cityformselect').append('<option value=\"parse[i]["name"]\">'+parse[i]["name"]+'</option>');
    }
});

$.ajax({
    url : "../../actions/users/getCityPostalCodes.php",
    type: "POST",
    data : {city :  $("#cityformselect option:selected").val()},
    success: function (dataCheck) {
        parse = JSON.parse(dataCheck);
        for(var i=0;i<parse.length;i++)
            $('#postalcodeformselect').append('<option value=\"parse[i]["name"]\">'+parse[i]["code"]+'</option>');
    }
});

for(var i=0;i<=999;i++){
    var num = pad2(i);
    $('#postalcodeextraformselect').append('<option value=\"num\">'+num+'</option>');
}
}

function pad2(number) {
    if(number < 10)
        return '00'+ number;
    if(number < 100)
        return '0' + number;
    if(number < 1000)
        return ''+number;
}

function getCities(){
    $.ajax({
        url : "../../actions/users/getCities.php",
        type: "POST",
        data : {district :  $("#districtformselect option:selected").val()},
        success: function (dataCheck) {
            alert("oi");
            parse = JSON.parse(dataCheck);
            for(var i=0;i<parse.length;i++)
                $('#cityformselect').append('<option value=\"'+parse[i]["name"]+'\">'+parse[i]["name"]+'</option>');

        }
    });
}
