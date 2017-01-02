<?php 
	class conn
	{
		public function open() 
		{
			return new mysqli(HOST, USERNAME, PASSWORD, DB_NAME);
		}
		public function close()
		{
			$this->open()->close();
		}
		
	
	}


?>