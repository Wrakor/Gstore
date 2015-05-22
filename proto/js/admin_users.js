function generate(type, text) {

    var n = noty({
        text        : text,
        type        : type,
        dismissQueue: true,
        layout      : 'topRight',
        closeWith   : ['hover','click'],
        theme       : 'relax',
        maxVisible  : 10,
        animation   : {
            open  : 'animated bounceInRight',
            close : 'animated bounceOutRight',
            easing: 'swing',
            speed : 500
        }
    });
    console.log('html: ' + n.options.id);
}

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
    $( "#form-create-user" ).submit(function( event ) {

        event.preventDefault();

        var $form = $( this ),
            send = $(this).serialize();
            url  = $form.attr( "action" );

        var posting = $.post( url, send, null, 'text');

        posting.done(function( data ) {
            if ('Success' === data.substr( 0, 7 )) {
                generate('success', data);
            }
            else {
                generate('warning', data);
            }
        }).fail( function(xhr, textStatus, errorThrown) {
                generate('error',"An error occured!");
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