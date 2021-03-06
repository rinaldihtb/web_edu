<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Common elements</a> </div>
  <h1>Common Form Elements</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Personal-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="index.php?route=tutorial/materi/simpan&id=<?php echo $_GET['id'];?>" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Judul</label>
              <div class="controls">
                <input type="text" class="span11" name="nama" placeholder="Judul" value="<?php echo $results['nama'];?>"/>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Bahasa Pemrograman</label>
             <div class="controls">
                <select name="subjek">
                  <option value="2" <?php echo ($results['id_subject']==2)? "selected" : "";?>>PHP</option>
                  <option value="1" <?php echo ($results['id_subject']==1)? 	"selected" : "";?>>HTML</option>
                  <option value="3" <?php echo ($results['id_subject']==3)? "selected" : "";?>>JAVASCRIPT</option>
                </select>
			</div>
			<div class="control-group">
              <label class="control-label">Deskripsi</label>
              <div class="controls">
                <input type="text" class="span11" name="deskripsi" placeholder="Deskripsi" value="<?php echo $results['deskripsi'];?>"/>
              </div>
            </div>
            </div>
			<div class="control-group">
				<label class="control-label">Konten</label>
				<div class="controls">
				  <textarea class="textarea_editor span11" rows="6" name="konten" placeholder="Enter text ..." ><?php echo $results['konten'];?></textarea>
				</div>
            </div>
			<div class="control-group">
              <div class="controls">
                <label>
                  <input type="checkbox" name="visible" <?php echo ($results['status']==1)? "checked" : "";?>/>
                  Visible</label>
              </div>
            <div class="form-actions">
              <button type="submit" name="tipe" value="edit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
	</div>
</div></div>
<script>
	$('.textarea_editor').wysihtml5();
</script>