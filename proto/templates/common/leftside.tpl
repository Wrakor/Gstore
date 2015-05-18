<!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- Left Side -->
        <div class="col-md-3">

            <!-- Search -->
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>

            <br><br>

            <!-- Side Menu -->
            <p class="lead">Game Categories</p>
            <div class="list-group">

                {foreach $data.gameCategories as $category}

                <a href="{$BASE_URL}pages/products/list.php?cat={$category.id}" class="list-group-item hvr-bounce-to-right {if !isset($data.title[0].plat) && $category.id == $data.title[0].id}active{/if}">{$category.name}</a>

                {/foreach}
            </div>

            <button id="lol">ajax request test</button>

        </div>


