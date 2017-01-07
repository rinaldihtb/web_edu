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
				<?php 
					foreach($results as $result) {
						?>
						<div class="show_threads">
							<div class="thread_details">
								<a href="<?php echo $result['href']?>">
								<h4><?php echo $result['judul']; ?></h4>
								</a>
								<p><?php echo $result['konten']; ?></p>
								<div class="thread_tags">
									<p>Tags : <?php echo $result['tags']; ?></p>
								</div>
								<div class="thread_starter">
									<span class="thread_date">Asked <?php echo $result['date_thread']; ?></span>
									<img src="#"/><?php echo $result['username'];?>
								</div>
							</div>
							<div class="thread_static">
								<div class="thread_static_spot">
									<span><?php echo $result['vote'];?></span>
									Votes
								</div>
								<div class="thread_static_spot">
									<span><?php echo $result['replies'];?></span>
									Reply
								</div>
								<div class="thread_static_spot">
									<span><?php echo $result['views'];?></span>
									Views
								</div>
							</div>
							 <div class="clearfix"></div>
						</div>
						<?php
					}
				?>
		</div>
	</div>
</div>