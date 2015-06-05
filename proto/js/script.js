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
    generate('warning', "ola trollllllllllllllz");
    generate('error', notification_html[1]);
    generate('information', notification_html[2]);
    generate('success', "ohohohho!!!");
    generate('notification');
    generate('success');
}


$(document).ready(function () {

    setTimeout(function() {
        ;
    }, 500);

});
