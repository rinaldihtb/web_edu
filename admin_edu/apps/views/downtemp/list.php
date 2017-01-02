<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Tables</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
		<a class="btn btn-info" href="index.php?route=downtemp/template/tambah">Tambah </a>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
			
              <thead>
                <tr>
				  <th>No</th>
                  <th>Judul News</th>
                  <th>Tags</th>
                  <th>Date Created</th>
                  <th>Date Updated</th>
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
							<td><?php echo $result['tags'];?></td>
							<td><?php echo $result['date_insert'];?></td>
              <td><?php echo $result['date_update'];?></td>
							<td class="center"><a class="btn btn-mini btn-warning" href="index.php?route=downtemp/template/edit&id=<?php echo $result['id'];?>">Edit</a>
							<a class="btn btn-mini btn-danger" href="index.php?route=downtemp/template/hapus&id=<?php echo $result['id'];?>">Hapus</a></td>
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