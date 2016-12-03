<?php 
	class Tools
	{
		public function redirect($path) {
			header("Location: {$path}");
		}
	}


?>