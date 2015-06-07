// Function that renders the list items from our records
function view1Writer(rowIndex, record, columns, cellWriter) {

    console.log(record);
    var cssClass = "col-sm-4 col-lg-4 col-md-4 product-list view-1 hvr-grow", li;


    if (rowIndex % 3 === 0) { cssClass += ' first'; }
    li = '<li >'
    li += '<a class="' + cssClass + '" href="/proto/pages/products/item.php?id='+record.id+'">';
    li += '<div class="thumbnail">';
    li += '<img src=\" ' + record.externallink + ' \"></div>';
    li += '<h3>'+record.price +'€</h3>';
    li += '<h4>'+record.name +'</h4>';
    li += ' <div class="platforms">';
    //li += '<h4>'+record.platforms.length +'</h4>';
    for(var i= 0; i<record.platforms.length; i++){
        //li += '<h4>'+record.platforms[i].name +'</h4>';
        if(record.platforms[i].name=="Windows"){
            li += '<span class="icon-os-win-03"></span>';
        }else if(record.platforms[i].name=="Mac"){
            li +='<span class="icon-os-apple"></span>';
        }else if(record.platforms[i].name=="Linux"){
            li +='<span class="icon-os-linux_1_"></span>';
        }

    }
li += '</div>';


    for(var i=0; i<5;i++){
        if (i>=Math.round(record.score)){
            li+= '<span class="glyphicon glyphicon-star-empty"></span>';
        }else{
            li += '<span class="glyphicon glyphicon-star"></span>';
        }

    }

    li += '</a></li>';


    return li;

}

// Function that creates our records from the DOM when the page is loaded
function view1Reader(index, item, record) {

    var $item = $(item);

    record.externallink    = $item.find('.thumbnail-image').html();
    record.name  = $item.find('h4').text();
    record.price = $item.find('h3').number();


    /* var $li = $(li),
     $caption = $li.find('.caption');
     record.thumbnail = $li.find('.thumbnail-image').html();
     record.caption = $caption.html();
     record.label = $caption.find('h3').text();
     record.description = $caption.find('p').text();
     record.color = $li.data('color');*/
}

function priceSort(a, b, attr, direction) {

    // Assuming we've created a separate function
    // to get the average RGB value from an image.
    // (see source for example above for getAverageRGB function)



       var comparison = parseInt(a.price) - parseInt(b.price);

    return direction > 0 ? comparison : -comparison;
};


function generateList(){



    var request = {'request':'products'};

    $('#uldata')

        .bind('dynatable:init', function(e, dynatable) {

            $('#sorting-by-price-button').click( function(e) {

                dynatable.sorts.clear();

                if(!dynatable.bool| dynatable.bool == undefined) {

                    dynatable.sorts.add('price', 1) // 1=ASCENDING, -1=DESCENDING
                    dynatable.bool = true;
                }else{
                    dynatable.sorts.add('price', -1) // 1=ASCENDING, -1=DESCENDING
                    dynatable.bool = false;
                }
                dynatable.process();
                e.preventDefault();
            });
            $('#sorting-by-name-button').click( function(e) {

                dynatable.sorts.clear();

                if(!dynatable.bool| dynatable.bool == undefined) {

                    dynatable.sorts.add('name', 1) // 1=ASCENDING, -1=DESCENDING
                    dynatable.bool = true;
                }else{
                    dynatable.sorts.add('name', -1) // 1=ASCENDING, -1=DESCENDING
                    dynatable.bool = false;
                }
                dynatable.process();
                e.preventDefault();
            });

    })



    $.getJSON("../../actions/products/request.php", request, function(data, status){


        $('#uldata')


            .dynatable({
            table: {
                bodyRowSelector: 'li'
            },
            dataset: {
                records: data,
                perPageDefault: 10,
                perPageOptions: [3, 6]

            },
            writers: {
                _rowWriter: view1Writer
            },
            readers: {
                _rowReader: view1Reader,
                price: function(el, record) {
                    return Number(el.innerHTML) || 0;
                }
            },

            params: {
                records: "games"
            },

            features: {
                paginate: true,
                search: true,
                recordCount: true,
                perPageSelect: false
            }
        });



        //alert("Data: " + data + "\nStatus: " + status);
    });


};

function generateCategoryList(cat){

    var request = {'request':'products'};

    $('#uldata').bind('dynatable:init', function(e, dynatable) {

        $('#sorting-by-price-button').click( function(e) {

            dynatable.sorts.clear();

            if(!dynatable.bool| dynatable.bool == undefined) {

                dynatable.sorts.add('price', 1) // 1=ASCENDING, -1=DESCENDING
                dynatable.bool = true;
            }else{
                dynatable.sorts.add('price', -1) // 1=ASCENDING, -1=DESCENDING
                dynatable.bool = false;
            }
            dynatable.process();
            e.preventDefault();
        });
        $('#sorting-by-name-button').click( function(e) {

            dynatable.sorts.clear();

            if(!dynatable.bool| dynatable.bool == undefined) {

                dynatable.sorts.add('name', 1) // 1=ASCENDING, -1=DESCENDING
                dynatable.bool = true;
            }else{
                dynatable.sorts.add('name', -1) // 1=ASCENDING, -1=DESCENDING
                dynatable.bool = false;
            }
            dynatable.process();
            e.preventDefault();
        });

    });

    $.getJSON('../../actions/products/request.php?cat='+cat+'', request, function(data, status){

        $('#uldata').dynatable({
            table: {
                bodyRowSelector: 'li'
            },
            dataset: {
                records: data,
                perPageDefault: 10,
                perPageOptions: [3, 6]
            },
            writers: {
                _rowWriter: view1Writer
            },
            readers: {
                _rowReader: view1Reader
            },

            params: {
                records: "games"
            },

            features: {
                paginate: true,
                search: true,
                recordCount: true,
                perPageSelect: false
            }
        });



    });


};

function getUrlParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++)
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam)
        {
            return sParameterName[1];
        }
    }
}

$(document).ready(function(){




    if(location.pathname.substring(location.pathname.lastIndexOf("/") + 1).split('#')[0] == "list.php") {
        if (getUrlParameter('cat') == undefined) {
            generateList();
        } else {
            generateCategoryList(getUrlParameter('cat'));
        }
    }
});