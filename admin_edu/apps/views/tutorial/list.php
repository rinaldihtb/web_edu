<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Tables</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
		<a class="btn btn-info">Tambah </a>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
			
              <thead>
                <tr>
				  <th>No</th>
                  <th>Judul Materi</th>
                  <th>Deskripsi</th>
                  <th>Bahasa</th>
				  <th>Status</th>
                  <th>Kontrol</th>
				  
                </tr>
              </thead>
              <tbody>
				<?php
				//echo $content_views;
				$no = 0;
					foreach($results as $result) {
						$no++;
						?>
							<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $result['judul'];?></td>
							<td><?php echo $result['deskripsi'];?></td>
							<td><?php echo $result['tipe'];?></td>
							<td><?php echo ucfirst(($result['status'])? "enable": "disable");?></td>
							<td class="center"><a class="btn btn-mini btn-warning" href="index.php?route=tutorial/materi/edit&id=<?php echo $result['id'];?>">Edit</a>
							<a class="btn btn-mini btn-danger" href="index.php?route=tutorial/materi/hapus&id=<?php echo $result['id'];?>">Hapus</a></td>
							</tr>
						<?php
					}
				?>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>