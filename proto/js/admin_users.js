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
    $table = $('#datatable');

    $data.find(".table-ops button:nth-child(1)").on("click",function () {
        $data.hide();
        clean($form1);
        $form1.show();
    });

    $data.find(".table-ops button:nth-child(2)").on("click",function () {
        $data.hide();
        clean($form2);
        $form2.show();

        $table.find('tbody tr input:checked').each(function (){
            var id = $(this).parent().parent().attr('id').substr(3);

            $form2.append('<p>id:' + id + '</p>');

            // apply here edit form for each
        });
    });

    $data.find(".table-ops button:nth-child(3)").on("click",function () {

        var button = $(this);

        $table.find('tbody tr input:checked').each(function (){
            var id = $(this).parent().parent().attr('id').substr(3);

            //generate('information','id:' + id );

            var send = $(this).serialize();
            var url  = button.attr( "action" );

            var posting = $.post( url, {active:'true', id:id}, null, 'text');

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
    });

    $data.find(".table-ops button:nth-child(4)").on("click",function () {

        var button = $(this);

        $table.find('tbody tr input:checked').each(function (){
            var id = $(this).parent().parent().attr('id').substr(3);

            //generate('information','id:' + id );

            var send = $(this).serialize();
            var url  = button.attr( "action" );

            var posting = $.post( url, {active:'false', id:id}, null, 'text');

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

    $table.find('tbody tr').on('click',function (){
        var $checkbox = $(this).find('input[type="checkbox"]');
        toggleCheckbox( $checkbox );
    });

    $table.find('thead tr input[type="checkbox"], tfoot tr input[type="checkbox"]').on('click',function () {
        var $checkboxes = $table.find('tbody tr input[type="checkbox"]');
        $checkboxes.each(function () {
            toggleCheckbox( $(this) );
        });
    });
}

function toggleCheckbox($checkbox) {
    if ( $checkbox.is( ":checked" ) )
        $checkbox.prop( "checked", false );
    else
        $checkbox.prop( "checked", true );
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
    $('#datatable').DataTable();

    setup_interaction();
    setup_submit();

});