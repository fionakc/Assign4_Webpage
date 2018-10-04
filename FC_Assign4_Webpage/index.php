<!-- have some php in here to read file, store image titles to array  -->

   
<?php

		$arTemp = file_get_contents("images.txt");
		
		$array = explode("\n", $arTemp,3);
		
	?>  
	
	<!-- <?php 
	$array[0]="cat1.jpg";
	$array[1]="cat2.jpg";
	$array[2]="cat4.jpg";
	?> -->
	
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title>
			Gallery
		</title>
		
	</head>
	<body>
	<!-- look at what's in the array -->
	<?php
	for ($i=0; $i<count($array); $i++) {
			 echo $array[$i];
			}
			?>
	
	
	<!--prob remove this later -->	
	<div class="tiledBackground">
	
	</div>
	
		<h1>
			Welcome to my Cat gallery
		</h1>
	
	<p>
	Filler text - browse gallery click image below to expand
	</p>
	
	<!--  <div id="largeImage" ><img src="cat1.jpg" width="300" > </div><br/> -->
	
	<!-- resized image but still too big??  -->
	<div class="bigImageLocate">
		<div class="bigImage"> </div>
	</div>
	
	<!-- trying to access array, and create an article for each element, of class smallImage -->
	
	<section class="imageGallery">
		<?php for($i=0;$i<count($array);$i++){ 
			echo $array[$i]; ?>
			 
			 <img src=$array[$i] class="smallImage"  > 
		<?php  }  ?>
	</section>
	
	<?php
	for ($i=0; $i<count($array); $i++) {
			 echo $array[$i];
			}
			?>
	

	<script type="text/javascript" src="main.js"></script>
	</body>
	
</html>