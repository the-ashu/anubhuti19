<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url();?>assets/home/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/home/grid.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/home/css/style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>assets/home//js/lib/dummy.js"></script>
      <script type="text/javascript" src="https://www.youtube.com/player_api"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
      <title>ANUBHUTI 19</title>
      <script type="text/javascript">


          window.onload=function(){

              var player;
              $("#javaImg").click(function(){
                  if($("#player").is("div"))
                  {
                      $(this).hide();
                      player = new YT.Player('player', {
                          height: '335',
                          width: '596',
                          playerVars: { 'controls': 1,'autohide':1},
                          videoId: '2dyD9_cJ9Q8',
                          events: {
                              'onReady': onPlayerReady,
                              'onStateChange': onPlayerStateChange
                          }
                      });

                  }
                  else {
                      player.autohide=1;
                      player.playVideo();
                  }
                  // when video ends
                  function onPlayerReady(event) {
                      event.target.playVideo();
                  }

                  function onPlayerStateChange(event) {
                      if(event.data === 0) {
                          $("#player").remove();
                          $("#playerContainer").append('<div id ="player" width="300" align="left" height="238" style="margin-right:30px;"></div>');
                          $("#javaImg").show();
                      }
                      else if(event.data===YT.PlayerState.PAUSED)
                      {
                          if (player.getDuration() - player.getCurrentTime() !== 0) {
                              $("#player").remove();
                              $("#playerContainer").append('<div id ="player" width="300" align="left" height="238" style="margin-right:30px;"></div>');
                              $("#javaImg").show();
                          }
                      }
                  }
              });

          }
          function cleanTime(){

              return Math.round(player.getCurrentTime())

          };

      </script>


  </head>
<body>
<div id="load"></div>
    <div id="paper-back">
      <video autoplay muted loop id="myVideo">
  <source src="<?php echo base_url();?>assets/home/bcg1.mp4" type="video/mp4">
</video>
	<nav>
		<div class="close"></div><br><br>
    </nav >
      <br>
      <br>
      <nav>
        <div class="list" id="n">
      <a class="a active" href="#">Home</a>
		  <a class=" a" href="<?php echo base_url();?>welcome/events">Events</a>
		  <a class=" a" href="<?php echo base_url();?>welcome/prevent">Past</a>
		  <a class=" a" href="<?php echo base_url();?>welcome/brochure">Brochure</a>
            <a class=" a" href="<?php echo base_url();?>welcome/team">Team</a>

    </div>
    </nav>

</div>
<div id="paper-window">
	<div id="paper-front">
		<div class="hamburger"><span></span></div>
        <p>
            <button type="button" class="btn btn-svg btn-small">
                <svg class="btn_svg" version="1.1" viewBox="0 0 30 20" preserveAspectRatio="none">
                    <rect class="btn_svg_shape" width="40" height="20"/>
                </svg>
                <span>Register</span>
            </button>
        </p>

        <div id="container" style="background-color: black ">

            <!--<iframe width="1366" height="768" src="https://www.youtube.com/embed/2dyD9_cJ9Q8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
            <img src="<?php echo base_url();?>assets/home/agni.png" id="javaImg">
            <div id="playerContainer">
                <div id="player" width="300" align="left" height="238" style="margin-right:30px;"></div>
            </div>
            <section></section>
			<section></section>
			<section></section>
		</div>
	</div>
</div>
<script>
    var paperMenu = {
	$window: $('#paper-window'),
	$paperFront: $('#paper-front'),
	$hamburger: $('.hamburger'),
	offset: 1800,
	pageHeight: $('#paper-front').outerHeight(),

	open: function() {
		this.$window.addClass('tilt');
		this.$hamburger.off('click');
		$('#container, .hamburger').on('click', this.close.bind(this));
		this.hamburgerFix(true);
		console.log('opening...');
	},
	close: function() {
		this.$window.removeClass('tilt');
		$('#container, .hamburger').off('click');
		this.$hamburger.on('click', this.open.bind(this));
		this.hamburgerFix(false);
		console.log('closing...');
	},
	updateTransformOrigin: function() {
		scrollTop = this.$window.scrollTop();
		equation = (scrollTop + this.offset) / this.pageHeight * 100;
		this.$paperFront.css('transform-origin', 'center ' + equation + '%');
	},
	//hamburger icon fix to keep its position
	hamburgerFix: function(opening) {
			if(opening) {
				$('.hamburger').css({
					position: 'absolute',
					top: this.$window.scrollTop() + 30 + 'px'
				});
			} else {
				setTimeout(function() {
					$('.hamburger').css({
						position: 'fixed',
						top: '30px'
					});
				}, 300);
			}
		},
	bindEvents: function() {
		this.$hamburger.on('click', this.open.bind(this));
		$('.close').on('click', this.close.bind(this));
		this.$window.on('scroll', this.updateTransformOrigin.bind(this));
	},
	init: function() {
		this.bindEvents();
		this.updateTransformOrigin();
	},
};

paperMenu.init();

</script>
    <script>
        // tell the embed parent frame the height of the content
        if (window.parent && window.parent.parent){
            window.parent.parent.postMessage(["resultsFrame", {
                height: document.body.getBoundingClientRect().height,
                slug: "2ocfuy9d"
            }], "*")
        }

        var btnContainer1 = document.getElementById("n");

        var btns=btnContainer1.getElementsByClassName("a");
        console.log(btns);

        // Loop through the buttons and add the active class to the current/clicked button
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
        jQuery(document).ready(function(){

            $('.btn-svg').each(function(){
                var
                    $this = $(this),
                    width = $this.outerWidth(),
                    height = $this.outerHeight(),
                    $svg = $this.find('svg'),
                    $rect = $svg.find('rect'),
                    totalPerimeter = width*2+height*2;

                $svg[0].setAttribute('viewBox', '0 0 '+width+' '+height);
                $rect.attr('width', width);
                $rect.attr('height', height);
                $rect.css({
                    strokeDashoffset: totalPerimeter,
                    strokeDasharray: totalPerimeter
                });
            });

        });
        document.onreadystatechange = function () {
            var state = document.readyState
            if (state === 'interactive') {
                document.getElementById('contents').style.visibility="hidden";
            } else if (state === 'complete') {
                setTimeout(function(){
                    document.getElementById('interactive');
                    document.getElementById('load').style.visibility="hidden";
                    document.getElementById('contents').style.visibility="visible";
                },1000);
            }
        }

    </script>
</body>
</html>
