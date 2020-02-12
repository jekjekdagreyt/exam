<html>
	<title>Cars</title>
	<body>
			<?php
				$object = new DOMDocument();
		$object->load("https://media.ford.com/content/fordmedia/fna/us/en/news.history.rss");
	
	
		$content = $object->getElementsByTagName("item");
	
		foreach($content as $data){
				$title = $data->getElementsByTagName("title")->item(0)->nodeValue;
				$link = $data->getElementsByTagName("link")->item(0)->nodeValue;
				$desc = $data->getElementsByTagName("description")->item(0)->nodeValue;
				$guid = $data->getElementsByTagName("guid")->item(0)->nodeValue;
		
			echo "$title - $link - $desc - $guid <br>";
	}

			
			?>
			
	</body>
</html>
