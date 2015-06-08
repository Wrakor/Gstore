<!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- Left Side -->
        <div class="col-md-3">

            <!-- Side Menu -->
            <p class="lead">Game Categories</p>
            <div class="list-group">

                <a href="{$BASE_URL}pages/products/list3.php" class="list-group-item hvr-bounce-to-right {if !isset($data.title[0].plat) && $category.id == $data.title[0].id}active{/if}">All Categories</a>


                {foreach $data.gameCategories as $category}

                <a href="{$BASE_URL}pages/products/list3.php?cat={$category.id}" class="list-group-item hvr-bounce-to-right {if !isset($data.title[0].plat) && $category.id == $data.title[0].id}active{/if}">{$category.name}</a>

                {/foreach}
            </div>



        </div>


