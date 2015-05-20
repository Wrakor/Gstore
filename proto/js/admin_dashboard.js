var template_sold = $('#sold-template').html();
var view_sold = Handlebars.compile(template_sold);  

var template_transactions= $('#transactions-template').html();
var view_transactions = Handlebars.compile(template_transactions);  


function update_all() {

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

    if ( $('#sold').hasClass('more') )
        $.getJSON("../../actions/admin/dashboard.php?sold&more", function (data) {

            $('#sold').empty();
            $('#sold').append(view_sold(data));

            //console.log(data);
        });
    else
        $.getJSON("../../actions/admin/dashboard.php?sold", function (data) {

            $('#sold').empty();
            $('#sold').append(view_sold(data));

            //console.log(data);
        });

    if ( $('#sold').hasClass('more') )
        $.getJSON("../../actions/admin/dashboard.php?transactions&more", function(data){

            $('#transactions').empty();
            $('#transactions').append(view_transactions(data));

            //console.log(data);
        });
    else
        $.getJSON("../../actions/admin/dashboard.php?transactions", function(data){

            $('#transactions').empty();
            $('#transactions').append(view_transactions(data));

            //console.log(data);
        });



}

$( document ).ready(function() {

    $("#sold-view-all").click(function(){
        if ( $("#sold").hasClass("more") ) {

            $("#sold").removeClass("more");
            $("#sold-view-all").html('View More <i class="fa fa-arrow-circle-right"></i>');
        }
        else {
            $("#sold").addClass("more");
            $("#sold-view-all").html('View Less <i class="fa fa-arrow-circle-left"></i>');
        }
    });

    $("#transactions-view-all").click(function(){
        if ( $("#transactions").hasClass("more") ) {

            $("#transactions").removeClass("more");
            $("#transactions-view-all").html('View More <i class="fa fa-arrow-circle-right"></i>');
        }
        else {
            $("#transactions").addClass("more");
            $("#transactions-view-all").html('View Less <i class="fa fa-arrow-circle-left"></i>');
        }
    });

    setInterval(update_all, 3000);

});

