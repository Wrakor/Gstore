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

    $.getJSON("../../actions/admin/products.php?list", {}

    ).success(function( data ) {

        var table = $('#datatable').DataTable();

        table.clear();

        for (var i=0; i<data.length; i++) {
            var item = data[i];

            table.row.add([
                '<input id="input-'+item['id']+'" type="checkbox">',
                item['id'],
                (item['type'] === 'game' ) ? '<i class="fa fa-fw fa-gamepad"></i> game' : '<i class="fa fa-fw fa-cube"></i> related',
                item['name'],
                item['score'],
                item['stock'],
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
                generate('error',"An error occured! " + errorThrown);
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
                generate('error',"An error occured! " + errorThrown);
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
                generate('error',"An error occured! " + errorThrown);
            });
        });

    });

    $form.find(".table-ops").on("click",'button:last-child', function () {
        $form.hide();
        $data.show();
    });

    $form1.on("change",'select#type',function () {

        var id = $(this).children(":selected").attr("id");
        var $game = $form1.find('.game-form');
        var $related = $form1.find('.related-form');
        var $common = $form1.find('.common');

        if (id == '1') {
            $game.show();
            $common.show()
        }
        else
            $game.hide();

        if (id == '2') {
            $related.show();
            $common.show()
        }
        else
            $related.hide();

        if (id == '0')
            $common.hide();
        else
            $common.show();

        clear_selects($form1);
    });

    $form1.on("change",'select#game-category, select#game-platform, select#related-category',function () {

            var id = $(this).children(":selected").attr("id");
            var value = $(this).children(":selected").val();
            var name = $(this).attr("name");

            var $game = $(this).parent().find('.category_selection');
            var $subform = $(this).parent();

            if (id != '0' &&  !existsBadge($subform,id))
            {
                $game.append('<span class="badge" id="'+id+'">'+ value +'</span>');

                if (name == 'game-category')
                    prefix = 'gcat';
                else if (name == 'game-platform')
                    prefix = 'pcat';
                else if (name == 'related-category')
                    prefix = 'rcat';

                $subform.append('<input type="hidden" id="'+prefix+'" name="'+prefix+'[]" value="'+id+'">');
            }

            $(this).prop('selectedIndex',0);

        });

        $form1.find(".form-group").on("click",'.badge', function () {
                   id = $(this).attr("id");
                   $parent = $(this).parent().parent();

                   $parent.find('input[type="hidden"][id$="-'+id+'"]').remove();
                   $(this).remove();
                });



    $form2.on("change",'select#access',function () {

        var id = $(this).children(":selected").attr("id");
        var $extra = $form1.find('.form-client');

        if (id == '2')
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

function existsBadge($where,id) {
    return ($where.find('input[type="hidden"]#gcat-'+id).length > 0) || ($where.find('input[type="hidden"]#pcat-'+id).length > 0) || ($where.find('input[type="hidden"]#rcat-'+id).length > 0);
}

function toggleCheckbox($checkbox) {
    if ( $checkbox.is( ":checked" ) )
        $checkbox.prop( "checked", false );
    else
        $checkbox.prop( "checked", true );
}

function clean($form) {
    $form.find('.has-feedback').removeClass('has-error');
    $form.find('span.form-control-feedback').removeClass('glyphicon-remove');
    $form.find('select').prop('selectedIndex',0);
    $form.find('input').val('');
    $form.find('input[type="hidden"]').remove();
    $form.find('.category_selection').empty();
    $form.find('.game-form, .related-form, .common').hide();
}

function clear_selects($form)
{
    $form.find('.category_selection').empty();
    $form.find('input[type="hidden"]').remove();
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
    $form.find('#productname').val(json['productname']);
    $form.find('#productname').change();
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

    $( "#form-create-product" ).submit(function( event ) {

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
                generate('error',"An error occured! " + errorThrown);
        });
    });

    $(".row.form.number1 .table-ops").on('click','button:first-child',function(){
        $( "#form-create-product" ).submit();
    });

    $( "#form-edit-product" ).submit(function( event ) {

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
            generate('error',"An error occured! " + errorThrown);
        });
    });

    $(".row.form.number2 .table-ops").on('click','button:first-child',function(){
        $( "#form-edit-product" ).submit();
    });
};


$(document).ready(function() {
    $('#datatable').DataTable();
    update_table();

    setup_interaction();
    setup_submit();

});