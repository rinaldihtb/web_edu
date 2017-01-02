<?php 
class ControllerNewsBerita {
	public function index() {
		$tools = new Tools();
		//INCLUDING REQUIRED MODEL
		/*
			include_once "apps/models/produk.php";
			put your variable here.
		*/
		
		$model = $tools->load("news/berita");
		$results = $model->getList();
		/*echo "<pre>";
		print_r($results);
		echo "</pre>";*/
		
		//RENDERING INTO VIEWS
		include_once "apps/views/common/header.php";
		include_once "apps/views/common/sidebar.php";
		include_once "apps/views/news/list.php";
		include_once "apps/views/common/footer.php";
		/*$content_views = array(
			"common/header.php", 
			"common/sidebar.php",
			"tutorial/list.php",
			"common/footer.php"
		);*/
		//print_r($GLOBALS['tools']);
		//$tools->Output($content_views);
	}

	//BREADCRUMBS

	public function tambah() {
		
		//RENDERING INTO VIEWS
		$content_views = array(
			"common/header.php", 
			"common/sidebar.php",
			"news/tambahberita.php",
			"common/footer.php"
		);
		$tools = new Tools();
		$tools->Output($content_views);

	}
	
	public function edit() {
		
		//RENDERING INTO VIEWS
		$tools = new Tools();
		$model = $tools->load("news/berita");
		$results = $model->getBerita($_GET['id']);
		
		/*$content_views = array(
			"common/header.php", 
			"common/sidebar.php",
			"tutorial/editmateri.php",
			"common/footer.php"
		);
		echo "<pre>";
		print_r($results);
		echo "</pre>";*/
		
		include_once "apps/views/common/header.php";
		include_once "apps/views/common/sidebar.php";
		include_once "apps/views/news/editberita.php";
		include_once "apps/views/common/footer.php";
		

	}
	
	public function simpan() {
		$tools = new Tools();
		if($_POST) {
			$konten = htmlspecialchars($_POST['konten']);
			$data = $_POST;
			$data['konten'] = $konten;
			$data['visible'] = (isset($_POST['visible']) && $_POST['visible']=="on") ? 1 : 0;
			if (isset($_FILES['banner']) && md5(print_r($_FILES['banner'],true))!="7dbfaa908d87df052231e7bfff927b2d")
				$data['image'] = $_FILES['banner'];

			/*echo "<pre>";
			print_r($data);
			echo "</pre>";*/

			//echo md5(print_r($_FILES['banner'],true));

			$model = $tools->load("news/berita");
			if($data['tipe']=="tambah") 
				$model->tambahberita($data);
			else if ($data['tipe']=="edit") {
				$model->editBerita($data, $_GET['id']);
			}
		}
		/*echo "<pre>";
		print_r($_POST);
		print_r($_FILES);
		echo "</pre>";*/
		//echo "http://$_SERVER[HTTP_HOST]/admin_edu/index.php?route=tutorial/materi";
		$tools->redirect("http://$_SERVER[HTTP_HOST]/admin_edu/index.php?route=news/berita");
	}
	
	public function hapus() {
		$tools = new Tools();
		$model = $tools->load("news/berita");
		$model->hapus($_GET['id']);
		$tools->redirect("http://$_SERVER[HTTP_HOST]/admin_edu/index.php?route=news/berita");
	}
	
	

}
?>