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

				<h4><?php echo $result['thread']['judul'];?></h4>
				<div class="ktn">
					<?php echo $result['thread']['konten'];?>
					<span class="thread_date">Replied <?php echo $result['thread']['date_thread']; ?></span>
							<?php echo $result['thread']['username'];?>
				</div> 

			</div>
			<?php 
				foreach($result['replies'] as $reply) {
					?>
						<div class="show_reply bgcyan">
						<h5>Reply on : <?php echo $result['thread']['judul']?></h5>
						<div class="ktn">
							<?php echo $reply['konten'];?>	
						</div>
						<div class="thread_starter">
							<span class="thread_date">Replied <?php echo $reply['date_thread']; ?></span>
							By <?php echo $reply['username'];?>
						</div>
						</div>
					<?php
				}
			?>
			
			<div class="show_text_reply bgcyan">
				<h5>Reply on : <?php echo $result['thread']['judul']?></h5>
				<textarea name="asd"></textarea>
			</div>
		</div>
	</div>
</div>