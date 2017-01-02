<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Forum</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
       <div class="span7">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Show Thread</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
      
              <thead>
                <tr>
          <th>No</th>
                  <th>Judul Thread</th>
                  <th>Posted By</th>
                  <th>Statistic</th>
                  <th>Date</th>
                  <th>Kontrol</th>
          
                </tr>
              </thead>
              <tbody>
        <?php
        //echo $content_views;
        $no = 0;
          foreach($threads as $result) {
            $no++;
            ?>
              <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $result['judul'];?></td>
              <td><?php echo $result['username'];?></td> 
              <td><span style="display:block">Replies : <?php echo $result['replies']?> </span><span style="display:block">Votes : <?php echo $result['vote']?></span><span style="display:block">Views : <?php echo $result['views']?></span></td> 
              <td><?php echo $result['date_insert'];?></td>
              <td class="center"><a class="btn btn-mini <?php echo ($result['status'])? 'btn-warning' : 'btn-success' ;?>" href="index.php?route=forum/control/switch_thread&id=<?php echo $result['id'];?>"><?php echo ($result['status'])? 'Close' : 'Open' ;?></a>
              </tr>
            <?php
          }
        ?>
                </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="span5">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Member</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
      
              <thead>
                <tr>
          <th>No</th>
                  <th>Username</th>
                  <th>Join Date</th>
                  <th>Kontrol</th>
          
                </tr>
              </thead>
              <tbody>
        <?php
        //echo $content_views;
        $no = 0;
          foreach($members as $result) {
            $no++;
            ?>
              <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $result['username'];?></td>
              <td><?php echo $result['date_insert'];;?></td>
              <td class="center"><a class="btn btn-mini btn-warning" href="index.php?route=forum/control/edit_member&id=<?php echo $result['id'];?>">Edit</a>
              <a class="btn btn-mini <?php echo ($result['status'])? 'btn-danger' : 'btn-success' ;?>" href="index.php?route=forum/control/switch_member&id=<?php echo $result['id'];?>"><?php echo ($result['status'])? 'Banned' : 'Unbanned' ;?></a></td>
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