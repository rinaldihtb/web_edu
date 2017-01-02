<?php 
	class ModelTutorialMateri
	{
		public function tambahMateri($data = array()) {
			$con = new conn;
			$konek = $con->open();
			$result = $konek->query("INSERT INTO tutorial_learn_subject SET id_subject='$data[subjek]', nama='$data[nama]', konten='$data[konten]', deskripsi='$data[deskripsi]', date_insert=NOW(), status='$data[visible]'");
			//$result->fetch_assoc();
			//echo "asd";
		}
		
		public function editMateri($data = array(), $id) {
			$con = new conn;
			$konek = $con->open();
			$result = $konek->query("UPDATE tutorial_learn_subject SET id_subject='$data[subjek]', nama='$data[nama]', konten='$data[konten]', deskripsi='$data[deskripsi]', date_insert=NOW(), status='$data[visible]' WHERE id='$id'");
		}
		
		public function getList() {
			//echo "asd";
			$con = new conn;
			$konek = $con->open();
				
			//echo "asdad";
			$result = $konek->query("SELECT ls.id, ls.nama as judul,ls.konten,ls.deskripsi,ls.status, s.nama as tipe FROM tutorial_learn_subject ls, tutorial_subject s WHERE ls.id_subject=s.id");
			//echo $result;
			//print_r($result);
			$results = array();
			while($row = $result->fetch_assoc()) {
				array_push($results, $row);
			}
			
			return $results;
		}
		
		public function getMateri($id=0) {
			//echo "asd";
			$con = new conn;
			$konek = $con->open();
				
			//echo "asdad";
			//echo $id;
			$result = $konek->query("SELECT * FROM tutorial_learn_subject WHERE id='$id'");
			//print_r($result->fetch_assoc());
			//echo $result;
			//print_r($result);
			return $result->fetch_assoc();
		}
		
		public function hapus($id=0) {
			//echo "asd";
			$con = new conn;
			$konek = $con->open();
			$result = $konek->query("DELETE FROM tutorial_learn_subject WHERE id='$id'");
		}
		
		
	}
?>