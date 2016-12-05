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
if(isset($_GET['route'])) {
	$page_control = explode("/",$_GET['route']);
	$page_path = "{$page_control[0]}/{$page_control[1]}";

	if(file_exists("apps/controllers/{$page_path}.php")) {
		/*echo "<pre>";
		print_r($_SERVER);
		echo "</pre>";*/
		include_once "apps/controllers/{$page_path}.php";

		//echo "apps/controllers/{$page_control[0]}/{$page_control[1]}.php";
		$controller = "Controller";
		$c = 1;
		foreach($page_control as $page) {
			$controller .= ucfirst($page);
			if ($c>1)
				break;
			else 
				$c++;
		}

		DEFINE("PAGE", $page_path);
		$render = new $controller();
		if(count($page_control)==3)
			$render->$page_control[2]();
		else 
			$render->index();
		//include_once "apps/views/media.php";
	} else {
		$tools->redirect("404.php");
	}
} else {
	$tools->redirect("http://{$_SERVER[HTTP_HOST]}/index.php?route=common/home");
}
?>