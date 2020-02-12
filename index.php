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
			echo "'$title' <br/>";
			echo "'$link' <br/>";
			echo "'$desc' <br/>";
			echo "'$guid' <br/>";
			echo "'$pub' <br/>";
	}		
			?>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	</body>	


	</body>
</html>
