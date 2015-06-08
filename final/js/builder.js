function view1Writer(rowIndex, record, columns, cellWriter) {
    var cssClass = "col-sm-4 col-lg-4 col-md-4 product-list view-1 hvr-grow", li;
    if (rowIndex % 3 === 0) { cssClass += ' first'; }
    li = '<li><a class="'+cssClass+' " href="/proto/pages/products/item.php?id='+record.id+'">';
    li += '<div class="thumbnail thumbnail-full">';
    li += '<img src=\"' + record.externallink + ' " alt="'+record.description+'" \"></div>';
    li += '<h3>'+record.price +'€</h3>';
    li += '<h4 style="height: 40px;">'+record.name +'</h4>';
    li += '<p>'+record.description+'</p>';
    li += ' <div class="platforms">';
    for(var i= 0; i<record.platforms.length; i++){
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

function view2Writer(rowIndex, record, columns, cellWriter) {
    var cssClass = "col-sm-12 col-lg-12 col-md-12 product-list view-2 hvr-glow", li;
    if (rowIndex % 3 === 0) { cssClass += ' first'; }
    li = '<li><a class="'+cssClass+' " style="margin-bottom: 2%;" href="/proto/pages/products/item.php?id='+record.id+'">';
    li+= '<div style="  height: 98px;" class="thumbnail thumbnail-full">';
    li+= '<img style="  height: 98px;" src="' + record.externallink + ' " alt="'+record.description+'" \"></div>';
    li+= '<h3>'+record.price+'€</h3>';
    li+= '<h4>'+record.name+'</h4>';
    li+= '<p>'+record.description+'</p>';
    li+= '<div class="platforms">';
    for(var i= 0; i<record.platforms.length; i++){
        if(record.platforms[i].name=="Windows"){
            li += '<span class="icon-os-win-03"></span>';
        }else if(record.platforms[i].name=="Mac"){
            li +='<span class="icon-os-apple"></span>';
        }else if(record.platforms[i].name=="Linux"){
            li +='<span class="icon-os-linux_1_"></span>';
        }
    }
    li += '</div></a></li>';
    return li;
}
function view3Writer(rowIndex, record, columns, cellWriter) {


    var cssClass = "col-sm-12 col-lg-12 col-md-12 product-list view-2 hvr-glow", li;
    if (rowIndex % 3 === 0) { cssClass += ' first'; }
    li += '<tr>';
    li += '<td>'+record.name+'</td><td>';
    for(var i= 0; i<record.platforms.length; i++){
        if(record.platforms[i].name=="Windows"){
            li += '<span class="icon-os-win-03"></span>';
        }else if(record.platforms[i].name=="Mac"){
            li +='<span class="icon-os-apple"></span>';
        }else if(record.platforms[i].name=="Linux"){
            li +='<span class="icon-os-linux_1_"></span>';
        }
    }
    li +=' </td><td>';
    for(var i=0; i<5;i++){
        if (i>=Math.round(record.score)){
            li+= '<span class="glyphicon glyphicon-star-empty"></span>';
        }else{
            li += '<span class="glyphicon glyphicon-star"></span>';
        }
    }

    li += '</td><td>'+record.price+'€</td></tr>';
    return li;
}




// Function that creates our records from the DOM when the page is loaded
function view1Reader(index, item, record) {
    var $item = $(item);
    record.externallink    = $item.find('.thumbnail-image').html();
    record.name  = $item.find('h4').text();
    record.price = $item.find('h3').number();
}

function generateList(){
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
    })
    $.getJSON("../../actions/products/request.php", request, function(data, status){
        $('#uldata').dynatable({
            table: {
                bodyRowSelector: 'li'
            },
            dataset: {
                records: data,
                perPageDefault: 6,
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
        })
    });
};


function generateList2(){
    var request = {'request':'products'};
    $('#uldata2').bind('dynatable:init', function(e, dynatable) {
        $('#sorting-by-price-button2').click( function(e) {
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
        $('#sorting-by-name-button2').click( function(e) {
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
        $('#uldata2').dynatable({
            table: {
                bodyRowSelector: 'li'
            },
            dataset: {
                records: data,
                perPageDefault: 5,
                perPageOptions: [3, 6]

            },
            writers: {
                _rowWriter: view2Writer
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
        })
    });
};

function generateList3(){
    var request = {'request':'products'};
    $('#uldata3').bind('dynatable:init', function(e, dynatable) {
        $('#sorting-by-price-button2').click( function(e) {
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
        $('#sorting-by-name-button2').click( function(e) {
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
        $('#uldata3').dynatable({
            table: {
                bodyRowSelector: 'tbody'
            },
            dataset: {
                records: data,
                perPageDefault: 10,
                perPageOptions: [3, 6]

            },
            writers: {
                _rowWriter: view3Writer
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
        })
    });
};

function generateCategoryList3(cat){
    var request = {'request':'products'};
    $('#uldata3').bind('dynatable:init', function(e, dynatable) {
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
        $('#uldata3').dynatable({
            table: {
                bodyRowSelector: 'li'
            },
            dataset: {
                records: data,
                perPageDefault: 10,
                perPageOptions: [3, 6]
            },
            writers: {
                _rowWriter: view3Writer
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

function generateCategoryList2(cat){
    var request = {'request':'products'};
    $('#uldata2').bind('dynatable:init', function(e, dynatable) {
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
        $('#uldata2').dynatable({
            table: {
                bodyRowSelector: 'li'
            },
            dataset: {
                records: data,
                perPageDefault: 10,
                perPageOptions: [3, 6]
            },
            writers: {
                _rowWriter: view2Writer
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
    }else if(location.pathname.substring(location.pathname.lastIndexOf("/") + 1).split('#')[0] == "list2.php"){
        if (getUrlParameter('cat') == undefined) {
            generateList2();
        } else {
            generateCategoryList2(getUrlParameter('cat'));
        }
    }else if(location.pathname.substring(location.pathname.lastIndexOf("/") + 1).split('#')[0] == "list3.php"){
        if (getUrlParameter('cat') == undefined) {
            generateList3();
        } else {
            generateCategoryList3(getUrlParameter('cat'));
        }
    }
});