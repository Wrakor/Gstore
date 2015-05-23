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

function setup_interaction() {

    $data  = $('.row.data');
    $form  = $('.row.form');
    $form1 = $('.row.form.number1');
    $form2 = $('.row.form.number2');

    $data.find(".table-ops a:nth-child(1)").on("click",function () {
        $data.hide();
        clean($form1);
        $form1.show();
    });

    $data.find(".table-ops a:nth-child(2)").on("click",function () {
        $data.hide();
        clean($form2);
        $form2.show();
    });

    $form.find(".table-ops button:last-child").on("click",function () {
        $form.hide();
        $data.show();
    });

    $form1.find("select#access").on("change",function () {

        var id = $(this).children(":selected").attr("id");
        var $extra = $form1.find('.form-client');

        if (id == '1')
            $extra.show();
        else
            $extra.hide();
    });

    $form2.find("select#access").on("change",function () {

        var id = $(this).children(":selected").attr("id");
        var $extra = $form2.find('.form-client');

        if (id == '1')
            $extra.show();
        else
            $extra.hide();
    });
}

function clean($form) {
    $form.find('select').prop('selectedIndex',0);
    $form.find('input').val('');
    $form.find('.form-client').hide();
}

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

    setup_interaction();
    setup_submit();

});