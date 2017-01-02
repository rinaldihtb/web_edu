<?php 
class ControllerForumForum {
	public function index() {
		$tools = new Tools();
		//INCLUDING REQUIRED MODEL
		/*
			include_once "apps/models/produk.php";
			put your variable here.
		*/

		//RENDERING INTO VIEWS
		$content_views = array(
			"common/header.php", 
			"forum/content.php",
			"common/footer.php"
		);
		//include_once "apps/views/common/header.php";
		/*include_once "apps/views/forum/content.php";
		include_once "apps/views/common/footer.php";*/

		//echo RPATH;
		//$render->index();
		$tools->Output($content_views);
	//}
	}

	//BREADCRUMBS

	public function thread() {

		include_once "apps/views/common/header.php";
		include_once "apps/views/forum/content.php";
		include_once "apps/views/common/footer.php";

	}
}
?>