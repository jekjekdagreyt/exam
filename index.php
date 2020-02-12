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
			echo "<ul class = 'nge'>
			<h1><li>'$title'</li></h1></ul>
				<ul class = 'meow'>
				<li><a href = '$link' target = '_blank'>$link</a></li>
				<li>$desc</li>
				<li><a href = '$guid' target = '_blank'>$guid</a></li>
				<li>$pub</li>
				</ul>";
	}		
			?>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	</body>	
		<h1 class = 'joke'>FOR MORE FEEDS OR INFO'S ABOUT FORD MOTORS! PLEASE CLICK HERE</h1><br/>
		<button  class = 'btn1'onclick='window.location.href = 'https://media.ford.com/content/fordmedia/fna/us/en/rss.html';'>FORD MOTORS RSS FEED</button>
	</body>
</html>
