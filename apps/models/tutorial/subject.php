<?php 
	class ModelTutorialSubject
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
		
		public function editBerita($data = array(), $id) {
			$con = new conn;
			$konek = $con->open();
			if(isset($data['image']) && $nama_image = $this->image($data))
				$result = $konek->query("UPDATE news_post SET judul='$data[nama]', konten='$data[konten]', tags='$data[tags]', image_url='$nama_image', date_update=NOW() WHERE id='$id'");
			else {
				$result = $konek->query("UPDATE news_post SET judul='$data[nama]', konten='$data[konten]', tags='$data[tags]', date_update=NOW() WHERE id='$id'");
			}
		}

		public function truncate($text, $chars = 300) {
		    $text = $text." ";
		    $text = substr($text,0,$chars);
		    $text = substr($text,0,strrpos($text,' '));
		    $text = $text."...";
		    return $text;
		}
		
		public function getList($recently_post=false) {
			$con = new conn;
			$konek = $con->open();
			
			$query_subjects = $konek->query("SELECT * FROM tutorial_subject");
			// echo "<pre>";
			$hasil = array();
			while($subject = $query_subjects->fetch_assoc()) {
				$nama = $subject['nama'];
				$id = $subject['id'];
				$query_learn = $konek->query("SELECT * FROM tutorial_learn_subject WHERE id_subject='$subject[id]'");
				while($learn = $query_learn->fetch_assoc()) {
					$learn['href'] = "http://".$_SERVER['HTTP_HOST']."/index.php?route=tutorial/subject/learn&learnid=$learn[id]";
					$hasil[$nama][] = $learn;
					$hasil[$nama."_href"] = "http://".$_SERVER['HTTP_HOST']."/index.php?route=tutorial/subject/learn&id=$id";;
				}
			}

			return $hasil;
			// print_r($hasil);
			// echo "</pre>";
			/*if($recently_post) {
				$result = $konek->query("SELECT * FROM download_post ORDER BY id LIMIT 5");
			} else {
				$result = $konek->query("SELECT * FROM download_post");
			}
			$results = array();
			while($row = $result->fetch_assoc()) {
				$row['date_insert'] = $this->indonesian_date($row['date_insert']);
				if($recently_post) {
					$row['konten'] = (strlen($row['konten'])>70) ? $this->truncate(strip_tags(html_entity_decode($row['konten'])), 70) : strip_tags(html_entity_decode($row['konten']));
				} else {
					$row['konten'] = (strlen(	$row['konten'])>300) ? $this->truncate(strip_tags(html_entity_decode($row['konten']))) : strip_tags(html_entity_decode($row['konten']));
				}
				$row['date_update'] = $this->indonesian_date($row['date_update']);
				$row['href'] = "http://".$_SERVER['HTTP_HOST']."/index.php?route=downtemp/downtemp/downItem&id=$row[id]";
				array_push($results, $row);
			}
			
			return $results;*/
		}
		
		public function getlearn($id=0) {
			$con = new conn;
			$konek = $con->open();
			$result = $konek->query("SELECT tl.*, ts.nama as bc FROM tutorial_learn_subject tl, tutorial_subject ts WHERE  tl.id_subject=ts.id AND tl.id='$id'");
			$hasil = $result->fetch_assoc();
			$hasil['konten'] = html_entity_decode($hasil['konten']);
			return $hasil;
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