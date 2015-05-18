function updateUser(){

    var name = $('#name').val();
    var email = $('#email').val();
    var password = $('#newpassword').val();
    var country = $('#country').val();
    var address = $('#address').val();
    var city = $('#city').val();
    var district = $('#district').val();
    var postalcode=$('#postalcode').val();

    var data = {name:name,email:email,password:password,country:country,address:address,city:city,district:district,postalcode:postalcode};

    $.ajax({
        url : "../../actions/users/updateuser.php",
        type: "POST",
        data : data
    });

}