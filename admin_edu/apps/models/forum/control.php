<?php 
	class ModelForumControl
	{
		public function tambahBerita($data = array()) {
			$con = new conn;
			$konek = $con->open();

			if($nama_image = $this->image($data)) {
				$result = $konek->query("INSERT INTO news_post SET judul='$data[nama]', konten='$data[konten]', tags='$data[tags]', image_url='$nama_image', date_insert=NOW()");
				// echo "asd";
			}
			else {
				$result = $konek->query("INSERT INTO news_post SET judul='$data[nama]', konten='$data[konten]', tags='$data[tags]', date_update=NOW()");
				// echo "asdasdad";

			}
			// echo getcwd();
		}
		
		public function editMember($data = array(), $id) {
			$con = new conn;
			$konek = $con->open();
			$password = md5($data['password']);

			$result = $konek->query("UPDATE forum_member SET username='$data[username]', password='$password', nama='$data[nama]', email='$data[email]', no_hp='$data[no_hp]' WHERE id='$id'");
		}

		public function switch_thread($id) {
			$con = new conn;
			$konek = $con->open();
			$thread = $this->getThread($id);

			$status = ($thread['status']) ? 0 : 1;
			//echo $status;
			$result = $konek->query("UPDATE forum_thread SET status='$status' WHERE id='$id'");
		}

		public function switch_member($id) {
			$con = new conn;
			$konek = $con->open();
			$member = $this->getMember($id);

			$status = ($member['status']) ? 0 : 1;
			//echo $status;
			$result = $konek->query("UPDATE forum_member SET status='$status' WHERE id='$id'");
		}
		
		public function getListThread() {
			$con = new conn;
			$konek = $con->open();
				
			$result = $konek->query("SELECT t.id, t.id_member, t.judul, t.konten, t.date_insert, t.status, t.date_update, t.views, t.vote,  m.username FROM forum_thread t, forum_member m WHERE  t.id_member=m.id");
			$results = array();
			while($row = $result->fetch_assoc()) {
				//$row['date_insert'] = $this->indonesian_date($row['date_insert']);
				$row['date_insert'] = date("Y-m-d", strtotime($row['date_insert']));
				$row['date_update'] = $this->indonesian_date($row['date_update']);
				$replies = $konek->query("SELECT * FROM forum_replies r WHERE r.id_thread='$row[id]'");
				$row['replies'] = $replies->num_rows;
				array_push($results, $row);
			}
			
			/*echo "<pre>";
			print_r($results);
			echo "</pre>";*/
			return $results;
		}

		public function getListMember() {
			$con = new conn;
			$konek = $con->open();
				
			$result = $konek->query("SELECT * FROM forum_member");
			$results = array();
			while($row = $result->fetch_assoc()) {
				$row['date_insert'] = date("Y-m-d", strtotime($row['date_insert']));
				$row['date_update'] = $this->indonesian_date($row['date_update']);
				array_push($results, $row);
			}
			
			return $results;
		}
		
		public function getThread($id=0) {
			$con = new conn;
			$konek = $con->open();
			$result = $konek->query("SELECT * FROM forum_thread  WHERE id='$id'");
			return $result->fetch_assoc();
		}

		public function getMember($id=0) {
			$con = new conn;
			$konek = $con->open();
			$result = $konek->query("SELECT * FROM forum_member  WHERE id='$id'");
			return $result->fetch_assoc();
		}
		
		public function hapus($id=0) {
			$con = new conn;
			$konek = $con->open();
			$result = $konek->query("DELETE FROM news_post WHERE id='$id'");
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