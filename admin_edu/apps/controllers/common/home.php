<?php 
class ControllerCommonHome {
	public function index() {
	//INCLUDING REQUIRED MODEL
	include_once "apps/models/produk.php";
	/*
		put your variable here.
	*/

	//RENDERING INTO VIEWS
	include_once "apps/views/common/header.php";
	include_once "apps/views/common/content.php";
	include_once "apps/views/common/footer.php";
	}

	public function cacad() {
		echo "cacad";
	}
}
?>