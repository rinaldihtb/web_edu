<html>
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
<div class="container content hidden-xs">
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

						<div id="google_translate_element"></div><script type="text/javascript">
						function googleTranslateElementInit() {
						  new google.translate.TranslateElement({pageLanguage: 'id', includedLanguages: 'en,id', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
						}
						</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
						        
						<!-- <select>
							<option>Pilih Bahasa</option>
							<option>Indonesia</option>
							<option>English</option>
						</select> -->
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
			</div>
			</header>
		</div>
	</div>
	</div>
</div>

<!-- MENUBAR -->
<div class="container content hidden-xs">
	<div class="row menubar ">
		<div class="col-xs-12">
			<div class="panel_heading">
				<ul>
					<li><a href='?route=common/home'>Home</a></li>
					<li><a href='?route=tutorial/subject'>Tutorial</a>
						<ul>
							<li>HTML</li>
							<li>PHP</li>
							<li>JAVASCRIPT</li>
						</ul>
					</li>
					<li><a href='?route=forum/forum'>Forum</a></li>
					<li>Download
						<ul>
							<li><a href='?route=downtemp/downtemp'>Free Download Template</a></li>
						</ul>
					</li>
					<li><a href='?route=news/news'>News</a></li>
					<li>About Us</li>
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