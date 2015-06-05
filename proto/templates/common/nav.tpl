<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand brand" href="{$BASE_URL}">G<b>STORE</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <!-- Games -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Games <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{$BASE_URL}pages/products/list.php?games">All Games</a></li>
                        <li><hr></li>
                        <li role="presentation" class="dropdown-header"><b>By Category</b></li>

                        {foreach $data.gameCategories as $category}

                            <li class="{if !isset($data.title[0].plat) && $category.id == $data.title[0].id}active{/if}"><a href="{$BASE_URL}pages/products/list.php?cat={$category.id}">{$category.name}</a></li>

                        {/foreach}

                        <li><hr></li>
                        <li role="presentation" class="dropdown-header"><b>By Operative System</b></li>

                        {foreach $data.gamePlatforms as $platform}

                            <li class="{if $platform.id == $data.title[0].plat}active{/if}"><a href="{$BASE_URL}pages/products/list.php?plat={$platform.id}">{$platform.name}</a></li>

                        {/foreach}
                    </ul>
                </li>

                <!-- Related Products -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Related Products <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{$BASE_URL}pages/products/list.php?related">All Related Products</a></li>
                        <li><hr></li>
                        <li role="presentation" class="dropdown-header"><b>By Category</b></li>

                        {foreach $data.relatedProductCategories as $category}

                            <li class="{if !isset($data.title[0].plat) && $category.id == $data.title[0].id}active{/if}"><a href="{$BASE_URL}pages/products/list.php?cat={$category.id}">{$category.name}</a></li>

                        {/foreach}
                    </ul>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <!--
                <li><a href="cart.php"><span class="badge">2</span><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                -->
                {if $ADMIN}
                    <li><a href="{$BASE_URL}pages/admin/dashboard.php"><span class="glyphicon glyphicon-lock"></span> Backoffice </a></li>
                {/if}

                {if $USERNAME}
                    {include file='common/menu_logged_in.tpl'}
                {else}
                    {include file='common/menu_logged_out.tpl'}
                {/if}

                <li class="search-button"><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
            </ul>

            <form class="navbar-form navbar-right hide" role="search">
                <div id="typeahead-products" class="form-group">
                    <input id="typeahead" type="text" class="form-control typeahead" placeholder="Search for..." data-provide="typeahead">
                </div>
            </form>

        </div><!-- /.navbar-collapse -->

    </div><!-- /.container -->
</nav><!-- / navigation -->

{if $USERNAME}
    {include file='users/logout.tpl'}
{else}
    {include file='users/login.tpl'}
    {include file='users/register.tpl'}
{/if}