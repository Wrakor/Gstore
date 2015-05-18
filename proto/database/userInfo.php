<?php

    function getWishlist($user_id) {
        global $conn;
        $query = 'SELECT Product.*, Media.externallink FROM Product, Game, Media, Wishlist WHERE Product.id = Game.product_id AND Product.medianum = Media.id AND Game.product_id = Wishlist.product_id AND Wishlist.client_id = ?';
        $stmt = $conn->prepare($query);
        $stmt->execute(array($user_id));

        return $stmt->fetchAll();
    }

?>