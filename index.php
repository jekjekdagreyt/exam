<html>
	<title>Cars</title>		
			<?php
			$object = new DOMDocument();
			$object->load("https://media.ford.com/content/fordmedia/fna/us/en/news.history.rss");
		?>
		<H1 FORD MOTORS : HISTORY </H1>
	<?php
		$content = $object->getElementsByTagName("item");
	
		foreach($content as $data){
				$title = $data->getElementsByTagName("title")->item(0)->nodeValue;
				$link = $data->getElementsByTagName("link")->item(0)->nodeValue;
				$desc = $data->getElementsByTagName("description")->item(0)->nodeValue;
				$guid = $data->getElementsByTagName("guid")->item(0)->nodeValue;
				$pub = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
		
			echo "$title - $link - $desc - $guid - $pub <br>";
	}		
			?>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	</body>	
<ul>
	<h1><li><?php echo $title?></li></h1>
	<ul>
		<li><?php echo $link?></li>
	</ul>
	<ul>
		<li><?php echo $desc?></li>
	</ul>
	<ul>
		<li><?php echo $guid?></li>
	</ul>
	<ul>
		<li><?php echo $pub?></li>
	</ul>
</ul>

	</body>
</html>
