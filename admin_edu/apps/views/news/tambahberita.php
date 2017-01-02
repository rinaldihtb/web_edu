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
          <form action="index.php?route=news/berita/simpan" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Judul</label>
              <div class="controls">
                <input type="text" class="span11" name="nama" placeholder="Judul" />
              </div>
            </div>
      <div class="control-group">
        <label class="control-label">Banner</label>
        <div class="controls">
          <input type="file" name="banner"/>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">Konten</label>
        <div class="controls">
          <textarea class="textarea_editor span11" rows="6" name="konten" placeholder="Enter text ..."></textarea>
        </div>
      </div>
      <div class="control-group">
          <label class="control-label">Tags</label>
          <div class="controls">
            <input type="text" class="span11" name="tags" placeholder="Pisahkan dengan (,)" />
          </div>
      </div>
            <div class="form-actions">
              <button type="submit" name="tipe" value="tambah" class="btn btn-success">Save</button>
            </div>

          </form>
        </div>
	</div>
</div></div>
<script>
	$('.textarea_editor').wysihtml5();
</script>