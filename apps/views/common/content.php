<div class="container-fluid">
	<div class="row " >
		<div class="col-xs-12 col-sm-3 sidebar">
		<?php include_once "apps/views/common/sidebar.php"; ?>
		</div>
		<div class="col-xs-12 col-sm-9 content hidden-xs">
		<?php include_once "apps/views/route/".$_GET['page'].".php"; ?>
		</div>
	</div>
</div>
