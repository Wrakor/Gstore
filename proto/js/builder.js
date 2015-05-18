// Function that renders the list items from our records
function view1Writer(rowIndex, record, columns, cellWriter) {

    var template = $('#view1-template').html();
    var view = Handlebars.compile(template);  
    generate('success','Success: template compiled!');

    return view(record);
}

// Function that creates our records from the DOM when the page is loaded
function view1Reader(index, item, record) {

    var $item = $(item);

    record.id    = $item.find('.thumbnail-image').html();
    record.name  = $item.find('h4').text();
    record.price = $item.find('h3').text();
}

$(document).ready(function(){

    $("#lol").click(function(){

        var request = {'request':'products'};

        $.getJSON("../../actions/products/request.php", request, function(data, status){
            generate('success','Success: ajax request!');
            console.log(data);

            var template = $('#view1-template').html();
            var view = Handlebars.compile(template);  
            generate('success','Success: template compiled!');

            $("#data").append (view(data));

            console.log(records);

/*
            $('#data').dynatable({
                table: {
                    bodyRowSelector: 'a.view1'
                },
                dataset: {
                    records: records,
                    perPageDefault: 3,
                    perPageOptions: [3, 6]
                },
                writers: {
                    _rowWriter: view1Writer
                },
                readers: {
                    _rowReader: view1Reader
                },

                params: {
                    records: data
                },

                features: {
                    paginate: true,
                    search: true,
                    recordCount: true,
                    perPageSelect: true
                }
            });
        */


            //alert("Data: " + data + "\nStatus: " + status);
        });
    });

});