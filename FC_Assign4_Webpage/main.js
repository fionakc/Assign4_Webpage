

let ar=document.querySelectorAll(".smallImage")
for(let indexNum=0;indexNum<ar.length;indexNum++){
	
	ar[indexNum].addEventListener('click', () => {
		//console.log(ar[indexNum]);   //prints the <img src="cat4.jpg" class="smallImage"> info
		console.log(indexNum); //prints the array number
		//console.log(array[indexNum]); //array is undefined
		imageLink=indexNum;
	}
	)
	};