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
            <a class="navbar-brand brand" href="index.php">G<b>STORE</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <!-- Games -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Games <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="">All Games</a></li>
                        <li><hr></li>
                        <li role="presentation" class="dropdown-header"><b>By Category</b></li>
                        <li><a href="">Adventure</a></li>
                        <li><a href="">Action</a></li>
                        <li><a href="">Racing</a></li>
                        <li><a href="">Sports</a></li>
                        <li><a href="">Strategy</a></li>
                        <li><a href="">Massive Multiplayer</a></li>
                        <li><a href="">RPG</a></li>
                        <li><a href="">Simulation</a></li>
                        <li><hr></li>
                        <li role="presentation" class="dropdown-header"><b>By Operative System</b></li>
                        <li><a href="">Windows</a></li>
                        <li><a href="">Mac OSX</a></li>
                        <li><a href="">Linux</a></li>
                    </ul>
                </li>

                <!-- Related Products -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Related Products <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="">All Products</a></li>
                        <li><hr></li>
                        <li role="presentation" class="dropdown-header"><b>By Category</b></li>
                        <li><a href="">Collectibles</a></li>
                        <li><a href="">Wearables</a></li>
                        <li><a href="">Toys</a></li>
                        <li><a href="">Card Games</a></li>
                        <li><a href="">Board Games</a></li>
                    </ul>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!--
                <li><a href="backoffice.php"><span class="glyphicon glyphicon-lock"></span> Admin </a></li>
                <li><a href="cart.php"><span class="badge">2</span><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile </a></li>
                -->
                {if $USERNAME}
                    {include file='common/menu_logged_in.tpl'}
                {else}
                    {include file='common/menu_logged_out.tpl'}
                {/if}
            </ul>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container -->
</nav><!-- / navigation -->

{if $USERNAME}
    {include file='users/logout.tpl'}
{else}
    {include file='users/login.tpl'}
    {include file='users/register.tpl'}
{/if}