<?php 
	class ModelDowntempTemplate
	{
		public function tambahTemplate($data = array()) {
			$con = new conn;
			$konek = $con->open();
			if($nama_image = $this->image($data))
				$result = $konek->query("INSERT INTO download_post SET judul='$data[nama]', konten='$data[konten]', tags='$data[tags]', image_url='$nama_image', date_insert=NOW()");
			else {
				$result = $konek->query("INSERT INTO download_post SET judul='$data[nama]', konten='$data[konten]', tags='$data[tags]', date_insert=NOW()");

			}
			// echo getcwd();
		}
		
		public function editTemplate($data = array(), $id) {
			$con = new conn;
			$konek = $con->open();
			if(isset($data['image']) && $nama_image = $this->image($data))
				$result = $konek->query("UPDATE download_post SET judul='$data[nama]', konten='$data[konten]', tags='$data[tags]', image_url='$nama_image', date_update=NOW() WHERE id='$id'");
			else {
				$result = $konek->query("UPDATE download_post SET judul='$data[nama]', konten='$data[konten]', tags='$data[tags]', date_update=NOW() WHERE id='$id'");
			}
		}
		
		public function getList() {
			$con = new conn;
			$konek = $con->open();
				
			$result = $konek->query("SELECT * FROM download_post");
			$results = array();
			while($row = $result->fetch_assoc()) {
				$row['date_insert'] = $this->indonesian_date($row['date_insert']);
				$row['date_update'] = $this->indonesian_date($row['date_update']);
				array_push($results, $row);
			}
			
			return $results;
		}
		
		public function getTemplate($id=0) {
			$con = new conn;
			$konek = $con->open();
			$result = $konek->query("SELECT * FROM download_post  WHERE id='$id'");
			return $result->fetch_assoc();
		}
		
		public function hapus($id=0) {
			$con = new conn;
			$konek = $con->open();
			$result = $konek->query("DELETE FROM download_post WHERE id='$id'");
		}

		private function image($data) {
			$target_dir = "assets/upload/image/banner/";
			$name_upload = md5(basename($data['image']["name"]).DATE("Y-m-d H:i:s")).basename($data['image']["name"]);
			$target_file = $target_dir . $name_upload;
			/*echo "<br>";
			echo $target_file;
			echo "</br>";*/
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			/*echo $imageFileType;
			echo "</br>";*/
			// Check if image file is a actual image or fake image
		    $check = getimagesize($data['image']["tmp_name"]);
		    /*print_r($check);*/
			//echo "</br>";
		    if($check !== false) {
		        // echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        // echo "File is not an image.";
		        $uploadOk = 0;
		    }

		    if (file_exists($target_file)) {
			    // echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}

			if ($data['image']["size"] > 1500000) {
			    // echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}

			if(strtolower($imageFileType) != "jpg"  && strtolower($imageFileType) != "png" && strtolower($imageFileType) != "jpeg" && strtolower($imageFileType) != "gif" ) {
			    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}

			if ($uploadOk == 0) {
			    // echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($data['image']['tmp_name'], $target_file)) {
			        // echo "The file ". basename( $name_upload). " has been uploaded.";
			        return $name_upload;
			    } else {
			        // echo "Sorry, there was an error uploading your file.";
			        return 0;
			    }
			}
			
		}

		public function indonesian_date ($timestamp = '', $date_format = 'l, j F Y | H:i', $suffix = 'WIB') {
		    if (trim ($timestamp) == '')
		    {
		            $timestamp = time ();
		    }
		    elseif (!ctype_digit ($timestamp))
		    {
		        $timestamp = strtotime ($timestamp);
		    }
		    # remove S (st,nd,rd,th) there are no such things in indonesia :p
		    $date_format = preg_replace ("/S/", "", $date_format);
		    $pattern = array (
		        '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
		        '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
		        '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
		        '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
		        '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
		        '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
		        '/April/','/June/','/July/','/August/','/September/','/October/',
		        '/November/','/December/',
		    );
		    $replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
		        'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
		        'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
		        'Januari','Februari','Maret','April','Juni','Juli','Agustus','Sepember',
		        'Oktober','November','Desember',
		    );
		    $date = date ($date_format, $timestamp);
		    $date = preg_replace ($pattern, $replace, $date);
		    $date = "{$date} {$suffix}";
		    return $date;
		}
		
	}
?>