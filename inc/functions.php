<?php
function get_news_html($id,$item) {
    $output = "<span class='grid__col--4'>
					<a href='article.php?id=" . $id . "'>
						<div class='news-panel'>
							<img src='" . $item['img'] . "'/>
							<p>" . $item['title'] . "</p>
						</div>
					</a>
			   </span>";
		    return $output;
}

function get_full_news_html($id,$item) {
    $output = "<h2>" . $item['title'] . "</h2>
    			<img src='" . $item['img'] . "'/>
				<p>" . $item['dateDisplay'] . "</p>
				<p>" . $item['postFull'] . "</p>";
		    return $output;
}

function array_news_category($news,$title) {
    $output = array();
    
    foreach ($news as $id => $item) {
        if ($title == null OR strtolower($title) == strtolower($item["title"])) {
            $sort = $item["dateData"];
            $output[$id] = $sort;            
        }
    }
    
    asort($output);
    return array_keys($output);
}
