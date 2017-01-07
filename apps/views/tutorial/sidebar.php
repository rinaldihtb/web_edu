<!-- FOR EVERY DEVICES EXCEPT MOBILE -->
<ul class="menu_sidebar hidden-xs">
	<?php 
		foreach($sideList as $l_key => $list ) {
			//$href = $sideList["$l_key"];
			if(count(explode("_", $l_key))>1) continue;
			?>
				<li><span ><a href="<?php echo $sideList[$l_key.'_href']; ?>"><?php echo $l_key; ?></a></span>
					<ul>
						<?php 
							foreach($list as $learnSub) {
								?>
									<li><a href="<?php echo $learnSub['href']?>"><?php echo $learnSub['nama']; ?></a></li>
								<?php
							}
						?>
					</ul>
				</li>
			<?php
		}
	?>
</ul>

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