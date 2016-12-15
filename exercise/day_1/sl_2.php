<?php
$font = "verdana";
?>
<!DOCTYPE html>
<html>
<head>
<title>Day one</title>
<style>
	body{font-family:<?php echo $font;?>}
	.main_contant{width:900px; margin: 0 auto; background:<?php echo"#ddd"?>;}
	.header_option, .footer_option{background:#444;color:#fff;text-align:center;padding:20px;}
	.header_option h2, .footer_option h2{margin:0;}
	.body_option{min-height:400px;padding:20px; text-align:left;}
</style>
</head>
<body>
<div class= "main_contant">
	<section class="header_option"> 
		<h2>
		<?php
		//Single line comment
			echo "This is header.";
		?>
		</h2>
	</section>
	<section class="body_option"> 
		<p>
		<?php
		/* Multiline
		*comment
		*
		*/
			echo "This is paragraph.";
		?>
		</p>
	</section>
	<section class="footer_option"> 
		<h2>
		<?php
			echo "This is footer.";
		?>
		</h2>
	</section>
	
	
</div>
</body>
</html>