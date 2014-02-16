<?php include 'switch.php';?>

<!DOCTYPE html>
<html>
<head>
 <title><?=$myTitle;?></title>
 <meta charset="UTF-8" />
 <meta name="robots" content="noindex,nofollow" />
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
 <link rel="stylesheet" type="text/css" href="css/alice.css" />
 <link href="css/flexslider.css" rel="stylesheet" media="screen" type="text/css" />

  <!--[if lt IE 9]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>

<header>
<img src="images/<?=$myPic;?>" class="icon" />
  <h2 class="pageid"><?=$myPageID;?></h2>
  <h1>Alice in Wonderland</h1>
  <!-- START MAIN NAV -->
  <nav class="main">
	<ul>
    	<?php echo makeLinks($nav1);?>
		<!--
    	<li class="current"><a href="file:///E|/index.html">Welcome</a></li>
		<li><a href="/alice.php">About Alice</a></li>
		<li><a href="/queen.php">The Queen</a></li>
		<li><a href="/madhatter.php">The Mad Hatter</a></li>
		<li><a href="/gallery.php">The Gallery</a></li>
		-->
	</ul>
  </nav>
  <!-- END MAIN NAV -->
</header>
 