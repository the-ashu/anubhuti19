<!DOCTYPE html>
<head>
	<meta charset="UTF-8" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">

	<title>Events</title>

	<link rel="stylesheet" href="<?php echo base_url();?>assets/event/css/normalize.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/event/css/cube.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/event/css/demo.css">
<style>
    nav {
        --duration: .5s;
        --easing: ease-in-out;
        position: relative;
        width: 220px;
        margin: 20px;
        left:0;
        z-index: 10;
        position: absolute;
    }
    nav ol {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    nav li {
        margin: -4px 0 0 0;
    }
    nav a {
        display: block;
        text-decoration: none;
        background: #000000;
        transform-origin: 0 0;
        transition: transform var(--duration) var(--easing), color var(--duration) var(--easing);
        transition-delay: var(--delay-out);
        border-radius: 4px;
        padding: 1em 1.52em;
    }
    nav a:hover {
        background: #666666;
    }
    nav .sub-menu a {
        font-size: .9em;
        color: #666666;
        border-left: 2em solid white;
        padding: .75em;
        background: linear-gradient(to right, #dddddd 2px, #ffffff 2px);
    }
    nav .sub-menu a:hover {
        background: linear-gradient(to right, #dddddd 2px, #efefef 2px);
    }
    nav header {
        font-weight: 600;
        display: block;
        background: rgba(255, 255, 255, 0.5);
        transform-origin: 0 0;
        transition: transform var(--duration) var(--easing), color var(--duration) var(--easing);
        transition-delay: var(--delay-out);
        border-radius: 4px;
        padding: 1em 1.52em;
    }
    nav header span {
        border: none;
        background: transparent;
        font-size: 1.5em;
        padding: 0;
        cursor: pointer;
        line-height: 1;
        float: right;
    }
    nav footer button {
        position: absolute;
        top: 0;
        left: 0;
        border: none;
        padding: calc(1em - 2px);
        width: 100%;
        transform-origin: 0 0;
        transition: transform var(--duration) var(--easing);
        transition-delay: calc(var(--duration) + (.1s * (var(--count) / 2)));
        cursor: pointer;
        outline: none;
        background: #cdcdcd;
        opacity: 0;
    }
    nav.closed a,
    nav.closed header {
        transform: translateY(calc(var(--top) * -1)) scaleY(0.1) scaleX(0.2);
        transition-delay: var(--delay-in);
        color: transparent;
    }
    nav.closed footer button {
        transition-delay: 0s;
        transform: scaleY(0.7) scaleX(0.2);
    }

</style>
</head>

<body class="" style="max-height: 100vh; width: 100vw;">
	<div class="Background">
		<video autoplay muted loop id="myVideo">
	<source src="<?php echo base_url();?>assets/home/bcg1.mp4" type="video/mp4">
	</video>
	</div>
    <div>
        <nav class="menu">
            <header>Menu <span>×</span></header>
            <ol>
                <li class="menu-item"><a href="<?php echo base_url();?>">Home</a></li>
                <li class="menu-item"><a href="<?php echo base_url();?>welcome/events">Events</a></li>
                <li class="menu-item">
                    <a href="<?php echo base_url();?>welcome/prevent">Past Events</a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo base_url();?>welcome/brochure">Brochure</a>
                </li>
                <li class="menu-item"><a href="<?php echo base_url();?>welcome/team">Team</a></li>
                <footer><button aria-label="Toggle Menu">Toggle</button></footer>
        </nav>
    </div>

<div class="Container">
	<h1>Events</h1>
	<div class="Cubes">
		<div class="CubeWrapper" >
			<div class="Cube">
				<div class="Cube-side Cube-side--front"  style="background-image: url('<?php echo base_url();?>assets/event/d2.PNG');" >

					<div class="Cube-side-dance"><a href="<?php echo base_url();?>welcome/dance" style="color:black;">Dance</a></div>
				</div>

				<div class="Cube-side Cube-side--second Cube-side--invert"  style="background-image: url('<?php echo base_url();?>assets/event/d3.JPG');">
					<div><a href="<?php echo base_url();?>welcome/dance" style="color:white;">Thirak</a></div>
				</div>
			</div>
		</div>

		<div class="CubeWrapper">
			<div class="Cube">
				<div class="Cube-side Cube-side--front"  style="background-image: url('<?php echo base_url();?>assets/event/sing2.JPEG');">
					<div class="Cube-side-song"><a href="<?php echo base_url();?>welcome/singing">Singing</a></div>
				</div>
				<div class="Cube-side Cube-side--second Cube-side--invert" style="background-image: url('<?php echo base_url();?>assets/event/sing1.JPG');">
                    <div><a href="<?php echo base_url();?>welcome/singing">Saptak</a></div>
				</div>
			</div>
		</div>

		<div class="CubeWrapper">
			<div class="Cube">
				<div class="Cube-side Cube-side--front" style="background-image: url('<?php echo base_url();?>assets/event/dr2.JPG');">
                    <div><a href="<?php echo base_url();?>welcome/drama">Drama</a></div>
				</div>
				<div class="Cube-side Cube-side--second Cube-side--invert" style="background-image: url('<?php echo base_url();?>assets/event/dr1.JPG');">
					<div><a href="<?php echo base_url();?>welcome/drama">Concouractous</div>
				</div>
			</div>
		</div>

		<div class="CubeWrapper">
			<div class="Cube">
				<div class="Cube-side Cube-side--front" style="background-image: url('<?php echo base_url();?>assets/event/lit1.JPG');">
                    <div><a href="<?php echo base_url();?>welcome/literary">Literary</a></div>
				</div>
				<div class="Cube-side Cube-side--second Cube-side--invert" style="background-image: url('<?php echo base_url();?>assets/event/lit2.JPG');">
                    <div><a href="<?php echo base_url();?>welcome/literary">Praninad</a></div>
				</div>
			</div>
		</div>

		<div class="CubeWrapper">
			<div class="Cube">
				<div class="Cube-side Cube-side--front"style="background-image: url('<?php echo base_url();?>assets/event/pf1.JPG');">
                    <div><a href="<?php echo base_url();?>welcome/art">Fine Arts</a></div>
				</div>
				<div class="Cube-side Cube-side--second Cube-side--invert" style="background-image: url('<?php echo base_url();?>assets/event/pf2.JPG');">
                    <div><a href="<?php echo base_url();?>welcome/art">Sanat</a></div>
				</div>
			</div>
		</div>

		<div class="CubeWrapper">
			<div class="Cube">
				<div class="Cube-side Cube-side--front" style="background-image: url('<?php echo base_url();?>assets/event/fa2.JPG');">
                    <div><font size=5><a href="<?php echo base_url();?>welcome/pfac">Capture</a></font></div>
				</div>
				<div class="Cube-side Cube-side--second Cube-side--invert" style="background-image: url('<?php echo base_url();?>assets/event/fa1.JPG');">
                    <div><a href="<?php echo base_url();?>welcome/pfac">Photography And Films</a></div>
				</div>
			</div>
		</div>

		<div class="CubeWrapper">
			<div class="Cube">
				<div class="Cube-side Cube-side--front" style="background-image: url('<?php echo base_url();?>assets/event/lg1.JPG');">
                    <div><a href="<?php echo base_url();?>welcome/lan"></a></div>
				</div>
				<div class="Cube-side Cube-side--second Cube-side--invert" style="background-image: url('<?php echo base_url();?>assets/event/lg2.JPG');">
					<div>

                        <a href="<?php echo base_url();?>welcome/lan">	LAN Gaming</a>

					</div>
				</div>
			</div>
		</div>
		<div class="CubeWrapper">
			<div class="Cube">
				<div class="Cube-side Cube-side--front" style="background-image: url('<?php echo base_url();?>assets/event/oe1.JPG');">
                    <div><a href="<?php echo base_url();?>welcome/online">Online Events</a></div>
				</div>
				<div class="Cube-side Cube-side--second Cube-side--invert" style="background-image: url('<?php echo base_url();?>assets/event/oe2.JPG');">
					<div>

                        <a href="<?php echo base_url();?>welcome/online">Online Events</a>

					</div>
				</div>
			</div>
		</div>
		<div class="CubeWrapper">
			<div class="Cube">
				<div class="Cube-side Cube-side--front" style="background-image: url('<?php echo base_url();?>assets/event/in1.JPG');">
                    <div> <a href="<?php echo base_url();?>welcome/informals">Informals</a></div>
				</div>
				<div class="Cube-side Cube-side--second Cube-side--invert" style="background-image: url('<?php echo base_url();?>assets/event/in2.JPG');">
					<div>

                        <a href="<?php echo base_url();?>welcome/informals">Informals</a>

					</div>
				</div>
			</div>
		</div>
		<div class="CubeWrapper">
			<div class="Cube">
				<div class="Cube-side Cube-side--front" style="background-image: url('<?php echo base_url();?>assets/event/mm1.JPG');">
                    <div> <a href="<?php echo base_url();?>welcome/mranubhuti">Mr Anubhuti</a></div>
				</div>
				<div class="Cube-side Cube-side--second Cube-side--invert" style="background-image: url('<?php echo base_url();?>assets/event/mm2.JPEG');">
					<div>

                        <a href="<?php echo base_url();?>welcome/mranubhuti">Mr Anubhuti</a>

					</div>
				</div>
			</div>
		</div>
		<div class="CubeWrapper">
			<div class="Cube">
				<div class="Cube-side Cube-side--front" style="background-image: url('<?php echo base_url();?>assets/event/sing1.JPG');">
					<div> <a href="<?php echo base_url();?>welcome/online">Online Events</a></div>
				</div>
				<div class="Cube-side Cube-side--second Cube-side--invert" style="background-image: url('<?php echo base_url();?>assets/event/sing1.JPG');">
					<div>

                        <a href="<?php echo base_url();?>welcome/online">Online Events</a>

					</div>
				</div>
			</div>
		</div>
		<div class="CubeWrapper">
			<div class="Cube">
				<div class="Cube-side Cube-side--front" style="background-image: url('<?php echo base_url();?>assets/event/sing1.JPG');">
					<div> <a href="<?php echo base_url();?>welcome/online">Online Events</a></div>
				</div>
				<div class="Cube-side Cube-side--second Cube-side--invert" style="background-image: url('<?php echo base_url();?>assets/event/sing1.JPG');">
					<div>

                        <a href="<?php echo base_url();?>welcome/online">Online Events</a>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>





	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/event/js/feature.js"></script>
	<script src="<?php echo base_url();?>assets/event/js/cube.js"></script>

	<script>
		$(function() {
			var cube = new Cube({
				cubeWrapperSelector: '.CubeWrapper',
				transitionTime: 300
			});
		});
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <script>

        var $els = $('.menu a, .menu header');
        var count = $els.length;
        var grouplength = Math.ceil(count/3);
        var groupNumber = 0;
        var i = 1;
        $('.menu').css('--count',count+'');
        $els.each(function(j){
            if ( i > grouplength ) {
                groupNumber++;
                i=1;
            }
            $(this).attr('data-group',groupNumber);
            i++;
        });

        $('.menu footer button').on('click',function(e){
            e.preventDefault();
            $els.each(function(j){
                $(this).css('--top',$(this)[0].getBoundingClientRect().top + ($(this).attr('data-group') * -15) - 20);
                $(this).css('--delay-in',j*.1+'s');
                $(this).css('--delay-out',(count-j)*.1+'s');
            });
            $('.menu').toggleClass('closed');
            e.stopPropagation();
        });

        // run animation once at beginning for demo
        setTimeout(function(){
            $('.menu footer button').click();
            setTimeout(function(){
                $('.menu footer button').click();
            }, (count * 100) + 500 );
        }, 1000);


    </script>
</body>
</html>
