<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
<title>Create A Day</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php include('create.php') ?>

<div class="main-box">
	<div class="top-box"> <!-- box for HIGHS and LOWS -->
        <a href="highs.php" class="main-image highs-image"><div class="top-left-box"><p>HIGHS</p></div></a>
        <a href="lows.php" class="main-image lows-image"><div class="top-right-box"><p>LOWS</p></div></a>
    </div> <!--end top-box-->
	<div class="middle-box"> <!-- box for PORTABLES and ICE BREAKERS -->
        <a href="portables.php" class="main-image portables-image"><div class="second-left-box"><p>PORTABLES</p></div></a>
        <a href="ice-breakers.php" class="main-image ice-image"><div class="second-right-box"><p>ICE BREAKERS</p></div></a>
    </div> <!--end middle-box-->
	<div class="bottom-box"> <!-- box for A-Z and THEMES -->
        <a href="search.php" class="main-image all-image"><div class="third-left-box"><p>A-Z</p></div></a>
        <a href="themes.php" class="main-image themes-image"><div class="third-right-box"><p>THEMES</p></div></a>
    </div> <!--end bottom-box-->
</div>

<?php include('footer.php') ?>

</body>
</html>