{include file='common/header.tpl'}

{include file='common/nav.tpl'}

{include file='common/leftside.tpl'}

<div class="col-md-9">

    <!-- Crumbs -->
    <div class="row">
        <div class="col-md-offset-1">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
            </ol>
        </div>
    </div>

    <!-- Product List -->
    <div class="row">

        <div class="col-md-offset-1">
            <h2>Products <small> All you can find in our store</small>

                <ul class="view-modes list-inline pull-right">
                    <li class="active"><a href=""> <span class="glyphicon glyphicon-th"></span></a></li>
                    <li class=""><a href=""> <span class="glyphicon glyphicon-th-list"></span></a></li>
                    <li class=""><a href=""> <span class="glyphicon glyphicon-list"></span></a></li>
                </ul>

                <ul class="view-modes view-modes-small list-inline pull-right">
                    <li class="active"><a href="products.php"> <span class="glyphicon glyphicon glyphicon-collapse-down"></span></a></li>
                    <li class=""><a href="products2.php"> <span class="glyphicon glyphicon glyphicon-menu-up"></span></a></li>
                    <li class="">
                        <select class="form-control">
                            <option>Sort By</option>
                            <option>Name</option>
                            <option>OS</option>
                            <option>Rating</option>
                            <option>Price</option>
                        </select>
                    </li>
                </ul>
            </h2>

            <hr class="colorgraph">

            <div class="container-fluid">

                {foreach $products as $product}

                <div class="col-sm-4 col-lg-4 col-md-4 product-list">
                    <div class="thumbnail thumbnail-full">
                        <img src="{$BASE_URL}{$product.media}" style="height: 127px" alt="">
                        <div class="caption caption-below">
                            <h4><a href="{$BASE_URL}pages/products/viewProduct.php?id={$product.id}">{$product.name}</a></h4>
                            <p>
                                {foreach $product['platforms'] as $platform}
                                    <span class="{if $platform eq 'Windows'}icon-os-win-03{elseif $platform eq 'Mac'}icon-os-apple{else}icon-os-linux_1_{/if}"></span>
                                {/foreach}
                            </p>
                        </div>
                        <div class="caption caption-br">
                            <h3 class="pull-right">{$product.price}&#8364;</h3>
                        </div>
                    </div>
                </div>

                {/foreach}

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
    </div>

</div>

{include file='common/footer.tpl'}