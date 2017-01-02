<?php 
class ControllerNewsNews {
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
			"tutorial/list.php",
			"common/footer.php"
		);
		$tools->Output($content_views);
	}

	//BREADCRUMBS

	public function listmateri() {

		include_once "apps/views/common/header.php";
		include_once "apps/views/news/content.php";
		include_once "apps/views/common/footer.php";

	}
}
?>