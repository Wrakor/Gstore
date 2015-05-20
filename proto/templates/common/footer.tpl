</div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /.row -->
</div><!-- /.container -->


<!-- footer -->
<footer>
    <div class="container">

        <div class="row">

            <!-- information -->
            <div class="col-md-2">
                <ul>
                    <li>Information<li>
                    <li><a href="{$BASE_URL}pages/information/info.php?about">About us</a></li>
                    <li><a href="{$BASE_URL}pages/information/info.php?delivery">Delivery Information</a></li>
                    <li><a href="{$BASE_URL}pages/information/info.php?privacy">Privacy Policy</a></li>
                    <li><a href="{$BASE_URL}pages/information/info.php?terms">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- customer service -->
            <div class="col-md-2">
                <ul>
                    <li>Customer Service<li>
                    <li><a href="{$BASE_URL}pages/information/info.php?contact">Contact Us</a></li>
                    <li><a href="{$BASE_URL}pages/information/info.php?returns">Returns</a></li>
                    <li><a href="{$BASE_URL}pages/information/info.php?sitemap">Site Map</a></li>
                </ul>
            </div>

            <!-- account -->

            <div class="col-md-2">
                {if $USERNAME}
                <ul>
                    <li>My Account<li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="orderhistory.php">Order History</a></li>
                    <li><a href="wishlist.php">Wishlist</a></li>
                    <li><a href="favorites.php">Favorites</a></li>
                    <li><a href="settings.php">Settings</a></li>
                </ul>
                {/if}
            </div>



            <div class="col-md-2"></div>

            <!-- Social & Tools -->
            <div class="col-md-4">
                <p>Follow Us On</p>
                <a href="https://www.youtube.com/watch?v=09m0B8RRiEE"><span class="icon-facebook"></span></a>
                <a href="https://www.youtube.com/watch?v=8ZcmTl_1ER8"><span class="icon-google__x2B_"></span></a>
                <a href="https://www.youtube.com/watch?v=wZZ7oFKsKzY"><span class="icon-twitter-1"></span></a>
                <a href="https://www.youtube.com/watch?v=BROWqjuTM0g"><span class="icon-youtube"></span></a>
                <p></p>
                <p>Made With</p>
                <a href="http://en.wikipedia.org/wiki/HTML5"><span class="icon-html5-01"></span></a>
                <a href="http://en.wikipedia.org/wiki/Cascading_Style_Sheets"><span class="icon-css3-01"></span></a>
                <a href="http://en.wikipedia.org/wiki/JavaScript"><span class="icon-prog-js01"></span></a>
                <a href="http://php.net/"><span class="icon-prog-php01"></span></a>
                <a href="http://www.postgresql.org/"><span class="icon-dbs-postgresql"></span></a>
                <a href="http://getbootstrap.com/"><span class="icon-rus-vk-01"></span></a>
            </div>

        </div><!-- row end -->

        <hr class="colorgraph">

        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                © 2015 <span class="brand">G<b>STORE</b></span>. <a href="{$BASE_URL}pages/information/info.php?license">MIT License</a>.
            </div>
        </div>

    </div><!-- /.container -->
</footer><!-- /footer -->

{literal}
    <script id="view1-template" type="text/x-handlebars-template">
        {{#each this}}
        <a class="col-sm-4 col-lg-4 col-md-4 product-list view-1 hvr-bounce-to-top" href="/~lbaw1433/proto/pages/products/item.php?id={{id}}">
            <div class="thumbnail thumbnail-full">
                <img src="http://vignette2.wikia.nocookie.net/video151/images/b/bc/Borderlands_2_-_Ultimate_Vault_Hunter_Upgrade_Pack_2_-_The_Raid_of_Digistruct_Peak_Walkthrough/revision/latest?cb=20130904162339" alt="">
            </div>

            <h3>{{price}}€</h3>
            <h4>{{name}}</h4>
            <p>{{description}}</p>
            <div class="platforms">
                <span class="icon-os-win-03"></span>
                <span class="icon-os-apple"></span>
                <span class="icon-os-linux_1_"></span>
            </div>
        </a>
        {{/each}}
    </script>
{/literal}

{literal}
    <script id="view2-template" type="text/x-handlebars-template">
        {{#each this}}
        <a class="col-sm-12 col-lg-12 col-md-12 product-list view-2 hvr-bounce-to-top" href="/~lbaw1433/proto/pages/products/item.php?id={{id}}">
            <div class="thumbnail thumbnail-full">
                <img src="http://vignette2.wikia.nocookie.net/video151/images/b/bc/Borderlands_2_-_Ultimate_Vault_Hunter_Upgrade_Pack_2_-_The_Raid_of_Digistruct_Peak_Walkthrough/revision/latest?cb=20130904162339" alt="">
            </div>

            <h3>{{price}}€</h3>
            <h4>{{name}}</h4>
            <p>{{description}}</p>
            <div class="platforms">
                <span class="icon-os-win-03"></span>
                <span class="icon-os-apple"></span>
                <span class="icon-os-linux_1_"></span>
            </div>
        </a>
        {{/each}}
    </script>
{/literal}

<!-- jQuery -->
<script src="{$BASE_URL}lib/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>

<!-- NOTY -->
<script src="{$BASE_URL}lib/noty/jquery.noty.packaged.min.js"></script>

<!-- Dynatable.js -->
<script src="{$BASE_URL}lib/dynatable/jquery.dynatable.js"></script>

<!-- Handlebars.js -->
<script src="{$BASE_URL}lib/handlebars/handlebars-v3.0.3.js"></script>

<!-- Typeahead.js -->
<script src="{$BASE_URL}lib/typeahead/typeahead.js"></script>

<!-- Custom script 3 :: dynatable -->
<script src="{$BASE_URL}js/dyna.js"></script>

<!-- Custom script 1:: modals -->
<script src="{$BASE_URL}js/script.js"></script>

<!-- Custom script 2 :: forms -->
<script src="{$BASE_URL}js/script2.js"></script>

<!-- Custom script 3 :: localstorage -->
<script src="{$BASE_URL}js/script3.js"></script>
<script src="{$BASE_URL}js/script4.js"></script>

<script src="{$BASE_URL}js/builder.js"></script>

<script src="{$BASE_URL}js/search.js"></script>


<!-- Custom -->
<script>
    var data = {json_encode($data)};
    store(data);

</script>



</body>
</html>