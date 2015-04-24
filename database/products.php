<?php

	function listProducts() {
		global $conn;
		//query errada
		$stmt = $conn->prepare('SELECT Product.*, Media.externalLink FROM Product, Game, Media WHERE Product.id = Game.product_id AND Product.id = Media.product_id');
		$stmt->execute();
		
		return $stmt->fetchAll();
	}
?>