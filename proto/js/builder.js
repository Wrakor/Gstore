// Function that renders the list items from our records
function view1Writer(rowIndex, record, columns, cellWriter) {

    /* var template = $('#view1-template').html();
     var view = Handlebars.compile(template);  
     generate('success','Success: template compiled!');

     return view(record);*/

    console.log(record);
    var cssClass = "col-md-4 product-list", li;


    if (rowIndex % 3 === 0) { cssClass += ' first'; }
    li = '<li class="' + cssClass + '"><div class="thumbnail"><div class="thumbnail-image"><img src=\" ' + record.externallink + ' \"> </div><div class="caption">' + record.price + '</div></div></li>';
    return li;


}

// Function that creates our records from the DOM when the page is loaded
function view1Reader(index, item, record) {

    var $item = $(item);

    record.externallink    = $item.find('.thumbnail-image').html();
    record.name  = $item.find('h4').text();
    record.price = $item.find('h3').text();

    /* var $li = $(li),
     $caption = $li.find('.caption');
     record.thumbnail = $li.find('.thumbnail-image').html();
     record.caption = $caption.html();
     record.label = $caption.find('h3').text();
     record.description = $caption.find('p').text();
     record.color = $li.data('color');*/
}

$(document).ready(function(){

    $("#lol").click(function(){

        var request = {'request':'products'};

        $.getJSON("../../actions/products/request.php", request, function(data, status){
            generate('success','Success: ajax request!');

            console.log("teste");
            console.log(data);

            //var template = $('#view1-template').html();
            //var view = Handlebars.compile(template);  
            generate('success','Success: template compiled!');

            //$("#data").append (view(data));

            //console.log(records);


            $('#uldata').dynatable({
                table: {
                    bodyRowSelector: 'li'
                },
                dataset: {
                    records: data,
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



            //alert("Data: " + data + "\nStatus: " + status);
        });
    });

});