<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>
<body>
<?php include_once "nav.php"; ?>

<!-- Page Content -->
<div class="container">
    <div class="col-md-3">
        <p class="lead">My Account</p>
        <div class="list-group side-menu">
            <a href="profile.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt"></span>Personal Information</a>
            <a href="orderhistory.php" class="list-group-item"><span class="glyphicon glyphicon-euro"></span>Shopping History</a>
            <a href="wishlist.php" class="list-group-item"><span class="glyphicon glyphicon-gift"></span>Wishlist</a>
            <a href="favorites.php" class="list-group-item"><span class="glyphicon glyphicon-star"></span>Favorites</a>
            <a href="settings.php" class="list-group-item active"><span class="glyphicon glyphicon-cog"></span>Settings</a>
        </div>
    </div>

    <div class="col-md-9">
        <div class="row">
            <div class="col-md-offset-1">
                <h2>Settings <small>with your account configurations.</small></h2>
                <hr class="colorgraph">


            </div>
        </div>

    </div>

</div><!-- /.row -->
</div><!-- /.container -->


<?php include_once "footer.php"; ?>
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>