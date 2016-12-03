<?php 
define("HOST", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DB_NAME", "");
define("SUB_URL", "assets");


include_once "apps/models/koneksi.php";
include_once "apps/models/tools.php";

$con = new conn;
$konek = $con->open();
$tools = new Tools();

// INCLUDING THE SPESIFIC CONTROLLER
if(isset($_GET['page'])) {
	$page_control = $_GET['page'];
	if(file_exists("apps/controllers/{$page_control}.php")) {
		include_once "apps/controllers/{$page_control}.php";
		//include_once "apps/views/media.php";
	} else {
		$tools->redirect("404.php");
	}
} else {
	$tools->redirect("index.php?page=home");
}
?>