var template_sold = $('#sold-template').html();
var view_sold = Handlebars.compile(template_sold);  

var template_transactions= $('#transactions-template').html();
var view_transactions = Handlebars.compile(template_transactions);  


function update_mostSold() {

    $.getJSON("../../actions/admin/dashboard.php?online", function(data){

        $('#online').empty();
        $('#online').append(JSON.parse(data['count']));

        //console.log(data);
    });

    $.getJSON("../../actions/admin/dashboard.php?today", function(data){

        $('#today').empty();
        $('#today').append(JSON.parse(data['count']));

        //console.log(data);
    });

    $.getJSON("../../actions/admin/dashboard.php?orders", function(data){

        $('#orders').empty();
        $('#orders').append(JSON.parse(data['count']));

        //console.log(data);
    });


    $.getJSON("../../actions/admin/dashboard.php?sold", function(data){

        $('#sold').empty();
        $('#sold').append(view_sold(data));

        //console.log(data);
    });

    $.getJSON("../../actions/admin/dashboard.php?transactions", function(data){

        $('#transactions').empty();
        $('#transactions').append(view_transactions(data));

        //console.log(data);
    });

}

$( document ).ready(function() {

    setInterval(update_mostSold, 5000);

});

