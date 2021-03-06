<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DANCE</title>
    <style>
     html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
  margin: 0;
  padding: 0;
}
.cont {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-image:url(<?php echo base_url();?>assets/dance/d2.jpg);
    background-size: cover;
  overflow: hidden;

}
.app {
  position: relative;
  min-width: 850px;
  height: 700px;
  box-shadow: 0 0 60px rgba(0, 0, 0, .3);
  overflow: hidden;
}
.app__bgimg {
  position: absolute;
  top: 0;
  left: -2.5%;
  width: 105%;
  height: 100%;
  transition: transform 3.5s 770ms;
}
.app__bgimg-image {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}
.app__bgimg-image--1 {
  background: url(<?php echo base_url();?>assets/dance/d2.jpg) center center no-repeat;
  background-size: cover;
}
.app__bgimg-image--2 {
  background: url(<?php echo base_url();?>assets/dance/d2.jpg) center center no-repeat;
  background-size: cover;
  opacity: 0;
  transition: opacity 0ms 1300ms;
  will-change: opacity;
}
.app__text {
  position: absolute;
  right: 165px;
  top: 10px;
  font-family: 'Roboto', sans-serif;
  text-transform: uppercase;
  z-index: 1;
}
.app__text-line {
  transition: transform 1500ms 400ms, opacity 750ms 500ms;
  will-change: transform, opacity;
  user-select: none;
}
.app__text-line--4 {
  transition: transform 1500ms 2300ms, opacity 1500ms 3500ms;
}
.app__text-line--3 {
  transition: transform 1500ms 2200ms, opacity 1500ms 3250ms;
}
.app__text-line--2 {
  transition: transform 1500ms 2100ms, opacity 1500ms 3000ms;
}
.app__text-line--1 {
  transition: transform 1500ms 2000ms, opacity 1500ms 2750ms;
}
.app__text-line--4 {
  font-size: 50px;
  font-weight: 700;
  color: #0a101d;
}
.app__text-line--3 {
  font-size: 40px;
  font-weight: 300;
}
.app__text-line--2 {
  margin-top: 10px;
  font-size: 14px;
  font-weight: 500;
  color: #09c;
}
.app__text-line--1 {
  margin-top: 15px;
}
.app__text-line--1 img {
  width: 50px;
}
.app__text--1 .app__text-line {
  transform: translate3d(0, -125px, 0);
  opacity: 0;
}
.app__text--2 {
  right: initial;
  top: 150px;
  left: 80px;
  z-index: -1;
  transition: z-index 1500ms;
}
.app__text--2 .app__text-line--4 {
  opacity: 0;
  transition: transform 1500ms 525ms, opacity 400ms 725ms;
}
.app__text--2 .app__text-line--3 {
  opacity: 0;
  transition: transform 1500ms 450ms, opacity 400ms 650ms;
}
.app__text--2 .app__text-line--2 {
  opacity: 0;
  transition: transform 1500ms 375ms, opacity 400ms 575ms;
}
.app__text--2 .app__text-line--1 {
  opacity: 0;
  transition: transform 1500ms 300ms, opacity 400ms 500ms;
}
.app__img {
  position: absolute;
  transform: translate3d(0, -750px, 0);
  width: 850px;
  height: 100%;
  transition: transform 3s cubic-bezier(0.6, 0.13, 0.31, 1.02);
  will-change: transform;
}
.app__img img {
  min-width: 100%;
  user-select: none;
}
.initial .app__img {
  transform: translate3d(0, 0, 0);
}
.initial .app__text--1 .app__text-line--1 {
  transform: translate3d(0, 0, 0);
  transition: transform 1500ms 1400ms, opacity 400ms 1600ms;
  opacity: 1;
}
.initial .app__text--1 .app__text-line--2 {
  transform: translate3d(0, 0, 0);
  transition: transform 1500ms 1475ms, opacity 400ms 1675ms;
  opacity: 1;
}
.initial .app__text--1 .app__text-line--3 {
  transform: translate3d(0, 0, 0);
  transition: transform 1500ms 1550ms, opacity 400ms 1750ms;
  opacity: 1;
}
.initial .app__text--1 .app__text-line--4 {
  transform: translate3d(0, 0, 0);
  transition: transform 1500ms 1625ms, opacity 400ms 1825ms;
  opacity: 1;
}
.active .app__bgimg {
  transform: translate3d(10px, 0, 0) scale(1.05);
  transition: transform 5s 850ms ease-in-out;
}
.active .app__bgimg .app__bgimg-image--2 {
  opacity: 1;
  transition: opacity 0ms 1500ms;
}
.active .app__img {
  transition: transform 3s cubic-bezier(0.6, 0.13, 0.31, 1.02);
  transform: translate3d(0, -1410px, 0);
}
.active .app__text--1 {
  z-index: -1;
  transition: z-index 0ms 1500ms;
}
.active .app__text--1 .app__text-line--1 {
  transform: translate3d(0, -125px, 0);
  transition: transform 1500ms 300ms, opacity 400ms 500ms;
  opacity: 0;
}
.active .app__text--1 .app__text-line--2 {
  transform: translate3d(0, -125px, 0);
  transition: transform 1500ms 375ms, opacity 400ms 575ms;
  opacity: 0;
}
.active .app__text--1 .app__text-line--3 {
  transform: translate3d(0, -125px, 0);
  transition: transform 1500ms 450ms, opacity 400ms 650ms;
  opacity: 0;
}
.active .app__text--1 .app__text-line--4 {
  transform: translate3d(0, -125px, 0);
  transition: transform 1500ms 525ms, opacity 400ms 725ms;
  opacity: 0;
}
.active .app__text--2 {
  z-index: 1;
}
.active .app__text--2 .app__text-line--1 {
  transform: translate3d(0, -125px, 0);
  transition: transform 2500ms 1100ms, opacity 1300ms 1300ms;
  opacity: 1;
}
.active .app__text--2 .app__text-line--2 {
  transform: translate3d(0, -125px, 0);
  transition: transform 2500ms 1175ms, opacity 1300ms 1575ms;
  opacity: 1;
}
.active .app__text--2 .app__text-line--3 {
  transform: translate3d(0, -125px, 0);
  transition: transform 2500ms 1250ms, opacity 1300ms 1850ms;
  opacity: 1;
}
.active .app__text--2 .app__text-line--4 {
  transform: translate3d(0, -125px, 0);
  transition: transform 2500ms 1325ms, opacity 1300ms 2125ms;
  opacity: 1;
}
.mouse {
  position: relative;
  margin-right: 20px;
  min-width: 50px;
  height: 80px;
  border-radius: 30px;
  border: 5px solid rgba(255, 255, 255, .8);
}
.mouse:after {
  content: '';
  position: absolute;
  top: 20px;
  left: 50%;
  transform: translate(-50%, 0);
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: #fff;
  animation: scroll 1s infinite alternate;
}
@keyframes scroll {
  100% {
    transform: translate(-50%, 15px);
  }
}
.pages {
  margin-left: 950px;
  margin-top:400px;
}
.pages__list {
  list-style-type: none;
}
.pages__item {
  position: relative;
  margin-bottom: 10px;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  border: 3px solid #fff;
  cursor: pointer;
}
.pages__item:after {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(0, 0);
  width: 75%;
  height: 75%;
  border-radius: 50%;
  background-color: #fff;
  opacity: 0;
  transition: 500ms;
}
.pages__item:hover:after {
  transform: translate(-50%, -50%) scale(1, 1);
  opacity: 1;
}
.page__item-active:after {
  transform: translate(-50%, -50%) scale(1, 1);
  opacity: 1;
}
.icon-link {
  position: absolute;
  left: 5px;
  bottom: 5px;
  width: 50px;
}
.icon-link img {
  width: 100%;
  vertical-align: top;
}
.icon-link--twitter {
  left: auto;
  right: 5px;
}
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
  background: #fff;
  transform-origin: 0 0;
  transition: transform var(--duration) var(--easing), color var(--duration) var(--easing);
  transition-delay: var(--delay-out);
  border-radius: 4px;
  padding: 1em 1.52em;
}
nav a:hover {
  background: #efefef;
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
<body>
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
    <div class="cont">

	<div class="app">
		<div class="app__bgimg">
			<div class="app__bgimg-image app__bgimg-image--1">
			</div>
			<div class="app__bgimg-image app__bgimg-image--2">
			</div>
		</div>
		<div class="app__img">
			<img onmousedown="return false" src="<?php echo base_url();?>assets/dance/lan.PNG" alt="city" />
		</div>

		<div class="app__text app__text--1">
			<div class="app__text-line app__text-line--4"><br>Cultural Council</div>
			<div class="app__text-line app__text-line--3">Dance</div>
			<div class="app__text-line app__text-line--2"> </div>

		</div>

		<div class="app__text app__text--2">
			<div class="app__text-line app__text-line--4"><br>Rules </div>
			<div class="app__text-line app__text-line--3">Events Schedule</div>
			<div class="app__text-line app__text-line--2"></div><br><br>
      <div class="app__text-line app__text-line--4">
        <ul>
          <li><a href="<?php echo base_url();?>welcome/btstepup"><font size="5" face="verdena">BattleTo StepUp</font></a></li>
          <li><a href="<?php echo base_url();?>welcome/grpdance"><font size="5" face="verdena">Group Dance</font></a></li>
          <li><a href="<?php echo base_url();?>welcome/solodance"><font size="5" face="verdena">Solo Dance </font></a></li>
          <li><a href="<?php echo base_url();?>welcome/duetdance/"><font size="5" face="verdena">Duet Dance</font></a></li>
        </ul>
      </div>
	</div>
	<div class="pages">
		<ul class='pages__list'>
			<li data-target='1' class='pages__item pages__item--1 page__item-active'></li>
			<li data-target='2' class='pages__item pages__item--2'></li>
		</ul>
	</div>
</div>

  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  ></script>
  <script>
     'use strict';

$(document).ready(function () {
	var $app = $('.app');
	var $img = $('.app__img');
	var $pageNav1 = $('.pages__item--1');
	var $pageNav2 = $('.pages__item--2');
	var animation = true;
	var curSlide = 1;
	var scrolledUp = void 0,
	    nextSlide = void 0;

	var pagination = function pagination(slide, target) {
		animation = true;
		if (target === undefined) {
			nextSlide = scrolledUp ? slide - 1 : slide + 1;
		} else {
			nextSlide = target;
		}

		$('.pages__item--' + nextSlide).addClass('page__item-active');
		$('.pages__item--' + slide).removeClass('page__item-active');

		$app.toggleClass('active');
		setTimeout(function () {
			animation = false;
		}, 3000);
	};

	var navigateDown = function navigateDown() {
		if (curSlide > 1) return;
		scrolledUp = false;
		pagination(curSlide);
		curSlide++;
	};

	var navigateUp = function navigateUp() {
		if (curSlide === 1) return;
		scrolledUp = true;
		pagination(curSlide);
		curSlide--;
	};

	setTimeout(function () {
		$app.addClass('initial');
	}, 1500);

	setTimeout(function () {
		animation = false;
	}, 4500);

	$(document).on('mousewheel DOMMouseScroll', function (e) {
		var delta = e.originalEvent.wheelDelta;
		if (animation) return;
		if (delta > 0 || e.originalEvent.detail < 0) {
			navigateUp();
		} else {
			navigateDown();
		}
	});

	$(document).on("click", ".pages__item:not(.page__item-active)", function () {
		if (animation) return;
		var target = +$(this).attr('data-target');
		pagination(curSlide, target);
		curSlide = target;
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
