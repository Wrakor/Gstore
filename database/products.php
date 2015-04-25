<?php

	function listAllGames() {
		global $conn;
		
		$stmt = $conn->prepare('SELECT Product.*, Media.externalLink FROM Product, Game, Media WHERE Product.id = Game.product_id AND Product.mainmedia = Media.id');
		$stmt->execute();
		
		return $stmt->fetchAll();
	}

	function getProduct($id) {
		global $conn;
	
		$stmt = $conn->prepare('SELECT Product.*, Media.externalLink FROM Product WHERE Product.id = ? AND Product.mainmedia = Media.id');
		$stmt->execute($id);
		
		return $stmt->fetch();
	}

	function getGamePlatforms($id) {
		global $conn;

		$stmt = $conn->prepare('SELECT Platform.name FROM Product, Game, GamePlatform, Platform WHERE Product.id = ? AND Product.id = Game.product_id AND Game.product_id = GamePlatform.game_id AND GamePlatform.platform_id = Platform.id');
		$stmt->execute($id);

		return $stmt->fetchAll();
		}
?>