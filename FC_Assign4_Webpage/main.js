//function enablePostBack()
//	{
        //T1 is the first argument(name of our control) I mentioned earlier and give the
       // value of second argument as "" that's all
 //      __doPostBack('indexNum',"");
//	}

//import System.IO; // complaining here

//function Start () {
    // Create an instance of StreamWriter to write text to a file.
//    sw = new StreamWriter("bigImageIndexNum.txt");
    // Add some text to the file.
//    sw.Write(indexNum);
//    sw.Close();
//}

let ar=document.querySelectorAll(".smallImage")
for(let indexNum=0;indexNum<ar.length;indexNum++){
	
	ar[indexNum].addEventListener('click', () => {
		console.log(ar[indexNum]);   //prints the <img src="cat4.jpg" class="smallImage"> info
		console.log(indexNum); //prints the array number
		//console.log(array[indexNum]); //array is undefined
		
		//__doPostBack('indexNum');
		//enablePostBack();
		//Start();
		//window.location.reload(forceGet);
		//window.location.href("index.php?index="+indexNum);
		//expandImage(ar[indexNum]);
	}
	)
	}
	
function expandImage(imgs){
	var expandImg = document.getElementById("bigImage");
	expandImg.src=imgs.src;
	expandImg.parentElement.style.display="block";
}
	
//function myFunction(imgs) {

  // Get the expanded image
//  var expandImg = document.getElementById("expandedImg");

  // Get the image text
//  var imgText = document.getElementById("imgtext");
  
  // Use the same src in the expanded image as the image being clicked on from the grid
//  expandImg.src = imgs.src;

  // Use the value of the alt attribute of the clickable image as text inside the expanded image
//  imgText.innerHTML = imgs.alt;

  // Show the container element (hidden with CSS)
//  expandImg.parentElement.style.display = "block";
//}
	
