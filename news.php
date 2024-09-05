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
echo '<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>City Tech News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>';

echo '<div class="panel-body"><table class="table"><tbody>';

	$limit = 6;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
                $date = date('l F d, Y', strtotime($feed[$x]['date']));

                $description = rtrim(mb_strimwidth($description, 0, 250, "..."));

		echo '<tr><td><p><span style="font-weight:bold;">'.$date.'</span><br><a href="'.$link.'" title="'.$title.'" style="font-weight:bold;" target="_blank">'.$title.'</a></p><p>'.$description.'</p><p><a class="btn btn-primary" href="'.$link.'" target="_blank" role="button">Read more</a></p></td></tr>';
	}
       echo '<tr><td align="right"><a href="http://openlab.citytech.cuny.edu/library"><p>More News...</p></a></tr></td>';
	echo '</tbody></table></div>';
	echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>';

?>
