var regex_username = new RegExp(/^[a-zA-Z0-9]{2,}$/i);
var regex_name     = new RegExp(/^[a-zA-Z]+([ ][a-zA-Z]+)*$/i);
var regex_email    = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
var regex_address  = new RegExp(/^[a-zA-Z]+([ ][a-zA-Z0-9]+)*$/i);
var regex_postal   = new RegExp(/^[0-9]{4}[-][0-9]{3}$/i);
var regex_password = new RegExp(/[a-zA-Z0-9]{6,}$/i);
var regex_empty    = new RegExp(/^$/i);


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

    if (name === '#form-create-user')
    {
        var $select = $form.find('select');
        var option  = $select.find('option:selected').index('option');

        if (option === 0) {

            //console.log('select - 0');

            flag( $select );
            disableButton($form);
        }
        else if (option === 1)
        {
            //console.log('select - 1');

            unflag( $select );

            if (
                check(regex_username, $form, '#username') &&
                check(regex_email, $form, '#email')       &&
                check(regex_password, $form, '#password') &&
                check(regex_name, $form, '#first')        &&
                check(regex_name, $form, '#last')         &&
                check(regex_address, $form, '#address')   &&
                check(regex_postal, $form, '#postal')

            )
                enableButton($form);
            else
                disableButton($form);
        }
        else if (option > 1)
        {
            //console.log('select - ' + option);

            unflag( $select );

            if (
                check(regex_name, $form, '#username')     &&
                check(regex_email, $form, '#email')       &&
                check(regex_password, $form, '#password')
            )
                enableButton($form);
            else
                disableButton($form);
        }

    }

    if (name === '#form-edit-user')
    {
        var $select = $form.find('select');
        var option  = $select.find('option:selected').index('option');

        if (option === 0) {

            //console.log('select - 0');

            flag( $select );
            disableButton($form);
        }
        else if (option === 1)
        {
            //console.log('select - 1');

            unflag( $select );

            if (
                check(regex_username, $form, '#username') &&
                check(regex_email, $form, '#email')       &&
                (check(regex_password, $form, '#password') || check(regex_empty, $form, '#password')) &&
                check(regex_name, $form, '#name')         &&
                check(regex_address, $form, '#address')   &&
                check(regex_postal, $form, '#postal')

            )
                enableButton($form);
            else
                disableButton($form);
        }
        else if (option > 1)
        {
            //console.log('select - ' + option);

            unflag( $select );

            if (
                check(regex_name, $form, '#username')     &&
                check(regex_email, $form, '#email')       &&
                (check(regex_password, $form, '#password') || check(regex_empty, $form, '#password'))
            )
                enableButton($form);
            else
                disableButton($form);
        }

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
    setup('#form-create-user');
    setup('#form-edit-user');
});