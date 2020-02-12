<html>
	<title>Cars</title>		
			<?php
			$object = new DOMDocument();
			$object->load("https://media.ford.com/content/fordmedia/fna/us/en/news.history.rss");
			 
		$content = $object->getElementsByTagName("item");
	
		foreach($content as $data){
				$title = $data->getElementsByTagName("title")->item(0)->nodeValue;
				$link = $data->getElementsByTagName("link")->item(0)->nodeValue;
				$desc = $data->getElementsByTagName("description")->item(0)->nodeValue;
				$guid = $data->getElementsByTagName("guid")->item(0)->nodeValue;
				$pub = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
			echo "<ul>
			<h1><li>'$title'</li></h1></ul>
				<ul><br>
				<li><a href = '$link'>$link</a></li>
				<li>$desc</li>
				<li><a href = '$guid'>$guid</a></li>
				<li>$pub</li>
				</ul>";
	}		
			?>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	</body>	
	</body>
</html>
