<!--
SWEN502 - Webpages Assignment
Fiona Crook
300442873
-->

<!-- read in the picture urls to an array, and load index of first image into var indexNum -->
<?php
	$arTemp = file_get_contents("images.txt");		
	$array = explode("\n", $arTemp); // not sure if need to limit this size 		
	$indexNum=file_get_contents("bigImageIndexNum.txt");	
?>  
	
	
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title>
			My Cat Gallery
		</title>
		
	</head>
	
	<body>
	
	<h1>
		Welcome to my Cat gallery
	</h1>

	<p class="text">
	Browse the gallery below </br>
	Click on an image to expand it
	</p>

	<!-- create container and load first big image, using var indexNum -->
	<div class="bigImageLocate">
		<?php  $bigImageUrl =  $array[$indexNum]; ?>  			
		<img src= <?php echo $bigImageUrl ?> id="bigImage"  > 
	</div>
	</br>
	
	<!-- cycle through array, create gallery of smaller image 'thumbnails' -->
	<section class="imageGallery">
		<?php for($i=0;$i<count($array);$i++){  ?>			 
			 <img src= <?php echo $array[$i]?> class="smallImage"  onclick="expandImage(this);">  
		<?php  }  ?>
	</section>
	
	
	<script type="text/javascript" src="main.js"></script>

	
	</body>
	
</html>