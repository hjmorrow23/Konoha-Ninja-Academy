<!DOCTYPE html>
<html>
<head>
    <title><?php $pageTitle; ?> | Konoha Ninja Academy</title>
    <meta charset="UTF-8">
    
    <!-- Information that will display with description> -->
    
    <meta name="description" content="Konoha has a proud tradition of producing the greatest shinobi in history. Let your child join this honor!" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- External Normalize, CSS, and Javascript-->
  <link rel="stylesheet" type="text/css" href="css/application.css">
      
</head>
<body>
	
	<!-- Header Section -->
	<section class="main-header" id="top">	
		<header class="top-bar grid">
			<div class="grid__col--12">
				<span class="logo">
					<a href="index.php"><img src="img/leaf-village-symbol.svg" alt="Leaf Symbol"/></a>
				</span>
				<nav class="navbar">
						<span id="toggle" class="icn--nav-toggle is-displayed-mobile">
			            	<b class="srt">Toggle</b>
						</span>
					<ul class="nav is-collapsed-mobile">
						<li class="nav__item<?php if ($pageTitle == "Home") { echo '--current'; } ?>">
							<a href="index.php">Home</a>
						</li>
						<li class="nav__item<?php if ($pageTitle == "About") { echo '--current'; } ?>">
							<a href="about.php">About</a>
						</li>
						<li class="nav__item<?php if ($pageTitle == "Curriculum") { echo '--current'; } ?>">
							<a href="curriculum.php">Curriculum</a>
						</li>
						<li class="nav__item<?php if ($pageTitle == "Administration") { echo '--current'; } ?>">
							<a href="administration.php">Administration</a>
						</li>
						<li class="nav__item<?php if ($pageTitle == "News") { echo '--current'; } ?>">
							<a href="news.php">News</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="slider">
			<div id="slide-1" class="hero">
				<div class="hero__callout">
					<span class="hero__callout--heading"><?php echo $pageHeading; ?></span>
					<h2 class="hero__callout--text"><?php if($pageSubheading) { echo $pageSubheading; }?></h2>
					<?php if($pageHeadingLinkUrl) { echo '<button class="hero__callout--button"><a href="' . $pageHeadingLinkUrl . '">' . $pageHeadingLinkText . '</a></button>'; } ?>
				</div>
			</div>
		</div>
	</section>
	