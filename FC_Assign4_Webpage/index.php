<!-- have some php in here to read file, store image titles to array  -->

   
<?php
		$arTemp = file_get_contents("images.txt");
		
		$array = explode("\n", $arTemp,3); // not sure if need to limit this size 
		
		$indexNum=file_get_contents("bigImageIndexNum.txt");
		#$bigImageUrl = $array[$indexNum];
		#$bigImageUrl = $array[$GET["index"]];  //not works
		
	?>  
	
	
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

			<?php  
			
			$bigImageUrl =  $array[$indexNum]; 
			?>  
			
		<img id="bigImage" >
		<!--	<img src= <?php echo $bigImageUrl ?> class="bigImage"  >  -->
			
		<!-- <div class="bigImage"> </div> this was the original line-->
		
	</div>
	
	<!-- trying to access array, and create an article for each element, of class smallImage -->
	
	<section class="imageGallery">
		<?php for($i=0;$i<count($array);$i++){ 
			 ?>
			 
			 <img src= <?php echo $array[$i]?> class="smallImage"  onclick="expandImage(this);">  <!-- jump to php here because the array only exists inside php mode  -->
		<?php  }  ?>
	</section>
	
	
	<script type="text/javascript" src="main.js"></script>

	
	</body>
	
</html>