<?php 
class ControllerDowntempDowntemp {
public function index() {
		$tools = new Tools();
		//INCLUDING REQUIRED MODEL
		/*
			include_once "apps/models/produk.php";
			put your variable here.
		*/

		//RENDERING INTO VIEWS
		$model = $tools->load("downtemp/downtemp");
		$results = $model->getList();

		$recently_post = $model->getList(true);

		//BREADCRUBS

		$breadcrumb = array(
				array (
						"title" => "Home",
						"href" => "http://".$_SERVER['HTTP_HOST']."/index.php?route=common/home"
				),
				array (
						"title" => "Download",
						"href" => "http://".$_SERVER['HTTP_HOST']."/index.php?route=downtemp/downtemp"
				)
		);

		/*echo "<pre>";
		print_r($breadcrumb);
		echo "</pre>";*/
		include_once "apps/views/common/header.php";
		include_once "apps/views/downtemp/content.php";
		include_once "apps/views/common/footer.php";
	}

	//BREADCRUMBS

	public function downItem() {
		$tools = new Tools();
		//INCLUDING REQUIRED MODEL
		/*
			include_once "apps/models/produk.php";
			put your variable here.
		*/

		//RENDERING INTO VIEWS
		$model = $tools->load("downtemp/downtemp");
		$result = $model->getTemplate($_GET['id']);

		$recently_post = $model->getList(true);

		//BREADCRUBS

		$breadcrumb = array(
				array (
						"title" => "Home",
						"href" => "http://".$_SERVER['HTTP_HOST']."/index.php?route=common/home"
				),
				array (
						"title" => "Download",
						"href" => "http://".$_SERVER['HTTP_HOST']."/index.php?route=downtemp/downtemp"
				),
				array (
						"title" => $result['judul']
				)
		);

		include_once "apps/views/common/header.php";
		include_once "apps/views/downtemp/content.php";
		include_once "apps/views/common/footer.php";

	}
}
?>