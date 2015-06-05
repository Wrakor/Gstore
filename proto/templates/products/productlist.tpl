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


            </div>



    <a class="col-sm-4 col-lg-4 col-md-4 product-list view-1 hvr-bounce-to-top" href="">
        <div class="thumbnail thumbnail-full">
            <img src="http://vignette2.wikia.nocookie.net/video151/images/b/bc/Borderlands_2_-_Ultimate_Vault_Hunter_Upgrade_Pack_2_-_The_Raid_of_Digistruct_Peak_Walkthrough/revision/latest?cb=20130904162339" alt="">
        </div>

        <h3>Price €</h3>
        <h4>Title</h4>
        <p>Description text</p>
        <div class="platforms">
            <span class="icon-os-win-03"></span>
            <span class="icon-os-apple"></span>
            <span class="icon-os-linux_1_"></span>
        </div>
    </a>

    <a class="col-sm-12 col-lg-12 col-md-12 product-list view-2 hvr-bounce-to-top" href="">
        <div class="thumbnail thumbnail-full">
            <img src="http://vignette2.wikia.nocookie.net/video151/images/b/bc/Borderlands_2_-_Ultimate_Vault_Hunter_Upgrade_Pack_2_-_The_Raid_of_Digistruct_Peak_Walkthrough/revision/latest?cb=20130904162339" alt="">
        </div>
        <h3>Price €</h3>
        <h4>Title</h4>
        <p>Darkest Dungeon is a challenging gothic roguelike turn-based RPG about the psychological stresses of adventuring. Recruit, train, and lead a team of flawed heroes against unimaginable horrors, stress, famine, disease, and the ever-encroaching dark. Can you keep your heroes together when all hope is lost?</p>
        <div class="platforms">
            <span class="icon-os-win-03"></span>
            <span class="icon-os-apple"></span>
            <span class="icon-os-linux_1_"></span>
        </div>
    </a>

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