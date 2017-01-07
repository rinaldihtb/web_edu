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
		$model = $tools->load("forum/forum");
		$results = $model->getList();

		$recently_post = $model->getList(true);
		$ht_post = $model->getHT();

		//BREADCRUBS

		$breadcrumb = array(
				array (
						"title" => "Home",
						"href" => "http://".$_SERVER['HTTP_HOST']."/index.php?route=common/home"
				),
				array (
						"title" => "Forum"//,
						//"href" => "http://".$_SERVER['HTTP_HOST']."/index.php?route=forum/forum"
				)
		);

		/*echo "<pre>";
		print_r($ht_post);
		echo "</pre>";*/
		include_once "apps/views/common/header.php";
		include_once "apps/views/forum/content.php";
		include_once "apps/views/common/footer.php";
	//}
	}

	//BREADCRUMBS

	public function thread() {
		$tools = new Tools();
		$model = $tools->load("forum/forum");
		$result = $model->getThread($_GET['id']);

		$recently_post = $model->getList(true);
		$ht_post = $model->getHT();

		//BREADCRUBS

		/*echo "<pre>";
		print_r($result);
		echo "</pre>";*/

		$breadcrumb = array(
				array (
						"title" => "Home",
						"href" => "http://".$_SERVER['HTTP_HOST']."/index.php?route=common/home"
				),
				array (
						"title" => "Forum",
						"href" => "http://".$_SERVER['HTTP_HOST']."/index.php?route=forum/forum"
				),
				array (
						"title" => $result['thread']['judul']
				)
		);

		include_once "apps/views/common/header.php";
		include_once "apps/views/forum/content.php";
		include_once "apps/views/common/footer.php";

	}

	public function api_js() {

		//$url = "http://phpfiddle.org/clirun";
		$url = "http://htmledit.squarefree.com/";
		// $url = "http://www.w3schools.com/html/tryit.asp?filename=tryhtml_default";


		$curlHandle = curl_init(); // init curl
		curl_setopt($curlHandle, CURLOPT_URL, $url); // set the url to fetch
		curl_setopt($curlHandle, CURLOPT_HEADER, 0);
		curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
		curl_setopt($curlHandle, CURLOPT_POST, 0);
		$content = curl_exec($curlHandle);
		if(!$content){
				//return 'Curl error: ' . curl_error($curlHandle);
			echo 'Curl error: ' . curl_error($curlHandle);
		} else {
				//return $content;
			echo $content;
		}
			curl_close($curlHandle);
		// include_once "apps/views/common/header.php";
		// include_once "apps/views/forum/content.php";
		// include_once "apps/views/common/footer.php";
	}
}
?>