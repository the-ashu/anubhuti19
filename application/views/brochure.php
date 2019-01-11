<!DOCTYPE html>

<html lang="en">
<head>

	<meta charset="utf-8">
	
	<title>Brochure</title>
	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/brochure/css/slider.css" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/brochure/js/jquery.flexslider-min.js"></script>

	<!-- Preview Styles -->
	<style>html,body{height:100%}body{margin:0}.flex-container{position: relative;margin: 0 auto;  padding: 50px;}</style>
<meta name="robots" content="noindex,follow" />
</head>

<body>

<div class="flex-container">
	<h1 style="text-transform: uppercase;text-align: center; font-weight: bolder; color: #E25822">Brochure</h1>
	<div class="flexslider">
		<ul class="slides">
			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg1.jpg" />
			</li>
			
			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg2.jpg" />
			</li>
			
			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg3.jpg" />
			</li>
			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg4.jpg" />
			</li>

			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg5.jpg" />
			</li>

			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg6.jpg" />
			</li>
			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg7.jpg" />
			</li>

			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg8.jpg" />
			</li>
			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg9.jpg" />
			</li>

			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg10.jpg" />
			</li>

			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg11.jpg" />
			</li>
			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg12.jpg" />
			</li>

			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg13.jpg" />
			</li>

			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg14.jpg" />
			</li>
			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg15.jpg" />
			</li>

			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg16.jpg" />
			</li>
			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg17.jpg" />
			</li>

			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg18.jpg" />
			</li>
			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg19.jpg" />
			</li>

			<li>
				<img src="<?php echo base_url();?>assets/brochure/img/pg20.jpg" />
			</li>
		</ul>
	</div>
</div>

<script>
$(document).ready(function () {
	$('.flexslider').flexslider({
		animation: 'fade',
		controlsContainer: '.flexslider'
	});
});
</script>
</body>
</html>