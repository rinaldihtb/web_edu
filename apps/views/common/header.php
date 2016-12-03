<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>asdas</title>
	<script type="text/javascript" src="<?php echo SUB_URL;?>/js/jquery-1.4.2.js"></script>
	<script type="text/javascript" src="<?php echo SUB_URL;?>/js/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="<?php echo SUB_URL;?>/js/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo SUB_URL;?>/js/jquery.mmenu.all.min.js"></script>
	<link href="<?php echo SUB_URL;?>/css/main.css" rel="stylesheet">
	<link href="<?php echo SUB_URL;?>/css/jquery-ui.css" rel="stylesheet">
	<link href="<?php echo SUB_URL;?>/css/jquery.mmenu.all.css" rel="stylesheet">
	<link href="<?php echo SUB_URL;?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo SUB_URL;?>/css/mmenu.css" rel="stylesheet">
	<script type="text/javascript">
		$(document).ready(function() {
			//alert(20);
			
			$("ul.menu_sidebar li span").click(function (){
				if ($(this).parent().children("ul").is(':hidden')) {
					$(this).parent().children("ul").slideDown();
				} else {
					$(this).parent().children("ul").slideUp();
				}
			});

		});
		$(function() {
				$('nav#menu').mmenu({
					extensions				: [ 'effect-slide-menu', 'shadow-page', 'shadow-panels' ],
					keyboardNavigation 		: true,
					screenReader 			: true,
					counters				: true,
					navbar 	: {
						title	: 'Advanced menu'
					},
					navbars	: [	
						{
							position	: 'top',
							content		: [ 'searchfield' ]
						}, {
							position	: 'top',
							content		: [
								'prev',
								'title',
								'close'
							]
						}, {
							position	: 'bottom',
							content		: [
								''
							]
						}
					]
				});
			});
	</script>
</head>
<body>
<!-- FOR EVERY DEVICES EXCEPT MOBILE -->
<div class="container-fluid content hidden-xs">
	<div class="row header" >
		<div class="col-xs-12">
			<header id="header" class="">
			<div class="row" >
			<div class="col-xs-2">
				<img src="#" alt="Logo" class="logo bggreen">
			</div>
			<div class="col-xs-5 col-xs-offset-5  col-sm-3 col-sm-offset-7 ">
				<div class="row">
					<div class="col-xs-12 "> 
						<select>
							<option>Pilih Bahasa</option>
							<option>Indonesia</option>
							<option>English</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 ">
						<input type="text" placeholder="Cari .... "/>
						<button>Cari</button>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 ">
					Login | Register
					</div>
				</div>
			</div>
			<!-- 
			<div class="col-xs-5 col-xs-offset-5  col-sm-3 col-sm-offset-7 bgyellow">
				<div class="row">
					<div class="col-xs-12 bgblue">
						<select>
							<option>Pilih Bahasa</option>
							<option>Indonesia</option>
							<option>English</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 bgred">
						<input type="text" placeholder="Cari .... "/>
						<button>Cari</button>
					</div>
				</div>
			</div> 
			</div>-->
			</div>
			</header>
		</div>
	</div>
	</div>
</div>
<div class="container-fluid content hidden-xs">
	<div class="row menubar ">
		<div class="col-xs-12">
			<div class="panel_heading">
				<ul>
					<li>Home</li>
					<li>Tutorial
					<ul>
						<li>PEMILIHAN 1</li>
						<li>PEMILIHAN 2</li>
						<li>PEMILIHAN 3</li>
						<li>PEMILIHAN 4</li>
					</ul>
					</li>
					<li>About</li>
				</ul>
			</div>	
		</div>
	</div>
	</div>
</div>

<!-- FOR MOBILE -->
<div class="mmheads hidden-sm hidden-md hidden-lg">
	<a href="#menu" ><span></span></a>
	Demo
</div>