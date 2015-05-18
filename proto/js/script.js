/*$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});

$(document).ready(function(){
    $('#login').modal(options);

    $('.datepicker').datepicker();
});*/



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

function generateAll() {
    // generate('warning', "ola trollllllllllllllz");
    // generate('error', notification_html[1]);
    //generate('information', notification_html[2]);
    generate('success', "ohohohho!!!");
//            generate('notification');
//            generate('success');
}

function checkWebStorage() {
    if(typeof(Storage) !== "undefined") {
        generate('success', "WebStorage is working!");
    } else {
        generate('Error', "Sorry! WebStorage is not supported on your browser.");
    }
}

$(document).ready(function () {

    setTimeout(function() {
        checkWebStorage();
    }, 500);

});
