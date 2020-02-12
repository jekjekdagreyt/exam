<html>
	<title>Cars</title>
	<body>
			<?php
				$object = new DOMDocument();
		$object->load("https://examxxx.herokuapp.com/");
	
	
		$content = $object->getElementsByTagName("item");
	
		foreach($content as $data){
				$name = $data->getElementsByTagName("name")->item(0)->nodeValue;
				$information = $data->getElementsByTagName("information")->item(0)->nodeValue;
				$news = $data->getElementsByTagName("news")->item(0)->nodeValue;
				$link = $data->getElementsByTagName("url")->item(0)->nodeValue;
		
			echo "$name - $information - $news - $link <br>";
	}

			
			?>
			
	</body>
</html>
