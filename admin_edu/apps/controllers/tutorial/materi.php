<?php 
class ControllerTutorialMateri {
	public function index() {
		$tools = new Tools();
		//INCLUDING REQUIRED MODEL
		/*
			include_once "apps/models/produk.php";
			put your variable here.
		*/
		
		$model = $tools->load("tutorial/materi");
		$results = $model->getList();
		/*echo "<pre>";
		print_r($results);
		echo "</pre>";*/
		
		//RENDERING INTO VIEWS
		include_once "apps/views/common/header.php";
		include_once "apps/views/common/sidebar.php";
		include_once "apps/views/tutorial/list.php";
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

	public function tambahmateri() {
		
		//RENDERING INTO VIEWS
		$content_views = array(
			"common/header.php", 
			"common/sidebar.php",
			"tutorial/tambahmateri.php",
			"common/footer.php"
		);
		$tools = new Tools();
		$tools->Output($content_views);

	}
	
	public function edit() {
		
		//RENDERING INTO VIEWS
		$tools = new Tools();
		$model = $tools->load("tutorial/materi");
		$results = $model->getMateri($_GET['id']);
		
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
		include_once "apps/views/tutorial/editmateri.php";
		include_once "apps/views/common/footer.php";
		

	}
	
	public function simpan() {
		$tools = new Tools();
		
		if($_POST) {
			$konten = htmlspecialchars($_POST['konten']);
			$data = $_POST;
			$data['konten'] = $konten;
			$data['visible'] = (isset($_POST['visible']) && $_POST['visible']=="on") ? 1 : 0;
			$model = $tools->load("tutorial/materi");
			if($data['tipe']=="tambah") 
				$model->tambahmateri($data);
			else if ($data['tipe']=="edit") {
				$model->editMateri($data, $_GET['id']);
			}
		}
		/*echo "<pre>";
		print_r($_SERVER);
		echo "</pre>";*/
		//echo "http://$_SERVER[HTTP_HOST]/admin_edu/index.php?route=tutorial/materi";
		$tools->redirect("http://$_SERVER[HTTP_HOST]/admin_edu/index.php?route=tutorial/materi");
	}
	
	public function hapus() {
		$tools = new Tools();
		$model = $tools->load("tutorial/materi");
		$model->hapus($_GET['id']);
		$tools->redirect("http://$_SERVER[HTTP_HOST]/admin_edu/index.php?route=tutorial/materi");
	}
	
	

}
?>