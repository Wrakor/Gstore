function toggleForm() {

    $(".row.data .table-ops a:first-child, .row.form .table-ops button:last-child").on("click",function () {
        if ( $(".row.data").hasClass("hide") )
        {
            $(".row.form").addClass("hide");
            $(".row.data").removeClass("hide");
        }
        else
        {
            $('.row.form .form-client').addClass("hide");
            $(".row.form select").prop('selectedIndex',0);
            $(".row.form input").val('');
            $(".row.form").removeClass("hide");
            $(".row.data").addClass("hide");
        }
    });

    $(".row.form select#access").change(function () {

        var id = $(this).children(":selected").attr("id");

        if (id == '1')
            $(".row.form .form-client.hide").removeClass("hide");
        else
            $('.row.form .form-client').addClass("hide");
    });
};

function setup_submit()
{
    //Callback handler for form submit event
    $( "#form-create-user" ).submit(function( event ) {

        // Stop form from submitting normally
        event.preventDefault();

        // Get some values from elements on the page:
        var $form = $( this ),
            send = $(this).serialize();
            url  = $form.attr( "action" );

        // Send the data using post
        var posting = $.post( url , send );

        // Put the results in a div
        posting.done(function( data ) {
            console.log(data);
        });
    });

    $(".row.form .table-ops button:first-child").on('click',function(){
        $( "#form-create-user" ).submit();
    });
};


$(document).ready(function() {
    $('#example').DataTable();

    toggleForm();
    setup_submit();

});