//###### MY CODE STARTS HERE



var records = [
    {
        "name": "Jogo1",
        "os": "os",
        "categories": "rating",
        "rating":"5/5",
        "price":"20.00"
    },
    {
        "name": "Weezer",
        "os": "El Scorcho",
        "categories": "rating",
        "rating":"5/5",
        "price":"20.00"
    },
    {
        "name": "Weezer",
        "os": "El Scorcho",
        "categories": "rating",
        "rating":"5/5",
        "price":"20.00"
    }
];

    //myRecords = JSON.parse($records.text());


$(document).ready(function() {
   /*
    $('#view').dynatable({
        dataset: {
            perPageDefault: 3,
            perPageOptions: [3, 4, 6, 8]
        }

    });
*/
    /*
    $('#view').dynatable({
        dataset: {
            records: records
        }
    });*/

    $('#view')/*
        .bind('dynatable:preinit', function(e, dynatable) {
        dynatable.utility.textTransform.myNewStyle = function(text) {
            return text
                .replace(/\s+/, '_')
                .replace(/[A-Z]/, function($1){ return $1 + $1 });
        };
    })*/.dynatable({
            /*
        table: {
            defaultColumnIdStyle: 'myNewStyle'
        },
        */
        dataset: {
            records: records
        },
        features: {
            paginate: true,
            search: true,
            recordCount: true,
            perPageSelect: true
        }
    });

});