$(document).ready(function(){
    $.ajax({
        url : "../../actions/users/getDistrict.php",
        type: "POST",
        success: function (dataCheck) {
            parse = JSON.parse(dataCheck);
            for(var i=0;i<parse.length;i++)
                $('#districtformselect').append('<option value=\"parse[i]["name"]\">'+parse[i]["name"]+'</option>');
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
});

function pad2(number) {
    if(number < 10)
    return '00'+ number;
    if(number < 100)
    return '0' + number;
    if(number < 1000)
    return ''+number;
}





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

function sendFile(file,url){


     $.ajax({
        url: url,
        type: 'POST',
        data: file,
         async: false,
         cache: false,
         contentType: false,
         processData: false,
         success: function () {
             alert('Form Submitted!');
         }
    });

}


function updatePhoto(urlimg,urlajax){
    document.getElementById("userfile").click();

    document.getElementById('userfile').onchange = function() {
        var file = this.files[0];

        var fd = new FormData();
        fd.append("userfile", file);
        // These extra params aren't necessary but show that you can include other data.
        var xhr = new XMLHttpRequest();
        xhr.open('POST', urlajax, true);
        xhr.onload = function(e) {
            if (this.status == 200) {
                $("#photousr").attr("src", urlimg +"?rand_number=" + Math.random());
            }
        };
       xhr.send(fd)

       // sendFile(this.files[0],urlajax);
    };
}