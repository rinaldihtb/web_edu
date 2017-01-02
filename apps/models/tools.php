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
				include("apps/views/{$template}");
			}
		}
	}


?>