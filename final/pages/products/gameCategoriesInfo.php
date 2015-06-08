<?php
// Game Categories Information to be included in navbar
include_once($BASE_DIR . 'database/products.php');
$gameCategories = getGameCategories();
$gamePlatforms = getAllGamePlatforms();
$relatedProductCategories = getRelatedProductCategories();

$data['gameCategories'] = $gameCategories;
$data['gamePlatforms'] = $gamePlatforms;
$data['relatedProductCategories'] = $relatedProductCategories;
$smarty->assign('data', $data);