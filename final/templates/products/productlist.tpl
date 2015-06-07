{include file='common/header.tpl'}

{include file='common/nav.tpl'}

{include file='common/leftside.tpl'}

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
            <a class="list-group-item glyphicon glyphicon-th disabled" href=""></a>
            <a class="list-group-item glyphicon glyphicon-th-list" href=""></a>
            <a class="list-group-item glyphicon glyphicon-list" href=""></a>
            <a class="list-group-item glyphicon glyphicon-menu-up" href=""></a>
            <a class="list-group-item glyphicon glyphicon-menu-down" href=""></a>
        </div>
        <a href="#" class="btn primary" id="sorting-by-price-button">Sort by Price</a>
        <a href="#" class="btn primary" id="sorting-by-name-button">Sort by Name</a>
        <ul  style="padding-top: 5%;" id="uldata" class="row-fluid list-unstyled nav ">


        </ul>


    </div>

    <!--
                <nav class="center-block text-center">
                    <ul class="pagination pagination-lg">
                        <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                    </ul>
                </nav>
    -->


</div>

{include file='common/footer.tpl'}