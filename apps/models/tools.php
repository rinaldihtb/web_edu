<?php 
	class Tools
	{
		public function redirect($path) {
			header("Location: {$path}");
		}

		public function ControllerChecker($path) {
			
		}
		public function Output($data) {
			foreach($data as $template) {
				include_once("apps/views/{$template}");
			}
		}
		
		public function load($path) {
			include("apps/models/{$path}.php");
			$pecah = explode("/", $path);
			$model_path  = "Model";
			foreach($pecah as $rute) {
				$model_path.=ucfirst($rute);
			}
			return new $model_path();
		}
	}


?>