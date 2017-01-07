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
			<div class="show_threads">
				<?php 
					foreach($results as $result) {
						?>
							<div class="thread_details">
								<a href="<?php echo $result['href']?>">
								<h4><?php echo $result['judul']; ?></h4>
								</a>
									<p><?php echo $result['konten']; ?></p>
								<div class="thread_tags">
									<p>Tags : <?php echo $result['tags']; ?></p>
								</div>
								<div class="thread_starter">
									<span class="thread_date">Posted by Admin</span>
								</div>
							</div>
						<?php
					}
				?>
				
			</div>
		</div>
	</div>
</div>