<?php 
class ControllerForumControl {
	//private $tools = new Tools();
	public function index() {
		$tools = new Tools();
		//INCLUDING REQUIRED MODEL
		/*
			include_once "apps/models/produk.php";
			put your variable here.
		*/
		
		$model = $tools->load("forum/control");
		$threads = $model->getListThread();
		$members = $model->getListMember();
		/*echo "<pre>";
		print_r($threads);
		echo "</pre>";*/
		
		//RENDERING INTO VIEWS
		include_once "apps/views/common/header.php";
		include_once "apps/views/common/sidebar.php";
		include_once "apps/views/forum/thread.php";
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


	public function edit_member() {
		$tools = new Tools();
		//INCLUDING REQUIRED MODEL
		/*
			include_once "apps/models/produk.php";
			put your variable here.
		*/
		
		$model = $tools->load("forum/control");
		$results = $model->getMember($_GET['id']);
		/*echo "<pre>";
		print_r($results);
		echo "</pre>";*/
		
		//RENDERING INTO VIEWS
		include_once "apps/views/common/header.php";
		include_once "apps/views/common/sidebar.php";
		include_once "apps/views/forum/editmember.php";
		include_once "apps/views/common/footer.php";
	}

	public function switch_thread() {
		$tools = new Tools();
		//INCLUDING REQUIRED MODEL
		/*
			include_once "apps/models/produk.php";
			put your variable here.
		*/
		
		$model = $tools->load("forum/control");
		$results = $model->switch_thread($_GET['id']);

		$tools->redirect("http://$_SERVER[HTTP_HOST]/admin_edu/index.php?route=forum/control");
	}

	public function switch_member() {
		$tools = new Tools();
		//INCLUDING REQUIRED MODEL
		/*
			include_once "apps/models/produk.php";
			put your variable here.
		*/
		
		$model = $tools->load("forum/control");
		$results = $model->switch_member($_GET['id']);

		$tools->redirect("http://$_SERVER[HTTP_HOST]/admin_edu/index.php?route=forum/control");
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
		include_once "apps/views/forum/editmember.php";
		include_once "apps/views/common/footer.php";
		
	}
	
	public function member_save() {
		$tools = new Tools();
		if($_POST) {
			$data = $_POST;

			/*echo "<pre>";
			print_r($data);
			echo "</pre>";*/

			//echo md5(print_r($_FILES['banner'],true));

			$model = $tools->load("forum/control");
			if ($data['tipe']=="edit") {
				$model->editMember($data, $_GET['id']);
			}
		}
		/*echo "<pre>";
		print_r($_POST);
		print_r($_FILES);
		echo "</pre>";*/
		//echo "http://$_SERVER[HTTP_HOST]/admin_edu/index.php?route=tutorial/materi";
		$tools->redirect("http://$_SERVER[HTTP_HOST]/admin_edu/index.php?route=forum/control");
	}
	
	public function hapus() {
		$tools = new Tools();
		$model = $tools->load("news/berita");
		$model->hapus($_GET['id']);
		$tools->redirect("http://$_SERVER[HTTP_HOST]/admin_edu/index.php?route=news/berita");
	}
	
	

}
?>