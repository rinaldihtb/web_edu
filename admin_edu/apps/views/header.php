<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>asdas</title>
	<script type="text/javascript" src="<?php echo SUB_URL;?>/js/jquery-1.4.2.js"></script>
	<script type="text/javascript" src="<?php echo SUB_URL;?>/js/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="<?php echo SUB_URL;?>/js/jquery-ui.js"></script>
	<link href="<?php echo SUB_URL;?>/css/jquery-ui.css" rel="stylesheet">
	<link href="<?php echo SUB_URL;?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo SUB_URL;?>/css/main.css" rel="stylesheet">
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
	</script>
</head>
<body>
<div class="container content">
	<div class="row header" >
		<div class="col-xs-12">
			<div class="col-xs-2">
				<img src="asdasdasd.jpg" alt="Logo" class="logo bggreen">
			</div>
			<div class="col-xs-5 col-xs-offset-5  col-sm-3 col-sm-offset-7 bgyellow">
				<div class="row">
					<div class="col-xs-12 bgblue">
						Pilih Bahasa
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 bgred">
						Search Mode
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<div class="container content">
	<div class="row menubar">
		<div class="col-xs-12">
			menubar
		</div>
	</div>
	</div>
</div>
