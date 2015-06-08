var regex_name     = new RegExp(/^[a-zA-Z0-9-]+$/i);
var regex_price    = new RegExp(/^[0-9]+(.[0-9][0-9]?)+$/i);
var regex_url      = new RegExp(/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/i);

function setup(formName){

    var $form = $(formName);

    $form.parent().parent().find('.table-ops button:first-child').prop('disabled', true);
    $form.find('.has-feedback').append('<span class="glyphicon form-control-feedback"></span>');
    $form.find('input, select').each(function(){
        $(this).on('keyup change', {name:formName}, validate );
    });
}

function validate(event)
{
    var name = event.data.name;
    var $form = $(name);

    var $select  = $form.find('select.first-form');
    var option   = $select.find('option:selected').index('option');

    if (name === '#form-create-product')
    {
        if (option === 0) {

            //console.log('select - 0');

            flag( $select );
            disableButton($form);
        }
        else if (option = 1 || option === 2)
        {

            unflag( $select );

            if (
                check(regex_name, $form, '#productname') &&
                check(regex_price, $form, '#price')  &&
                check(regex_url, $form, '#url')
            )
                enableButton($form);
            else
                disableButton($form);
        }
    }

    if (name === '#form-edit-product')
    {
        if (
            check(regex_name, $form, '#productname') &&
            check(regex_price, $form, '#price')  &&
            check(regex_url, $form, '#url')
        )
            enableButton($form);
        else
            disableButton($form);
    }
}

function check(regex,$form,element) {
    var $element = $form.find(element);
    var result = regex.test( $element.val() );

    if ( result ) {
        unflag($element);
        return true;
    }
    else {
        flag($element);
        return false;
    }
}

function flag($element) {
    var $dad = $element.parent();
    $dad.removeClass('has-success');
    $dad.addClass('has-error');
    $dad.find('.form-control-feedback').removeClass('glyphicon-ok');
    $dad.find('.form-control-feedback').addClass('glyphicon-remove');
    $dad.find('.help-text').removeClass('hide');
}

function unflag($element) {
    var $dad = $element.parent();
    $dad.removeClass('has-error');
    $dad.addClass('has-success');
    $dad.find('.form-control-feedback').removeClass('glyphicon-remove');
    $dad.find('.form-control-feedback').addClass('glyphicon-ok');
    $dad.find('.help-text').addClass('hide');
}

function enableButton($form) { $form.parent().parent().find('.table-ops button:first-child').prop('disabled', false); }
function disableButton($form) { $form.parent().parent().find('.table-ops button:first-child').prop('disabled', true); }

$(document).ready(function()
{
    setup('#form-create-product');
    setup('#form-edit-product');
});