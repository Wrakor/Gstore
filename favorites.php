<?php include_once "open.php"; ?>
<?php include_once "nav.php"; ?>

    <div class="container">
        <div class="row">

            <!-- Side menu -->
            <div class="col-md-3">
                <p class="lead">My Account</p>
                <div class="list-group side-menu">
                    <a href="profile.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt"></span>Personal Information</a>
                    <a href="orderhistory.php" class="list-group-item"><span class="glyphicon glyphicon-euro"></span>Order History</a>
                    <a href="wishlist.php" class="list-group-item"><span class="glyphicon glyphicon-gift"></span>Wishlist</a>
                    <a href="favorites.php" class="list-group-item active"><span class="glyphicon glyphicon-star"></span>Favorites</a>
                    <a href="settings.php" class="list-group-item"><span class="glyphicon glyphicon-cog"></span>Settings</a>
                </div>
            </div>

            <!-- Content -->
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-offset-1">

                        <h2>Favorites <small>I like this!</small>
                            <ul class="view-modes list-inline pull-right">
                                <li><a href=""><span class="glyphicon glyphicon-th"></span></a></li>
                                <li class="active"><a href=""><span class="glyphicon glyphicon-th-list"></span></a></li>
                                <li><a href=""><span class="glyphicon glyphicon-list"></span></a></li>
                            </ul>
                        </h2>
                        <hr class="colorgraph">
                        <div class="container-fluid">
                            <div class="media product-list">
                                <div class="media-left media-top">
                                    <a href="#">
                                        <img src="http://placehold.it/90x90">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Darkest Dungeon<a href=""><span class="glyphicon glyphicon-remove"></span></a></h4>
                                    <span class="icon-os-win-03"></span>
                                    <span class="icon-os-apple"></span>
                                    <p>Darkest Dungeon is a challenging gothic roguelike turn-based RPG about the psychological stresses of adventuring. Recruit, train, and lead a team of flawed heroes against unimaginable horrors, stress, famine, disease, and the ever-encroaching dark. Can you keep your heroes together when all hope is lost?</p>
                                </div>
                            </div>

                            <div class="media product-list">
                                <div class="media-left media-top">
                                    <a href="#">
                                        <img src="http://placehold.it/90x90">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Borderlands 2 Game of the Year<a href=""><span class="glyphicon glyphicon-remove"></span></a></h4>
                                    <span class="icon-os-win-03"></span>
                                    <span class="icon-os-apple"></span>
                                    <span class="icon-os-linux_1_"></span>
                                    <p>A new era of shoot and loot is about to begin. Play as one of four new vault hunters facing off against a massive new world of creatures, psychos and the evil mastermind, Handsome Jack. Make new friends, arm them with a bazillion weapons and fight alongside them in 4 player co-op on a relentless quest for revenge and redemption across the undiscovered and unpredictable living planet.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div><!-- /.col-md-9 -->

        </div><!-- /.row -->
    </div><!-- /.container -->


<?php include_once "footer.php"; ?>
<?php include_once "close.php"; ?>