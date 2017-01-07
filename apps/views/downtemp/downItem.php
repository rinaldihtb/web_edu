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
				<!-- <li><a href="#">Home</a></li>
				<li class='active'>News</li> -->
			</ul>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="bgwhite">
			<div class="show_thread bgcyan">
				<h4><?php echo $result['judul'];?></h4>
				<?php 
					if($result['image_url']) {
						echo "<img src='$result[image_url]' width='100%'></img>";
					}
				?>
				<p><?php echo html_entity_decode($result['konten']);?></p>
			</div>
		</div>
	</div>
</div>