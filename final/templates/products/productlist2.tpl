{include file='common/header.tpl'}

{include file='common/nav.tpl'}

{include file='common/leftside2.tpl'}

<div class="col-md-9">

    <!-- Crumbs -->
    <ol class="breadcrumb">
        <li><a href="{$BASE_URL}">Home</a></li>
        <li class="active">{$data.title[0].name}</li>
    </ol>


    <!-- Product List -->
    <h2>{$data.title[0].name} <small> {$data.title[0].note}</small></h2>

    <hr class="colorgraph">

    <div id="data" class="container-fluid">

        <div class="list-group view-modes">
            <a class="list-group-item glyphicon glyphicon-th" href="{$BASE_URL}pages/products/list.php"></a>
            <a class="list-group-item glyphicon glyphicon-th-list disabled" href=""></a>
            <a class="list-group-item glyphicon glyphicon-list" href="{$BASE_URL}pages/products/list3.php"></a>
            <a class="list-group-item glyphicon glyphicon-menu-up" href="{$BASE_URL}pages/products/list.php"></a>
            <a class="list-group-item glyphicon glyphicon-menu-down" href="{$BASE_URL}pages/products/list3.php"></a>
        </div>
        <a href="#" class="btn primary" id="sorting-by-price-button2">Sort by Price</a>
        <a href="#" class="btn primary" id="sorting-by-name-button2">Sort by Name</a>
        <ul id="uldata2" class="row-fluid list-unstyled nav "></ul>


    </div>




</div>

{include file='common/footer.tpl'}