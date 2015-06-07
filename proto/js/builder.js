// Function that renders the list items from our records
function view1Writer(rowIndex, record, columns, cellWriter) {

    /* var template = $('#view1-template').html();
     var view = Handlebars.compile(template);  
     generate('success','Success: template compiled!');

     return view(record);*/

    /*<a class="col-sm-4 col-lg-4 col-md-4 product-list view-1 hvr-bounce-to-top" href="">
     <div class="thumbnail thumbnail-full">
     <img src="http://vignette2.wikia.nocookie.net/video151/images/b/bc/Borderlands_2_-_Ultimate_Vault_Hunter_Upgrade_Pack_2_-_The_Raid_of_Digistruct_Peak_Walkthrough/revision/latest?cb=20130904162339" alt="">
     </div>

     <h3>Price €</h3>
     <h4>Title</h4>
     <p>Description text</p>
     <div class="platforms">
     <span class="icon-os-win-03"></span>
     <span class="icon-os-apple"></span>
     <span class="icon-os-linux_1_"></span>
     </div>
     </a>


     */
    console.log(record);
    var cssClass = "col-sm-4 col-lg-4 col-md-4 product-list view-1", li;


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
    record.price = $item.find('h3').text();

    /* var $li = $(li),
     $caption = $li.find('.caption');
     record.thumbnail = $li.find('.thumbnail-image').html();
     record.caption = $caption.html();
     record.label = $caption.find('h3').text();
     record.description = $caption.find('p').text();
     record.color = $li.data('color');*/
}
function generateList(){



    var request = {'request':'products'};

    $.getJSON("../../actions/products/request.php", request, function(data, status){
        // generate('success','Success: ajax request!');



        //var template = $('#view1-template').html();
        //var view = Handlebars.compile(template);  
        //generate('success','Success: template compiled!');

        //$("#data").append (view(data));
        console.log("records: ");

        console.log(data);
        console.log("fim");

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



        //alert("Data: " + data + "\nStatus: " + status);
    });


};

function generateCategoryList(cat){



    var request = {'request':'products'};

    $.getJSON('../../actions/products/request.php?cat='+cat+'', request, function(data, status){
        // generate('success','Success: ajax request!');


        //var template = $('#view1-template').html();
        //var view = Handlebars.compile(template);  
        //generate('success','Success: template compiled!');

        //$("#data").append (view(data));
        console.log("records: ");

        console.log(data);
        console.log("fim");

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



        //alert("Data: " + data + "\nStatus: " + status);
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

    //alert(getUrlParameter('cat'));



    //alert(location.pathname.substring(location.pathname.lastIndexOf("/") + 1));
    if(location.pathname.substring(location.pathname.lastIndexOf("/") + 1).split('#')[0] == "list.php") {

        if (getUrlParameter('cat') == undefined) {

            //alert("normal");

            generateList();
        } else {

            //alert(getUrlParameter('cat'));
            generateCategoryList(getUrlParameter('cat'));

        }
    }

});