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
          <form action="index.php?route=forum/control/member_save&id=<?php echo $results['id'];?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Username</label>
              <div class="controls">
                <input type="text" class="span11" name="username" placeholder="Username" value="<?php echo $results['username'];?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password</label>
              <div class="controls">
                <input type="password" class="span11" name="password" placeholder="******" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Lengkap</label>
              <div class="controls">
                <input type="text" class="span11" name="nama" placeholder="Nama Lengkap" value="<?php echo $results['nama'];?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email</label>
              <div class="controls">
                <input type="text" class="span11" name="email" id="email" placeholder="Email" value="<?php echo $results['email'];?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">No Hape</label>
              <div class="controls">
                <input type="text" class="span11" name="no_hp" id="number" placeholder="No Telepon" value="<?php echo $results['no_hp'];?>"/>
              </div>
            </div>
      <!-- <div class="control-group">
        <label class="control-label">Banner</label>
        <div class="controls">
          <input type="file" name="banner"/>
        </div>
      </div> -->
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