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
		$model = $tools->load("news/berita");
		$results = $model->getList();

		$recently_post = $model->getList(true);

		//BREADCRUBS

		$breadcrumb = array(
				array (
						"title" => "Home",
						"href" => "http://".$_SERVER['HTTP_HOST']."/index.php?route=common/home"
				),
				array (
						"title" => "News",
						"href" => "http://".$_SERVER['HTTP_HOST']."/index.php?route=news/news"
				)
		);

		/*echo "<pre>";
		print_r($breadcrumb);
		echo "</pre>";*/
		include_once "apps/views/common/header.php";
		include_once "apps/views/news/content.php";
		include_once "apps/views/common/footer.php";
	}

	//BREADCRUMBS

	public function newsItem() {
		$tools = new Tools();
		//INCLUDING REQUIRED MODEL
		/*
			include_once "apps/models/produk.php";
			put your variable here.
		*/

		//RENDERING INTO VIEWS
		$model = $tools->load("news/berita");
		$berita = $model->getBerita($_GET['id']);

		$recently_post = $model->getList(true);

		//BREADCRUBS

		$breadcrumb = array(
				array (
						"title" => "Home",
						"href" => "http://".$_SERVER['HTTP_HOST']."/index.php?route=common/home"
				),
				array (
						"title" => "News",
						"href" => "http://".$_SERVER['HTTP_HOST']."/index.php?route=news/news"
				),
				array (
						"title" => $berita['judul']
				)
		);

		include_once "apps/views/common/header.php";
		include_once "apps/views/news/content.php";
		include_once "apps/views/common/footer.php";

	}
}
?>