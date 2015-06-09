var products = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,

    prefetch: '../../actions/products/search.php'
});

$( document ).ready(function() {

    $(".search-button").click(function() {
        $(this).toggleClass("active");

        if ( $(this).hasClass("active") )
        {
            $(".nav.navbar-nav.navbar-right li:not(:last-child)").hide();
            $(".navbar-form.navbar-right").removeClass("hide");
            $(".navbar-form.navbar-right input:not(:first-child)").focus();
        }
        else
        {
            $(".nav.navbar-nav.navbar-right li:not(:last-child)").show();
            $(".navbar-form.navbar-right").addClass("hide");
        }
    });

    $( "#typeahead" ).keyup(function(e) {
        var str = $( "#typeahead" ).val();
        var domain = "/~lbaw1433/final/pages/products/list.php?name=";
        var url = domain + str;

        if (e.keyCode == 13)
            $(location).attr("href", url);
    });

    $('#typeahead-products .typeahead').typeahead(null, {
        name: 'products',
        source: products
    });
});

