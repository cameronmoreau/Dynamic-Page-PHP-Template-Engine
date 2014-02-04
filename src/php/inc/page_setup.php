<?php

require_once("php/classes/page.php");
$page = new Page();

$files = scandir("php/content/");
unset($files[0], $files[1]);

//stored on content?page=blank
if(isset($_GET['page']) && in_array($_GET['page'].".html", $files)) {
  //Edit for multiple delim
	$delim = "/<!-- Title -->|<!-- Content -->/";
	$path = "php/content/".$_GET['page'].".html";
	$html_file = file_get_contents($path);
	$html_get = preg_split($delim, $html_file);
	$page->setTitle((string)$html_get[1]);
	$page->setContent((string)$html_get[2]);
}
else
	header("Location: 404.php");

?>
