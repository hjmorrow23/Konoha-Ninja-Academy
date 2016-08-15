<?php 
include("inc/news-data.php");
include("inc/functions.php");

	
$pageTitle = "Home";
$pageHeading = "Konoha Ninja Academy 忍者学校";
$pageSubheading = "Prepare your child for the honorable way of the shinobi.";
$pageHeadingLinkText = "Enroll";
$pageHeadingLinkUrl = "enroll.php";

	
include("inc/header.php");	
?>
	<main>
		<section class="panel--padded--centered text">
			<div id="admission"> 
				<h1 class="centered">Admission Requirements</h1>
				<div class="grid text__section">
					<span class="grid__col--4 text__section--item"><img src="img/one.svg"/><p>Love the village and hope to help preserve peace and prosperity</p></span>
					<span class="grid__col--4 text__section--item"><img src="img/two.svg"/><p>Have a mind that will not yield, able to endure hard training and work</p></span>
					<span class="grid__col--4 text__section--item"><img src="img/three.svg"/><p>Be healthy in mind and body, and be true to your ninja way.</p></span>
				</div>
			</div>
		</section>
		<section class="panel--padded--centered text" id="news">
			<div id="news-slide">
				<a href="news.php"><h1>News</h1></a>
				<div class="grid news-text">
					<span class="grid__col--4">
						<a href="article.php?id=1">
							<div class="news-panel">
								<img src="img/kakashi1.jpg"/>
								<p>Kakashi fails another set of pupils after graduation</p>
								</div>
							</a>
					</span>
					<span class="grid__col--4 is-hidden-mobile">
						<a href="article.php?id=2">
							<div class="news-panel">
								<img src="img/rock-lee1.jpg"/>
								<p>No ninjutsu or genjutsu? No problem for Rock Lee</p>
							</div>
						</a>
					</span>
					<span class="grid__col--4 is-hidden-mobile">
						<a href="article.php?id=3">
							<div class="news-panel">
								<img src="img/young-naruto1.jpg"/>
								<p>Student paints hokage monument and suffers discipline</p>
							</div>
						</a>				
					</span>
				</div>
			</div>		
		</section>
		<section class="panel--padded--centered text alumni">
			<div id="alumni-spotlight-slide">
				<h1>Alumni Spotlight</h1>
				<h3>Sarutobi Asuma</h3>
				<img src="img/asuma.png" />
				<p class="alumni__text">Asuma is a respected village jonin and son of the 3rd Hokage. Asuma is feared as a fighter for his skill with chakra blades as well as his wind and fire release jutsu. He is the favorite to mentor the next collection of the Ino-Shika-Cho squad.</p>
			</div>
		</section>
<?php include("inc/footer.php"); ?>