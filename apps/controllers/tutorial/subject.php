<?php 
class ControllerTutorialSubject {
public function index() {
		$tools = new Tools();
		//INCLUDING REQUIRED MODEL
		/*
			include_once "apps/models/produk.php";
			put your variable here.
		*/

		//RENDERING INTO VIEWS
		$model = $tools->load("tutorial/subject");
		$sideList = $model->getList();

		$recently_post = $model->getList(true);

		//BREADCRUBS

		$breadcrumb = array(
				array (
						"title" => "Home",
						"href" => "http://".$_SERVER['HTTP_HOST']."/index.php?route=common/home"
				),
				array (
						"title" => "Tutorial",
						"href" => "http://".$_SERVER['HTTP_HOST']."/index.php?route=tutorial/subject"
				)
		);

		/*echo "<pre>";
		print_r($sideList);
		echo "</pre>";*/
		include_once "apps/views/common/header.php";
		include_once "apps/views/tutorial/content.php";
		include_once "apps/views/common/footer.php";
	}

	//BREADCRUMBS

	public function learn() {
		//RENDERING INTO VIEWS
		$tools = new Tools();
		//INCLUDING REQUIRED MODEL
		/*
			include_once "apps/models/produk.php";
			put your variable here.
		*/

		//RENDERING INTO VIEWS
		$model = $tools->load("tutorial/subject");
		if(isset($_GET['learnid'])) {
			$id = $_GET['learnid'];
		} else if(isset($_GET['id'])) {
			$id = $_GET['id'];
		} else {
			$id = 0;
		}
		$result = $model->getLearn($id);
		$sideList = $model->getList();


		$breadcrumb = array(
				array (
						"title" => "Home",
						"href" => "http://".$_SERVER['HTTP_HOST']."/index.php?route=common/home"
				),
				array (
						"title" => "Tutorial",
						"href" => "http://".$_SERVER['HTTP_HOST']."/index.php?route=tutorial/subject"
				),
				array (
						"title" => $result['bc'],
						"href" => "#"
						//"href" => "http://".$_SERVER['HTTP_HOST']."/index.php?route=tutorial/subject/learn&id=$".$result['id_subject']
				),
				array (
						"title" => $result['nama']
				)
		);

		$url = "http://htmledit.squarefree.com/";
		// $url = "http://www.w3schools.com/html/tryit.asp?filename=tryhtml_default";


		$curlHandle = curl_init(); // init curl
		curl_setopt($curlHandle, CURLOPT_URL, $url); // set the url to fetch
		curl_setopt($curlHandle, CURLOPT_HEADER, 0);
		curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
		curl_setopt($curlHandle, CURLOPT_POST, 0);
		$online_compiler = curl_exec($curlHandle);
		if(!$online_compiler){
				//return 'Curl error: ' . curl_error($curlHandle);
			$online_compiler = 'Curl error: ' . curl_error($curlHandle);
		}
		///$online_compiler;
		//curl_close($curlHandle);

		/*echo "<pre>";
		print_r($result);
		echo "</pre>";*/

		include_once "apps/views/common/header.php";
		include_once "apps/views/tutorial/content.php";
		include_once "apps/views/common/footer.php";
	}
}
?>