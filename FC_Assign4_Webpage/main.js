//function enablePostBack()
//	{
        //T1 is the first argument(name of our control) I mentioned earlier and give the
       // value of second argument as "" that's all
 //      __doPostBack('indexNum',"");
//	}

import System.IO; // complaining here

function Start () {
    // Create an instance of StreamWriter to write text to a file.
    sw = new StreamWriter("bigImageIndexNum.txt");
    // Add some text to the file.
    sw.Write(indexNum);
    sw.Close();
}

let ar=document.querySelectorAll(".smallImage")
for(let indexNum=0;indexNum<ar.length;indexNum++){
	
	ar[indexNum].addEventListener('click', () => {
		//console.log(ar[indexNum]);   //prints the <img src="cat4.jpg" class="smallImage"> info
		console.log(indexNum); //prints the array number
		//console.log(array[indexNum]); //array is undefined
		
		//__doPostBack('indexNum');
		//enablePostBack();
		Start();
		window.location.reload(forceGet);
		//window.location.href("index.php?index="+indexNum);
	}
	)
	}
	
