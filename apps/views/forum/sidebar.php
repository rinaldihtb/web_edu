<!-- FOR EVERY DEVICES EXCEPT MOBILE -->
<div class="forumsidebars hidden-xs bgcyan">
	<div class="subsidebar bgcyan">
		<h4 class="head_sidebar">Recently Article</h4>
		<ul>
			<?php 
				foreach($recently_post as $rPost) {
					?>
						<li><a href="<?php echo $rPost['href']?>"><?php echo $rPost['judul']; ?></a>
						<span><?php echo $rPost['konten']; ?></span>
						</li>
					<?php
				}
			?>
		</ul>
	</div>
	<div class="subsidebar bgcyan">
		<h4 class="head_sidebar">Quoted Post</h4>
		<ul>
			<li>Lorem ipsum dolor sit amet, consectetur.
			<span>Lorem ipsum dolor sit amet...</span>
			</li>
			<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			<span>Lorem ipsum dolor sit amet...</span>
			</li>
			<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			<span>Lorem ipsum dolor sit amet...</span>
			</li>
		</ul>
	</div>
	<!-- <div class="subsidebar_tags bgcyan">
		<h4 class="head_sidebar">Related Tags</h4>
		<ul>
			<li>Lorem</li>
			<li>ipsum</li>
			<li>ipsum</li>
		</ul>
	</div> -->
	<div class="subsidebar bgcyan">
		<h4 class="head_sidebar">Hot Threads</h4>
		<ul>
			<?php 
				foreach($ht_post as $ht) {
					?>
						<li><a href="<?php echo $ht['href']?>"><?php echo $ht['judul']; ?></a></li>
					<?php
				}
			?>
		</ul>
	</div>
</div>

<!-- FOR MOBILE -->
<nav id="menu" class='hidden-sm hidden-md hidden-lg'>
	<ul>
		<li><a href="#">Home</a></li>
		<li><span>About us</span>
			<ul>
				<li><a href="#about/history">History</a></li>
				<li><span>The team</span>
					<ul>
						<li><a href="#about/team/management">Management</a></li>
						<li><a href="#about/team/sales">Sales</a></li>
						<li><a href="#about/team/development">Development</a></li>
					</ul>
				</li>
				<li><a href="#about/address">Our address</a></li>
			</ul>
		</li>
		<li><a href="#contact">Contact</a></li>
	</ul>
</nav>