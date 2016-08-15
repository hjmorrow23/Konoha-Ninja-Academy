<?php 
include("inc/news-data.php");
include("inc/functions.php");
	
$pageTitle = "News";
$pageHeading = "KNA Current Events";

	
include("inc/header.php");	
?>
	<main>
		<section class="panel--padded--centered text">
			<div>
				<h1>News</h1>
				<div class="grid news-text">
					<?php $article = array_news_category($news);
			            foreach ($article as $id) {
			                echo get_news_html($id,$news[$id]);
			            }
			        ?>
				</div>
			</div>		
		</section>
<?php include("inc/footer.php"); ?>