<?php 
class ControllerNewsNews {
	public function index() {
		//INCLUDING REQUIRED MODEL
		/*
			include_once "apps/models/produk.php";
			put your variable here.
		*/

		//RENDERING INTO VIEWS
		include_once "apps/views/common/header.php";
		include_once "apps/views/news/content.php";
		include_once "apps/views/common/footer.php";
	}

	//BREADCRUMBS

	public function newsItem() {

		include_once "apps/views/common/header.php";
		include_once "apps/views/news/content.php";
		include_once "apps/views/common/footer.php";

	}
}
?>