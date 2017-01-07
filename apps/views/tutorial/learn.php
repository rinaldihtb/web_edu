<div class="row">
	<div class="col-sm-12">
		<div class="bgcyan">
			<ul class="breadcrumb">
				<?php 
					for($i = 0;$i<count($breadcrumb);$i++) {
						if($i==count($breadcrumb)-1) {
							?>
								<li class='active'><?php echo $breadcrumb[$i]['title']?></li>
							<?php 
							break;
						}
						?>
							<li><a href="<?php echo $breadcrumb[$i]['href'];?>"><?php echo $breadcrumb[$i]['title'];?></a></li>
						<?php 
					}
				?>
			</ul>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="bgwhite">
			<div class="show_thread bgcyan">
				<h4><?php echo $result['nama']?></h4>
				<div class="ktn">
					<?php echo $result['konten']?>
				</div>
				<div class="compiler">
					RUNNING THE CODE
					<iframe src="http://htmledit.squarefree.com/" style="width:100%; height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>