<?php

	function listAllGames() {
		global $conn;
		
		$stmt = $conn->prepare('SELECT Product.*, Media.externallink FROM Product, Game, Media WHERE Product.id = Game.product_id AND Product.medianum = Media.id');
		$stmt->execute();
		
		return $stmt->fetchAll();
	}

	function getProduct($id) {
		global $conn;
		
		$stmt = $conn->prepare('SELECT Product.*, Media.externallink FROM Product, Media WHERE Product.id = ? AND Product.medianum = Media.id');
		$stmt->execute(array($id));
		
		return $stmt->fetch();
	}

	function getGamePlatforms($id) {
		global $conn;

		$stmt = $conn->prepare('SELECT Platform.name FROM Product, Game, GamePlatform, Platform WHERE Product.id = ? AND Product.id = Game.product_id AND Game.product_id = GamePlatform.game_id AND GamePlatform.platform_id = Platform.id');
		$stmt->execute($id);

		return $stmt->fetchAll();
		}

	function getReviews($id) {
		global $conn;

		$stmt = $conn->prepare('SELECT Review.Score, Review.comment, Utilizador.username from Review, Utilizador WHERE Review.user_id = Utilizador.id AND Review.product_id = ?');
		$stmt->execute(array($id));

		return $stmt->fetchAll();		
	}
?>