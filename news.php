<?php
set_time_limit(60);
date_default_timezone_set('America/New_York');
	$rss = new DOMDocument();
	$rss->load('https://openlab.citytech.cuny.edu/library/feed/');
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}

echo '<div class="panel-body"><table class="table"><tbody>';

	$limit = 6;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
                $date = date('l F d, Y', strtotime($feed[$x]['date']));

                $description = rtrim(mb_strimwidth($description, 0, 250, "..."));

		echo '<tr><td><p><span style="font-weight:bold;">'.$date.'</span><br><a href="'.$link.'" title="'.$title.'" style="font-weight:bold;">'.$title.'</a></p><p>'.$description.'</p><p><a class="btn btn-default" href="'.$link.'" role="button">Read more</a></p></td></tr>';
	}
       echo '<tr><td align="right"><a href="http://openlab.citytech.cuny.edu/library"><p>More News...</p></a></tr></td>';
	echo '</tbody></table></div>';
?>
