{include file='common/header.tpl'}

{include file='common/nav.tpl'}

{include file='common/leftside3.tpl'}

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
            <a class="list-group-item glyphicon glyphicon-th-list" href="{$BASE_URL}pages/products/list2.php"></a>
            <a class="list-group-item glyphicon glyphicon-list disabled" href=""></a>
            <a class="list-group-item glyphicon glyphicon-menu-up" href="{$BASE_URL}pages/products/list2.php"></a>
            <a class="list-group-item glyphicon glyphicon-menu-down disabled" href=""></a>
        </div>

        <table id="uldata3" class="table table-bordered">
            <thead>
            <tr>
                <th >Name </th>
                <th >OS </th>
                <th >Score </th>
                <!-- <th data-dynatable-column="country" class="dynatable-head">Rating </th>-->
                 <th>Price </th>
             </tr>
             </thead>
            <tbody>
            </tbody>

         </table>



     </div>




 </div>

 {include file='common/footer.tpl'}