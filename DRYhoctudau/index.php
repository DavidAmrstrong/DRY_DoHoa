<?php
$pageData = new StdClass();
$pageData->title = "HocTuDau.com";
$pageData->css = "<link rel = 'stylesheet' href = 'css/layout.css'/>";

$pageData->content = include_once "views/header.php";
$pageData->content .= include_once "views/navigation.php";

$navigationIsClicked = isset ($_GET['page']);
if($navigationIsClicked){
	$fileToLoad = $_GET['page'];
} else{
	$fileToLoad = 'home';
}
$pageData->content .= include_once "fileToLoad/$fileToLoad.php";

$pageData->content .= include_once "views/footer.php";
$page = include_once "templates/page.php";
echo $page;