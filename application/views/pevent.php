<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Glorious Past</title>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/prevent/assets/css/polyscape.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/prevent/assets/css/demo.css">
</head>
<body>

<nav>
    <li class="active"><a href="#polyscape-1"></a></li>
    <li><a href="#polyscape-2"></a></li>
    <li><a href="#polyscape-3"></a></li>
    <li><a href="#polyscape-4"></a></li>
    <li><a href="#polyscape-5"></a></li>
    <li><a href="#polyscape-6"></a></li>
</nav>

<div id="polyscape-1" class="polyscape-background">
    <h1>Kavi Sammelan</h1>
    <div class="square-rotated"></div>
    <div class="square"></div>
    <div class="circle"></div>
</div>

<div id="polyscape-2" class="polyscape-background">
    <h1>Shirley Setia</h1>
    <div class="diamond"></div>
    <div class="diamond"></div>
</div>

<div id="polyscape-3" class="polyscape-background">
    <h1>Band Agatsya</h1>
    <div class="circle"></div>
    <div class="triangle"></div>
</div>

<div id="polyscape-4" class="polyscape-background">
    <h1>Classical Dance</h1>
    <div class="square-rotated"></div>
    <div class="square"></div>
    <div class="circle"></div>
</div>

<div id="polyscape-5" class="polyscape-background">
    <h1>DJ Sartak</h1>
    <div class="triangle"></div>
    <div class="triangle"></div>
</div>
<div id="polyscape-6" class="polyscape-background">
    <div class="square-rotated"></div>
    <div class="square"></div>
    <div class="circle"></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="./assets/js/scroll.js"></script>
<script>
    $('#close-header').on('click', function (){
        $(this).parent().addClass('hidden');
    });
</script>
<script src="http://cdn.tutorialzine.com/misc/enhance/v3.js" async></script>

</body>
</html>
