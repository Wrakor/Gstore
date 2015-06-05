{include file='common/header.tpl'}

{include file='common/nav.tpl'}

<div class="col-md-1"></div>
<div class="col-md-10">

    <article>
        <figure>
            {foreach $data.images as $url}
                <img src="{$url}">
            {/foreach}
        </figure>
        <h1>{$data.title}</h1>
        <p>{$data.content}</p>

        {if $data.sitemap == true}
            <br>
            <h4>Game Categories</h4>
            <ul>
                {foreach $data.gameCategories as $category}
                    <li><a href="{$BASE_URL}pages/products/list.php?cat={$category.id}">{$category.name}</a></li>
                {/foreach}
            </ul>

            <h4>Game Platform Categories</h4>
            <ul>
                {foreach $data.gamePlatforms as $platform}
                    <li><a href="{$BASE_URL}pages/products/list.php?plat={$platform.id}">{$platform.name}</a></li>
                {/foreach}
            </ul>

            <h4>Related Product Categories</h4>
            <ul>
                {foreach $data.relatedProductCategories as $category}
                    <li><a href="{$BASE_URL}pages/products/list.php?cat={$category.id}">{$category.name}</a></li>
                {/foreach}
            </ul>

            <h4>Information</h4>
            <ul>
                <li><a href="{$BASE_URL}pages/information/info.php?about">About us</a></li>
                <li><a href="{$BASE_URL}pages/information/info.php?delivery">Delivery Information</a></li>
                <li><a href="{$BASE_URL}pages/information/info.php?privacy">Privacy Policy</a></li>
                <li><a href="{$BASE_URL}pages/information/info.php?terms">Terms & Conditions</a></li>
            </ul>

            <h4>Customer Service</h4>
            <ul>
                <li><a href="{$BASE_URL}pages/information/info.php?contact">Contact Us</a></li>
                <li><a href="{$BASE_URL}pages/information/info.php?returns">Returns</a></li>
                <li><a href="{$BASE_URL}pages/information/info.php?sitemap">Site Map</a></li>
            </ul>


        {/if}



    </article>

</div>


{include file='common/footer.tpl'}