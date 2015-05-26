function isJson(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

function update_table() {

    $('#table-template-placeholder').empty();

    $.getJSON("../../actions/admin/users.php?userList", {}

    ).success(function( data ) {

        var table = $('#datatable').DataTable();

        table.clear();

        for (var i=0; i<data.length; i++) {
            var item = data[i];

            table.row.add([
                '<input id="input-'+item['id']+'" type="checkbox">',
                item['id'],
                (item['access'] == null ) ? 'Client' : item['access'],
                item['email'],
                item['username'],
                item['registered'],
                item['online'],
                item['active']
            ]).draw();

        }

    }).always(function(){
            var $newRow = $('#table-template-placeholder').find('tr:not([id])');
            $newRow.each(function(){
                var id = $(':nth-child(2)', this).html();
                var active = $(this).find(':last').html();
                $(this).attr('id',"id-"+active);
                $(this).addClass("active-"+active);
            });

    });

};

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
    //console.log('html: ' + n.options.id);
}

function setup_interaction() {

    $data  = $('.row.data');
    $form  = $('.row.form');
    $form1 = $('.row.form.number1');
    $form2 = $('.row.form.number2');
    $table = $('#datatable');

    $data.find(".table-ops").on("click",'button:nth-child(1)', function () {
        $data.hide();
        clean($form1);
        $form1.show();
    });

    $data.find(".table-ops").on("click", 'button:nth-child(2)',function () {

        var button = $(this);

        $table.find('tbody tr input:checked').slice(0,1).each(function (){
            var id = $(this).attr('id').substr(6);

            //generate('information','id:' + id );

            var send = $(this).serialize();
            var url  = button.attr( "action" );

            var posting = $.post( url, {edit:'true', id:id}, null, 'text');

            posting.success(function( data ) {
                if ( isJson(data) ) {
                    //generate('success', data);

                    $data.hide();
                    clean($form2);
                    fill($form2,data);
                    $form2.show();
                }
                else {
                    generate('warning', data);
                }
            }).error( function(xhr, textStatus, errorThrown) {
                generate('error',"An error occured!");
            });

        });
    });

    $data.find(".table-ops").on("click", 'button:nth-child(3)', function () {

        var button = $(this);

        $table.find('tbody tr input:checked').each(function (){
            var id = $(this).attr('id').substr(6);

            //generate('information','id:' + id );

            var send = $(this).serialize();
            var url  = button.attr( "action" );

            var posting = $.post( url, {active:'true', id:id}, null, 'text');

            posting.success(function( data ) {
                if ('Success' === data.substr( 0, 7 )) {
                    generate('success', data);
                    update_table();
                }
                else {
                    generate('warning', data);
                }
            }).error( function(xhr, textStatus, errorThrown) {
                generate('error',"An error occured!");
            });
        });
    });

    $data.find(".table-ops").on("click",'button:nth-child(4)', function () {

        var button = $(this);

        $table.find('tbody tr input:checked').each(function (){
            var id = $(this).attr('id').substr(6);

            //generate('information','id:' + id );

            var send = $(this).serialize();
            var url  = button.attr( "action" );

            var posting = $.post( url, {active:'false', id:id}, null, 'text');

            posting.success(function( data ) {
                if ('Success' === data.substr( 0, 7 )) {
                    generate('success', data);
                    update_table();
                }
                else {
                    generate('warning', data);
                }
            }).error( function(xhr, textStatus, errorThrown) {
                generate('error',"An error occured!");
            });
        });

    });

    $form.find(".table-ops").on("click",'button:last-child', function () {
        $form.hide();
        $data.show();
    });

    $form1.on("change",'select#access',function () {

        var id = $(this).children(":selected").attr("id");
        var $extra = $form1.find('.form-client');

        if (id == '1')
            $extra.show();
        else
            $extra.hide();
    });

    $form2.on("change",'select#access',function () {

        var id = $(this).children(":selected").attr("id");
        var $extra = $form2.find('.form-client');

        if (id == '1')
            $extra.show();
        else
            $extra.hide();
    });

    $table.find('tbody').on('click', 'tr',function (e){
        if (e.target.type == "checkbox") {
            e.stopPropagation();
        }
        else {
            //console.log($(this));
            var $checkbox = $(this).find('input[type="checkbox"]');
            toggleCheckbox($checkbox);
        }
    });

    $table.find('thead tr, tfoot tr').on('click','input[type="checkbox"]',function () {
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

function fill($form,data) {

    var json = JSON.parse(data);
    var index;

    if (json['access'] == null)
        index=1;
    else {

        index = 0;

        $form.find('#access option').each(function(){
            var value = $(this).val();
            if (value == json['access'])
                index = $(this).attr('id');
        });
    }

    $form.find('#access').prop('selectedIndex',index);
    $form.find('#access').change();
    $form.find('#access').prop('disabled', true);

    $form.find('h2 small').html('id: '+json['id']);
    $form.find('#username').val(json['username']);
    $form.find('#username').change();
    $form.find('#email').val(json['email']);
    $form.find('#email').change();

    $form.find('#name').val(json['name']);
    $form.find('#name').change();
    $form.find('#address').val(json['address']);
    $form.find('#address').change();
    $form.find('#postal').val(json['postal']);
    $form.find('#postal').change();

    $form.find('#id').val(json['id']);
}

function setup_submit()
{
    $data  = $('.row.data');
    $form  = $('.row.form');
    $form1 = $('.row.form.number1');
    $form2 = $('.row.form.number2');
    $table = $('#datatable');

    $( "#form-create-user" ).submit(function( event ) {

        event.preventDefault();

        var $form = $( this ),
            send = $(this).serialize();
            url  = $form.attr( "action" );

        var posting = $.post( url, send, null, 'text');

        posting.success(function( data ) {
            if ('Success' === data.substr( 0, 7 )) {
                generate('success', data);
                update_table();

                $form1.hide();
                clean($form1);
                $data.show();
            }
            else {
                generate('warning', data);
            }
        }).error( function(xhr, textStatus, errorThrown) {
                generate('error',"An error occured!");
        });
    });

    $(".row.form.number1 .table-ops").on('click','button:first-child',function(){
        $( "#form-create-user" ).submit();
    });

    $( "#form-edit-user" ).submit(function( event ) {

        event.preventDefault();

        var $form = $( this ),
            send = $(this).serialize();
        url  = $form.attr( "action" );

        var posting = $.post( url, send, null, 'text');

        posting.success(function( data ) {
            if ('Success' === data.substr( 0, 7 )) {
                generate('success', data);
                update_table();

                $form2.hide();
                clean($form2);
                $data.show();
            }
            else {
                generate('warning', data);
            }
        }).error( function(xhr, textStatus, errorThrown) {
            generate('error',"An error occured!");
        });
    });

    $(".row.form.number2 .table-ops").on('click','button:first-child',function(){
        $( "#form-edit-user" ).submit();
    });
};


$(document).ready(function() {
    $('#datatable').DataTable();
    update_table();

    setup_interaction();
    setup_submit();

});